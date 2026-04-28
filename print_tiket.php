<?php
require_once("include/dbcommon.php");

$req_id = $_GET['req_id'] ?? '';

if (!$req_id) {
    die("Request ID tidak ditemukan");
}

$sql = "
SELECT 
    h.req_id,
    h.nama_pemesan,
    h.atasan_langsung,
    h.beban_sbu,
    h.alasan,
    h.jenis_pengajuan,
    d.nama_penumpang,
    d.bandara_asal,
    d.bandara_tujuan,
    d.tanggal_penerbangan,
    d.tanggal_penerbangan_p,
    d.no_telp_penumpang
FROM tbl_pengajuan_ticket_hdr h
JOIN tbl_pengajuan_ticket_dtl d 
    ON d.req_id = h.req_id
WHERE h.req_id = '".$req_id."'
LIMIT 8
";

$rs = CustomQuery($sql);

$pengajuan = [];
while ($row = db_fetch_array($rs)) {
    $pengajuan[] = $row;
}
$jenis = $pengajuan[0]['jenis_pengajuan'] ?? '';

// Fetch TTD (HRD, Direktur Utama, Direktur Keuangan) berdasarkan SBU
$ttd = ['HRD' => '-', 'Direktur Utama' => '-', 'Direktur Keuangan' => '-'];
if (!empty($pengajuan)) {
    $beban_sbu = $pengajuan[0]['beban_sbu'];
    $sql_ttd = "
    SELECT DESCRIPTION, Description2 
    FROM tbl_code_list 
    WHERE CatID = 'app_sbu' AND CODE = '" . addslashes($beban_sbu) . "' 
    ORDER BY DESCRIPTION
    ";
    $rs_ttd = CustomQuery($sql_ttd);
    while ($row_ttd = db_fetch_array($rs_ttd)) {
        $ttd[$row_ttd['DESCRIPTION']] = $row_ttd['Description2'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Pengajuan Berhasil</title>
<link rel="icon" type="image/png" href="images/logo_sbu/SUMSEL%20ARMY.png">

<style>
/* ================= UI NORMAL ================= */
.success-container {
  max-width: 900px;
  margin: 40px auto;
  padding: 40px;
}

.success-box {
  background: linear-gradient(135deg, rgba(34,197,94,0.1), rgba(34,197,94,0.05));
  border: 2px solid #86efac;
  border-radius: 20px;
  padding: 40px;
  text-align: center;
}

.success-title {
  font-size: 28px;
  font-weight: bold;
  color: #15803d;
}

.action-btns {
  margin-top: 20px;
  display: flex;
  gap: 10px;
  justify-content: center;
}

.btn {
  padding: 10px 20px;
  border-radius: 10px;
  cursor: pointer;
  text-decoration: none;
  font-weight: bold;
}

.btn-print {
  background: #3b82f6;
  color: #fff;
}

.btn-back {
  border: 1px solid #ccc;
}

/* ================= PRINT AREA ================= */
.print-area {
  display: none;
}

@media print {

  html, body {
    height: auto;
    overflow: hidden;
  }

  @page {
    size: A4 landscape;
    margin: 20mm;
  }

  body * {
    visibility: hidden;
  }

  .print-area, .print-area * {
    visibility: visible;
  }

  .print-area {
    display: flex;
    flex-direction: column;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
  }

  .print-header {
    position: relative;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .logo {
    width: 150px;
    height: 80px;
    /* border: 1px solid #000;*/
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .title {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    width: 100%;
  }

  .print-content {
    flex: 1;
  }

  .print-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12px;
  }

  .print-table th,
  .print-table td {
    border: 1px solid #000;
    padding: 6px;
    text-align: center;
  }

  .print-footer {
    margin-top: auto;
  }

  .ttd,
  .ttd-nama {
    display: flex;
    justify-content: space-between;
    text-align: center;
  }

  .ttd {
    margin-top: 40px;
  }

  .ttd-nama {
    margin-top: 100px;
  }

  .ttd div,
  .ttd-nama div {
    flex: 1;
  }

  .success-container {
    display: none;
  }
}
</style>

</head>
<script>
  window.onload = function() {
    window.print();
  };
</script>
<body>

<!-- UI NORMAL -->
<?php if ($jenis === 'Cuti'): ?>

<div class="success-container">
  <div class="success-box">
    <div style="font-size:48px;margin-bottom:16px">🏖️</div>
    <h1 class="success-title">Pengajuan Cuti Berhasil!</h1>
    <p>No. Pengajuan: <strong><?= htmlspecialchars($req_id) ?></strong></p>
    <p style="color:#6b7280;line-height:1.6;margin-top:12px">
      Pengajuan cuti Anda telah diterima dan akan diproses lebih lanjut oleh tim HR.<br>Harap menunggu konfirmasi.
    </p>
    <div class="action-btns" style="margin-top:24px">
      <button onclick="window.location.href='landing.php'" class="btn btn-back">
        Kembali ke Landing Page
      </button>
    </div>
  </div>
</div>

<?php else: ?>

<!-- Halaman awal sebelum print -->
<div class="success-container" id="beforePrint">
  <div class="success-box">
    <div style="font-size:48px;margin-bottom:16px">🎫</div>
    <h1 class="success-title">Pengajuan Berhasil!</h1>
    <p>No. Pengajuan: <strong><?= htmlspecialchars($req_id) ?></strong></p>
    <div class="action-btns" style="margin-top:24px">
      <button onclick="window.print()" class="btn btn-print">
        🖨️ Print / Download
      </button>
      <button onclick="window.location.href='landing.php'" class="btn btn-back">
        Kembali ke Landing Page
      </button>
    </div>
  </div>
</div>

<!-- Halaman sukses setelah print -->
<div class="success-container" id="afterPrint" style="display:none;">
  <div class="success-box">
    <div style="font-size:48px;margin-bottom:16px">✅</div>
    <h1 class="success-title">Cetak Berhasil!</h1>
    <p>No. Pengajuan: <strong><?= htmlspecialchars($req_id) ?></strong></p>
    <p style="color:#6b7280;margin-top:12px;">Dokumen pemesanan tiket telah berhasil dicetak.</p>
    <div class="action-btns" style="margin-top:24px">
      <button onclick="cetakUlang()" class="btn btn-print">
        🖨️ Cetak Ulang
      </button>
      <button onclick="window.location.href='landing.php'" class="btn btn-back">
        🏠 Kembali ke Landing Page
      </button>
    </div>
  </div>
</div>

<!-- PRINT AREA -->
<div class="print-area">

  <!-- HEADER -->
  <div class="print-header">
    <div class="logo">
      <img src="images/logo_sbu/<?= htmlspecialchars($pengajuan[0]['beban_sbu'] ?? 'default') ?>.png" style="max-height:70px;">
    </div>
    <div class="title">
      FORM PEMESANAN TIKET <br> BARAMULTI GROUP
    </div>
  </div>

  <!-- CONTENT -->
  <div class="print-content">
    <table class="print-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Dari</th>
          <th>Ke</th>
          <th>Tanggal Berangkat</th>
          <th>Tanggal Kembali</th>
          <th>Beban Biaya</th>
          <th>Keperluan</th>
          <th>No. HP</th>
        </tr>
      </thead>
      <tbody>

<?php foreach ($pengajuan as $i => $p): ?>
<tr>
  <td><?= $i + 1 ?></td>
  <td><?= htmlspecialchars($p['nama_penumpang']) ?></td>
  <td><?= htmlspecialchars($p['bandara_asal']) ?></td>
  <td><?= htmlspecialchars($p['bandara_tujuan']) ?></td>
  <td><?= date('d F Y', strtotime($p['tanggal_penerbangan'])) ?></td>
  <td>
    <?= $p['tanggal_penerbangan_p'] 
        ? date('d F Y', strtotime($p['tanggal_penerbangan_p'])) 
        : '-' ?>
  </td>
  <td><?= htmlspecialchars($p['beban_sbu']) ?></td>
  <td><?= htmlspecialchars($p['alasan']) ?></td>
  <td><?= htmlspecialchars($p['no_telp_penumpang']) ?></td>
</tr>
<?php endforeach; ?>

      </tbody>
    </table>
  </div>

  <!-- FOOTER -->
  <div class="print-footer">
    <div style="margin-top:20px;">
      <?= date('d F Y') ?>
    </div>

    <div class="ttd">
      <div>Penanggung Jawab</div>
      <div>Atasan Langsung</div>    
      <div>HRD</div>
      <div>Direktur Utama</div>
      <div>Direktur Keuangan</div>
    </div>

    <div class="ttd-nama">
      <div><?= htmlspecialchars($pengajuan[0]['nama_pemesan'] ?? '-') ?></div>
      <div><?= htmlspecialchars($pengajuan[0]['atasan_langsung'] ?? '-') ?></div>
      <div><?= htmlspecialchars($ttd['HRD'] ?? '-') ?></div>
      <div><?= htmlspecialchars($ttd['Direktur Utama'] ?? '-') ?></div>
      <div><?= htmlspecialchars($ttd['Direktur Keuangan'] ?? '-') ?></div>
    </div>
  </div>

</div>
<?php endif; ?>
</body>
</html>