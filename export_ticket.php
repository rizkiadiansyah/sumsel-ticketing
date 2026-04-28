<?php
ini_set('display_errors', 0);
error_reporting(0);

while (ob_get_level()) {
    ob_end_clean();
}

require_once("include/dbcommon.php");

$vendor_paths = [
    "vendor/autoload.php",
    "../vendor/autoload.php",
];

$loaded = false;
foreach ($vendor_paths as $path) {
    if (file_exists($path)) {
        require_once($path);
        $loaded = true;
        break;
    }
}

if (!$loaded) {
    die("Error: vendor/autoload.php tidak ditemukan.");
}

$ids = isset($_GET["ids"]) ? $_GET["ids"] : "";
if (empty($ids)) die("Error: Tidak ada ID yang dipilih.");

$id_array = array_filter(explode(",", $ids));
if (empty($id_array)) die("Error: Format ID tidak valid.");

// =============================================
// BUAT SPREADSHEET
// =============================================
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Report Tiket");

// =============================================
// STYLE HELPERS
// =============================================
function styleHeader($sheet, $range) {
    $sheet->getStyle($range)->applyFromArray([
        'font' => [
            'bold'  => true,
            'color' => ['rgb' => 'FFFFFF'],
            'size'  => 11,
        ],
        'fill' => [
            'fillType'   => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['rgb' => '1F4E79'],
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText'   => true,
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color'       => ['rgb' => 'FFFFFF'],
            ],
        ],
    ]);
}

function styleData($sheet, $range) {
    $sheet->getStyle($range)->applyFromArray([
        'alignment' => [
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            'wrapText'  => false,
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color'       => ['rgb' => 'D0D0D0'],
            ],
        ],
    ]);
}

// Helper: set cell sebagai TEXT supaya tidak jadi scientific notation
function setCellText($sheet, $coord, $value) {
    $sheet->setCellValueExplicit(
        $coord,
        $value,
        \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
    );
}

// Helper: fromArray tapi semua kolom NIK/KTP dipaksa string
function setRowData($sheet, $startCol, $row, $values, $textCols = []) {
    $col = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($startCol);
    foreach ($values as $i => $val) {
        $coord = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col + $i) . $row;
        if (in_array($i, $textCols)) {
            setCellText($sheet, $coord, $val);
        } else {
            $sheet->setCellValue($coord, $val);
        }
    }
}

// =============================================
// TITLE
// =============================================
$sheet->setCellValue('A1', 'Report History Pengajuan Tiket');
$sheet->mergeCells('A1:AJ1');
$sheet->getStyle('A1')->applyFromArray([
    'font'      => ['bold' => true, 'size' => 14, 'color' => ['rgb' => '1F4E79']],
    'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
]);
$sheet->getRowDimension(1)->setRowHeight(30);

date_default_timezone_set('Asia/Jakarta');
$sheet->setCellValue('A2', 'Diekspor pada: ' . date('d-m-Y H:i:s'));
$sheet->mergeCells('A2:AJ2');
$sheet->getStyle('A2')->applyFromArray([
    'font'      => ['italic' => true, 'size' => 10, 'color' => ['rgb' => '666666']],
    'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
]);

// =============================================
// HEADER ROW 3 (Group Header)
// =============================================
$sheet->setCellValue('A3', 'No');
$sheet->setCellValue('B3', 'Nomor Request');
$sheet->setCellValue('C3', 'Pemesan');
$sheet->setCellValue('J3', 'Pengajuan');
$sheet->setCellValue('M3', 'Data Penumpang');
$sheet->setCellValue('U3', 'Penerbangan Berangkat');
$sheet->setCellValue('AB3', 'Penerbangan Pulang');
$sheet->setCellValue('AI3', 'Status');

$sheet->mergeCells('A3:A4');
$sheet->mergeCells('B3:B4');
$sheet->mergeCells('C3:I3');   // 7 kolom pemesan
$sheet->mergeCells('J3:L3');   // Jenis, Beban SBU, Alasan
$sheet->mergeCells('M3:T3');   // 8 kolom penumpang
$sheet->mergeCells('U3:AA3');  // 7 kolom berangkat
$sheet->mergeCells('AB3:AH3'); // 7 kolom pulang
$sheet->mergeCells('AI3:AI4');

// =============================================
// SUB HEADER ROW 4
// =============================================
$sheet->fromArray(['NIK', 'Nama', 'Posisi', 'SBU', 'Email', 'No HP', 'Atasan'], NULL, 'C4');
$sheet->fromArray(['Jenis', 'Beban SBU', 'Alasan'], NULL, 'J4');
$sheet->fromArray(['NIK', 'KTP', 'Nama', 'Posisi', 'SBU', 'No HP', 'Gender', 'Tipe'], NULL, 'M4');
$sheet->fromArray(['Asal', 'Tujuan', 'Maskapai', 'Tanggal', 'Berangkat', 'Tiba', 'Catatan'], NULL, 'U4');
$sheet->fromArray(['Asal', 'Tujuan', 'Maskapai', 'Tanggal', 'Berangkat', 'Tiba', 'Catatan'], NULL, 'AB4');

styleHeader($sheet, 'A3:AI4');
$sheet->getRowDimension(3)->setRowHeight(20);
$sheet->getRowDimension(4)->setRowHeight(20);

// =============================================
// DATA — NO MERGE, repeat header per penumpang
// =============================================
$row = 5;
$no  = 1;
$statusMap = [];

$rs_status = DB::Query("SELECT Code, Description FROM tbl_code_list WHERE CatID = 'status'");
while ($row_status = $rs_status->fetchAssoc()) {
    $statusMap[$row_status["Code"]] = $row_status["Description"];
}

foreach ($id_array as $req_id) {
    $req_id = trim($req_id);
    if (empty($req_id)) continue;

    $req_id_safe = addslashes($req_id);

    $sql_hdr = "SELECT * FROM tbl_pengajuan_ticket_hdr WHERE req_id = '$req_id_safe'";
    $rs_hdr  = DB::Query($sql_hdr);

    while ($hdr = $rs_hdr->fetchAssoc()) {

        $sql_dtl = "SELECT * FROM tbl_pengajuan_ticket_dtl WHERE req_id = '$req_id_safe'";
        $rs_dtl  = DB::Query($sql_dtl);

        $details = [];
        while ($d = $rs_dtl->fetchAssoc()) {
            $details[] = $d;
        }

        // Kalau tidak ada detail, tulis 1 baris dengan data penumpang kosong
        if (empty($details)) {
            $details[] = null;
        }

        foreach ($details as $d) {
            // ---- KOLOM A: No ----
            $sheet->setCellValue('A' . $row, $no);

            // ---- KOLOM B: Nomor Request ----
            setCellText($sheet, 'B' . $row, $req_id);

            // ---- KOLOM C–I: Pemesan ----
            // NIK pemesan di C → index 0 = text
            setRowData($sheet, 'C', $row, [
                $hdr["nik_pemesan"],       // C - NIK (text)
                $hdr["nama_pemesan"],      // D
                $hdr["posisi_pemesan"],    // E
                $hdr["sbu_pemesan"],       // F
                $hdr["email_pemesan"],     // G
                $hdr["no_telp_pemesan"],   // H
                $hdr["atasan_langsung"],   // I
            ], [0, 1, 5]); // index 0 = NIK → paksa string

            // ---- KOLOM J–L: Pengajuan + Alasan ----
            $sheet->setCellValue('J' . $row, $hdr["jenis_pengajuan"]);
            $sheet->setCellValue('K' . $row, $hdr["beban_sbu"]);
            $sheet->setCellValue('L' . $row, $hdr["alasan"]);

            // ---- KOLOM AI: Status ----
            $statusText = isset($statusMap[$hdr["status"]]) 
                ? $statusMap[$hdr["status"]] 
                : $hdr["status"];

            $sheet->setCellValue('AI' . $row, $statusText);

            if ($d !== null) {
                // ---- KOLOM M–T: Data Penumpang ----
                // KTP di N (index 1) → paksa string
                setRowData($sheet, 'M', $row, [
                    $d["nik_penumpang"],      // M
                    $d["nik_ktp"],            // N
                    $d["nama_penumpang"],     // O
                    $d["posisi_penumpang"],   // P
                    $d["sbu_penumpang"],      // Q
                    $d["no_telp_penumpang"],  // R
                    $d["gender"],             // S
                    $d["tipe_perjalanan"],    // T
                ], [0, 1, 5]);

                // ---- KOLOM U–AA: Penerbangan Berangkat ----
                $tgl_berangkat = !empty($d["tanggal_penerbangan"])
                    ? date("d-m-Y", strtotime($d["tanggal_penerbangan"]))
                    : "";

                $sheet->fromArray([
                    $d["bandara_asal"],
                    $d["bandara_tujuan"],
                    $d["maskapai"],
                    $tgl_berangkat,
                    $d["waktu_berangkat"],
                    $d["waktu_tiba"],
                    $d["catatan_khusus"],
                ], NULL, 'U' . $row);

                // ---- KOLOM AB–AH: Penerbangan Pulang ----
                $tgl_pulang = !empty($d["tanggal_penerbangan_p"])
                    ? date("d-m-Y", strtotime($d["tanggal_penerbangan_p"]))
                    : "";

                $sheet->fromArray([
                    $d["bandara_asal_p"],
                    $d["bandara_tujuan_p"],
                    $d["maskapai_p"],
                    $tgl_pulang,
                    $d["waktu_berangkat_p"],
                    $d["waktu_tiba_p"],
                    $d["catatan_khusus_p"],
                ], NULL, 'AB' . $row);
            }
            $no++;
            $row++;
        }
    }
}

// =============================================
// STYLE DATA ROWS
// =============================================
if ($row > 5) {
    styleData($sheet, 'A5:AI' . ($row - 1));

    for ($r = 5; $r < $row; $r++) {
        if ($r % 2 == 0) {
            $sheet->getStyle('A' . $r . ':AI' . $r)->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setRGB('EBF3FB');
        }
    }
}

// =============================================
// FREEZE PANES & AUTO FILTER
// =============================================
$sheet->freezePane('A5');
if ($row > 5) {
    $sheet->setAutoFilter('A4:AI4');
}

// =============================================
// AUTO WIDTH KOLOM
// =============================================
$all_cols = array_merge(
    range('A', 'Z'),
    ['AA','AB','AC','AD','AE','AF','AG','AH','AI']
);
foreach ($all_cols as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// =============================================
// EXPORT FILE
// =============================================
$filename = "report_ticket_" . date("Ymd_His") . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');
header('Pragma: public');

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('php://output');

exit();