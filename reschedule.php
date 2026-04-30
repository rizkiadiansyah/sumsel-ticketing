<?php
require_once("include/dbcommon.php");

// Check login - redirect jika belum login
if (!isset($_SESSION['UserID']) || $_SESSION['UserID'] == '') {
    header('Location: login.php');
    exit;
}

$isLoggedIn = false;
$userName = '';
$userData = [];
$oldReqId = '';
$oldData = [];
$penumpangList = [];

if (isset($_SESSION['UserID']) && $_SESSION['UserID'] != '') {
    $isLoggedIn = true;
    $userName = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : '';
    $userData = isset($_SESSION['UserData']) ? $_SESSION['UserData'] : [];
}

// Fetch old request data with detail
if (isset($_GET['req_id']) && !empty($_GET['req_id'])) {
    $oldReqId = $_GET['req_id'];

    $sql_hdr = "SELECT * FROM tbl_pengajuan_ticket_hdr WHERE req_id = '" . addslashes($oldReqId) . "'";
    $rs_hdr = CustomQuery($sql_hdr);
    if ($row_hdr = db_fetch_array($rs_hdr)) {
        $oldData = $row_hdr;
    }

    $sql_dtl = "SELECT * FROM tbl_pengajuan_ticket_dtl WHERE req_id = '" . addslashes($oldReqId) . "'";
    $rs_dtl = CustomQuery($sql_dtl);
    while ($row_dtl = db_fetch_array($rs_dtl)) {
        $penumpangList[] = $row_dtl;
    }
}

function val($data, $key) {
    return htmlspecialchars($data[$key] ?? '');
}

// Fetch SBU list
$sbuList = [];
$sqlSbu = "SELECT DISTINCT CODE FROM tbl_code_list WHERE CatID = 'app_sbu' ORDER BY CODE";
$rsSbu = CustomQuery($sqlSbu);
while ($rowSbu = db_fetch_array($rsSbu)) {
    $sbuList[] = $rowSbu['CODE'];
}

$sbuPList = [];
$sqlSbuP = "SELECT CODE, Description FROM tbl_code_list WHERE CatID = 'SBU' ORDER BY OrderNo";
$rsSbuP = CustomQuery($sqlSbuP);
while ($rowSbuP = db_fetch_array($rsSbuP)) {
    $sbuPList[] = [
        'code' => $rowSbuP['CODE'],
        'desc' => $rowSbuP['Description']
    ];
}

// Fetch Airport list
$airportList = [];
$sqlAirport = "SELECT Code, Description2 FROM tbl_code_list WHERE CatID = 'AIRPORT' AND Active = 1 ORDER BY OrderNo";
$rsAirport = CustomQuery($sqlAirport);
while ($rowAirport = db_fetch_array($rsAirport)) {
    $airportList[] = [
        'code' => $rowAirport['Code'],
        'name' => $rowAirport['Description2']
    ];
}

// Fetch Airline list
$airlineList = [];
$sqlAirline = "SELECT Code, Description FROM tbl_code_list WHERE CatID = 'AIRLINE' AND Active = 1 ORDER BY OrderNo";
$rsAirline = CustomQuery($sqlAirline);
while ($rowAirline = db_fetch_array($rsAirline)) {
    $airlineList[] = [
        'code' => $rowAirline['Code'],
        'name' => $rowAirline['Description']
    ];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengajuan Reschedule — Sumsel Ticketing</title>
  <link rel="icon" type="image/png" href="images/logo_sbu/SUMSEL%20ARMY.png">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --indigo:    #4338ca; --indigo-lt: #eef2ff; --indigo-md: #818cf8; --indigo-dk: #312e81;
      --green:     #059669; --green-lt:  #ecfdf5; --green-md:  #6ee7b7;
      --amber:     #d97706; --amber-lt:  #fffbeb;
      --red:       #dc2626; --red-lt:    #fef2f2;
      --gray-50:   #f9fafb; --gray-200:  #e5e7eb; --gray-400: #9ca3af;
      --gray-600:  #4b5563; --gray-800:  #1f2937;
      --radius: 12px; --radius-sm: 8px;
      --shadow: 0 4px 24px rgba(99,102,241,.10), 0 1px 4px rgba(0,0,0,.04);
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #eef2ff;
      background-image:
        radial-gradient(ellipse 70% 50% at 10% 10%, rgba(165,180,252,.4) 0%, transparent 55%),
        radial-gradient(ellipse 60% 50% at 90% 90%, rgba(167,243,208,.3) 0%, transparent 55%);
      min-height: 100vh; padding: 40px 20px 80px; color: var(--gray-800);
    }
    .page-body { max-width: 860px; margin: 0 auto; }
    .topbar { position: fixed; top: 0; right: 0; padding: 14px 24px; display: flex; align-items: center; gap: 10px; z-index: 100; }
    .user-info { font-size: 13px; font-weight: 500; color: #6366f1; }
    .btn-auth { display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 50px; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 12px; font-weight: 600; text-decoration: none; cursor: pointer; border: none; transition: all 0.2s ease; }
    .btn-login { background: #6366f1; color: #fff; box-shadow: 0 4px 16px rgba(99,102,241,0.3); }
    .btn-login:hover { background: #4f46e5; color: #fff; text-decoration: none; }
    .btn-logout { background: rgba(255,255,255,0.8); color: #ef4444; border: 1.5px solid rgba(239,68,68,0.2); backdrop-filter: blur(8px); }
    .btn-logout:hover { background: #fef2f2; border-color: #ef4444; color: #dc2626; text-decoration: none; }

    .page-header { text-align: center; margin-bottom: 36px; margin-top: 20px; max-width: 860px; margin-left: auto; margin-right: auto; }
    .page-header .brand { font-size: 12px; font-weight: 600; letter-spacing: .3em; color: var(--indigo-md); text-transform: uppercase; margin-bottom: 10px; }
    .page-header h1 { font-size: 32px; font-weight: 700; color: var(--indigo-dk); letter-spacing: -.02em; margin-bottom: 6px; }
    .page-header p { font-size: 15px; color: var(--gray-400); }

    .card { background: rgba(255,255,255,.80); backdrop-filter: blur(16px); border: 1.5px solid rgba(255,255,255,.9); border-radius: 24px; box-shadow: var(--shadow); padding: 32px; margin-bottom: 20px; }
    .card-title { font-size: 16px; font-weight: 700; color: var(--indigo-dk); display: flex; align-items: center; gap: 10px; margin-bottom: 24px; padding-bottom: 14px; border-bottom: 1.5px solid var(--gray-200); }
    .card-title .icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .icon-indigo { background: var(--indigo-lt); } .icon-green { background: var(--green-lt); } .icon-amber { background: var(--amber-lt); }

    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; }
    .col-span-2 { grid-column: span 2; } .col-span-3 { grid-column: span 3; }

    .field { display: flex; flex-direction: column; gap: 6px; }
    .field label { font-size: 13px; font-weight: 600; color: var(--gray-600); display: flex; align-items: center; gap: 4px; }
    .field label .req { color: var(--red); font-size: 14px; }
    .field input, .field select, .field textarea { padding: 10px 14px; border: 1.5px solid var(--gray-200); border-radius: var(--radius-sm); font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; color: var(--gray-800); background: #fff; transition: border-color .2s, box-shadow .2s; outline: none; width: 100%; }
    .field input:focus, .field select:focus, .field textarea:focus { border-color: var(--indigo-md); box-shadow: 0 0 0 3px rgba(129,140,248,.15); }
    .field input[readonly] { background: var(--gray-50); color: var(--gray-600); cursor: default; }
    .field textarea { resize: vertical; min-height: 80px; }

    .radio-group { display: flex; gap: 12px; flex-wrap: wrap; }
    .radio-opt { display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1.5px solid var(--gray-200); border-radius: 20px; cursor: pointer; font-size: 13px; font-weight: 500; color: var(--gray-600); transition: all .2s; user-select: none; }
    .radio-opt input { display: none; }
    .radio-opt:has(input:checked) { border-color: var(--indigo); background: var(--indigo-lt); color: var(--indigo); }

    .penumpang-list { display: flex; flex-direction: column; gap: 20px; }
    .penumpang-card { background: var(--gray-50); border: 1.5px solid var(--gray-200); border-radius: var(--radius); padding: 24px; }
    .penumpang-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; }
    .penumpang-num { font-size: 13px; font-weight: 700; color: var(--indigo); background: var(--indigo-lt); padding: 4px 12px; border-radius: 20px; }
    .btn-remove { background: var(--red-lt); border: 1.5px solid #fecaca; color: var(--red); border-radius: 8px; padding: 6px 12px; font-size: 12px; font-weight: 600; cursor: pointer; transition: all .2s; display: flex; align-items: center; gap: 4px; }
    .btn-remove:hover { background: #fee2e2; }

    .pulang-section { margin-top: 16px; padding: 16px; background: #fff; border: 1.5px solid #e0e7ff; border-radius: 10px; display: none; margin-bottom: 0; }
    .pulang-section.show { display: block; }
    .pulang-label { font-size: 12px; font-weight: 700; color: var(--green); text-transform: uppercase; letter-spacing: .08em; margin-bottom: 16px; }

    .btn-add-penumpang { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 12px; background: transparent; border: 2px dashed var(--indigo-md); border-radius: var(--radius); color: var(--indigo); font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; font-weight: 600; cursor: pointer; transition: all .2s; margin-top: 4px; }
    .btn-add-penumpang:hover { background: var(--indigo-lt); border-color: var(--indigo); }

    .btn-submit { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 16px; background: var(--amber); border: none; border-radius: var(--radius); color: #fff; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 700; cursor: pointer; transition: all .25s cubic-bezier(.34,1.56,.64,1); box-shadow: 0 4px 20px rgba(217,119,6,.3); }
    .btn-submit:hover { background: #b45309; transform: translateY(-2px); }
    .btn-submit:disabled { background: var(--gray-400); cursor: not-allowed; transform: none; box-shadow: none; }

    .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,.45); z-index: 100; align-items: center; justify-content: center; padding: 20px; }
    .modal-overlay.show { display: flex; }
    .modal { background: #fff; border-radius: 24px; padding: 40px 36px; max-width: 420px; width: 100%; text-align: center; animation: pop .35s cubic-bezier(.34,1.56,.64,1); }
    @keyframes pop { from { transform: scale(.85); opacity: 0; } to { transform: scale(1); opacity: 1; } }
    .modal-icon { width: 64px; height: 64px; border-radius: 20px; background: var(--amber-lt); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; }
    .modal h2 { font-size: 22px; font-weight: 700; color: var(--indigo-dk); margin-bottom: 8px; }
    .modal p { font-size: 14px; color: var(--gray-400); margin-bottom: 20px; }
    .req-id-box { background: var(--indigo-lt); border: 1.5px solid #c7d2fe; border-radius: var(--radius); padding: 14px 20px; font-size: 22px; font-weight: 700; color: var(--indigo); letter-spacing: .04em; margin-bottom: 24px; }
    .modal-note { font-size: 12px; color: var(--gray-400); margin-bottom: 24px; }
    .btn-modal-ok { width: 100%; padding: 13px; background: var(--indigo); border: none; border-radius: var(--radius); color: #fff; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px; font-weight: 700; cursor: pointer; }
    .btn-modal-ok:hover { background: var(--indigo-dk); }

    .toast { display: none; position: fixed; bottom: 24px; left: 50%; transform: translateX(-50%); background: #1f2937; color: #fff; border-radius: 12px; padding: 12px 20px; font-size: 14px; font-weight: 500; z-index: 200; white-space: nowrap; max-width: 90vw; }
    .toast.show { display: block; }

    .back-link { display: flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 600; color: var(--indigo); text-decoration: none; margin-bottom: 24px; max-width: 860px; margin-left: auto; margin-right: auto; }
    .back-link:hover { color: var(--indigo-dk); }

    /* NIK SEARCH DROPDOWN */
    .nik-search-wrap { position: relative; margin-bottom: 16px; }
    .nik-search-icon { position: absolute; right: 14px; top: 36px; pointer-events: none; transition: opacity .2s; }
    .nik-dropdown { display: none; position: absolute; top: calc(100% + 4px); left: 0; right: 0; background: #fff; border: 1.5px solid #c7d2fe; border-radius: 12px; box-shadow: 0 8px 32px rgba(99,102,241,.15), 0 2px 8px rgba(0,0,0,.06); z-index: 50; max-height: 260px; overflow-y: auto; scrollbar-width: thin; scrollbar-color: #c7d2fe transparent; }
    .nik-dropdown.show { display: block; }
    .nik-dd-item { display: grid; grid-template-columns: auto 1fr; grid-template-rows: auto auto; column-gap: 10px; align-items: center; padding: 10px 14px; cursor: pointer; border-bottom: 1px solid #f3f4f6; transition: background .15s; }
    .nik-dd-item:last-child { border-bottom: none; }
    .nik-dd-item:hover, .nik-dd-item.active { background: #eef2ff; }
    .nik-dd-nik { grid-row: 1/3; grid-column: 1; font-size: 11px; font-weight: 700; color: var(--indigo); background: var(--indigo-lt); padding: 3px 9px; border-radius: 20px; letter-spacing: .04em; white-space: nowrap; align-self: center; }
    .nik-dd-nama { grid-row: 1; grid-column: 2; font-size: 13px; font-weight: 600; color: var(--gray-800); }
    .nik-dd-meta { grid-row: 2; grid-column: 2; font-size: 11px; color: var(--gray-400); }
    .nik-dd-empty { padding: 14px 16px; font-size: 13px; color: var(--gray-400); text-align: center; }
    .nik-dd-loading { padding: 14px 16px; font-size: 13px; color: var(--indigo-md); text-align: center; display: flex; align-items: center; justify-content: center; gap: 8px; }
    .nik-dd-loading::before { content: ''; width: 14px; height: 14px; border: 2px solid #c7d2fe; border-top-color: var(--indigo); border-radius: 50%; animation: nik-spin .7s linear infinite; flex-shrink: 0; }
    @keyframes nik-spin { to { transform: rotate(360deg); } }

    /* Banner reschedule notice */
    .reschedule-notice { background: var(--amber-lt); border: 1.5px solid #fde68a; border-radius: var(--radius); padding: 14px 18px; margin-bottom: 20px; font-size: 13px; color: #92400e; display: flex; align-items: flex-start; gap: 10px; }
    .reschedule-notice strong { font-weight: 700; display: block; margin-bottom: 4px; }

    @media (max-width: 640px) {
      .grid-2, .grid-3 { grid-template-columns: 1fr; }
      .col-span-2, .col-span-3 { grid-column: span 1; }
      .card { padding: 20px; border-radius: 18px; }
      .page-body { margin: 0; }
    }
  </style>
</head>
<body>

  <!-- TOPBAR -->
  <div class="topbar">
    <?php if ($isLoggedIn): ?>
      <span class="user-info">👤 <?= htmlspecialchars($userData['nama'] ?? $userName) ?></span>
      <a href="logout.php" class="btn-auth btn-logout">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
        Logout
      </a>
    <?php else: ?>
      <a href="login.php" class="btn-auth btn-login">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
        Login
      </a>
    <?php endif; ?>
  </div>

  <div class="page-body">

    <a href="cek-status.php" class="back-link">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="15 18 9 12 15 6"/></svg>
      Kembali ke Cek Status
    </a>

    <div class="page-header">
      <p class="brand">Sumsel Ticketing</p>
      <h1>Pengajuan Reschedule</h1>
      <p>Perbarui data perjalanan untuk pengajuan tiket sebelumnya</p>
    </div>

    <?php if (empty($oldData)): ?>
      <div class="card" style="text-align:center;padding:48px">
        <div style="font-size:40px;margin-bottom:16px">⚠️</div>
        <h2 style="color:var(--red);font-size:20px;margin-bottom:8px">Pengajuan Tidak Ditemukan</h2>
        <p style="color:var(--gray-400);margin-bottom:24px">Nomor tiket yang Anda cari tidak ditemukan. Silakan kembali dan coba lagi.</p>
        <a href="cek-status.php" style="display:inline-block;padding:12px 24px;background:var(--indigo);color:#fff;border-radius:var(--radius);text-decoration:none;font-weight:600">Kembali ke Cek Status</a>
      </div>
    <?php else: ?>

    <!-- DISCLAIMER RESCHEDULE -->
    <div class="reschedule-notice">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:1px"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <div>
        <strong>Reschedule Tiket #<?= val($oldData, 'req_id') ?></strong>
        Data pemesan, pengajuan, dan penumpang telah diisi otomatis dari pengajuan sebelumnya. Ubah data yang diperlukan lalu kirim ulang.
      </div>
    </div>

    <form id="formReschedule" novalidate>
      <input type="hidden" name="old_req_id" value="<?= val($oldData, 'req_id') ?>">

      <!-- DATA PEMESAN -->
      <div class="card">
        <div class="card-title">
          <div class="icon icon-indigo">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          Data Pemesan
          <span style="margin-left:auto;font-size:12px;font-weight:500;color:var(--amber);background:var(--amber-lt);padding:4px 10px;border-radius:20px;">
            ✎ Dapat diubah
          </span>
        </div>

        <div class="grid-2" style="margin-bottom:16px">
          <div class="field">
            <label>NIK Pemesan <span class="req">*</span></label>
            <input type="text" id="nik_pemesan" name="nik_pemesan"
              placeholder="Masukkan NIK" maxlength="20" required
              value="<?= val($oldData, 'nik_pemesan') ?>">
          </div>
          <div class="field">
            <label>Nama Pemesan <span class="req">*</span></label>
            <input type="text" id="nama_pemesan" name="nama_pemesan"
              placeholder="Nama lengkap" required
              value="<?= val($oldData, 'nama_pemesan') ?>">
          </div>
          <div class="field">
            <label>Posisi / Jabatan <span class="req">*</span></label>
            <input type="text" id="posisi_pemesan" name="posisi_pemesan"
              placeholder="Posisi / jabatan" required
              value="<?= val($oldData, 'posisi_pemesan') ?>">
          </div>
          <div class="field">
            <label>SBU <span class="req">*</span></label>
            <input type="text" id="sbu_pemesan" name="sbu_pemesan"
              placeholder="SBU" required
              value="<?= val($oldData, 'sbu_pemesan') ?>">
          </div>
          <div class="field">
            <label>No. Telepon <span class="req">*</span></label>
            <input type="text" id="no_telp_pemesan" name="no_telp_pemesan"
              placeholder="08xxxxxxxxxx" required
              value="<?= val($oldData, 'no_telp_pemesan') ?>">
          </div>
          <div class="field">
            <label>Email <span class="req">*</span></label>
            <input type="email" id="email_pemesan" name="email_pemesan"
              placeholder="email@baramultigroup.co.id" required
              value="<?= val($oldData, 'email_pemesan') ?>">
          </div>
        </div>

        <!-- DATA PENGAJUAN -->
        <div class="card-title" style="margin-bottom: 16px; margin-top: 24px;">
          <div class="icon icon-amber">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 12l2 2 4-4"/>
              <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>
            </svg>
          </div>
          Data Pengajuan
        </div>

        <div class="grid-2">
          <div class="field">
            <label>Jenis Pengajuan <span class="req">*</span></label>
            <div class="radio-group">
              <label class="radio-opt">
                <input type="radio" name="jenis_pengajuan" value="Dinas"
                  <?= ($oldData['jenis_pengajuan'] ?? '') === 'Dinas' || empty($oldData['jenis_pengajuan']) ? 'checked' : '' ?>
                  required> Dinas
              </label>
              <label class="radio-opt">
                <input type="radio" name="jenis_pengajuan" value="Cuti"
                  <?= ($oldData['jenis_pengajuan'] ?? '') === 'Cuti' ? 'checked' : '' ?>
                  required> Cuti
              </label>
            </div>
          </div>

          <div class="field">
            <label>Beban SBU <span class="req">*</span></label>
            <select id="beban_sbu" name="beban_sbu" required>
              <option value="">Pilih SBU</option>
              <?php foreach ($sbuList as $sbu): ?>
                <option value="<?= htmlspecialchars($sbu) ?>"
                  <?= ($oldData['beban_sbu'] ?? '') === $sbu ? 'selected' : '' ?>>
                  <?= htmlspecialchars($sbu) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="field col-span-2">
            <label>Alasan / Keperluan Reschedule <span class="req">*</span></label>
            <textarea id="alasan" name="alasan" required
              placeholder="Jelaskan alasan reschedule"><?= val($oldData, 'alasan') ?></textarea>
          </div>

          <div class="field col-span-2">
            <label>Atasan Langsung <span class="req">*</span></label>
            <input type="text" id="atasan_langsung" name="atasan_langsung" required
              placeholder="Nama atasan langsung"
              value="<?= val($oldData, 'atasan_langsung') ?>">
          </div>
        </div>
      </div>

      <!-- DATA PENUMPANG -->
      <div class="card">
        <div class="card-title">
          <div class="icon icon-green">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          Data Penumpang
        </div>
        <div class="penumpang-list" id="penumpangList"></div>
        <button type="button" class="btn-add-penumpang" onclick="addPenumpang()" style="margin-top:16px">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Tambah Penumpang
        </button>
      </div>

      <div>
        <button type="submit" class="btn-submit" id="btnSubmit">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Ajukan Reschedule
        </button>
      </div>
    </form>

    <?php endif; ?>

  </div><!-- /.page-body -->

  <!-- MODAL SUCCESS -->
  <div class="modal-overlay" id="modalSuccess">
    <div class="modal">
      <div class="modal-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h2>Reschedule Berhasil!</h2>
      <p>Pengajuan reschedule Anda telah dikirim untuk diproses</p>
      <div class="req-id-box" id="modalReqId">—</div>
      <p class="modal-note">Nomor pengajuan reschedule baru Anda</p>
      <button class="btn-modal-ok" onclick="closeModal()">Selesai</button>
    </div>
  </div>

  <div class="toast" id="toast"></div>

  <!-- Data lists untuk autocomplete -->
  <datalist id="airportList">
    <?php foreach ($airportList as $airport): ?>
      <option value="<?= htmlspecialchars($airport['name']) ?>"></option>
    <?php endforeach; ?>
  </datalist>

  <?php if (!empty($oldData)): ?>
  <script>
    const oldReqId = <?= json_encode($oldData['req_id'] ?? '') ?>;
    let hasChanges = false;
    const MAX_PENUMPANG = 8;
    let penumpangData = [];

    function markFormChanged() { hasChanges = true; }

    window.addEventListener('beforeunload', function(e) {
      if (hasChanges) { e.preventDefault(); e.returnValue = ''; return ''; }
    });

    const airlineData = [
      <?php foreach ($airlineList as $airline): ?>
      { code: '<?= $airline['code'] ?>', name: '<?= addslashes($airline['name']) ?>' },
      <?php endforeach; ?>
    ];

    function buildMaskapaiOptions(isVip, placeholder, selectedVal) {
      selectedVal = selectedVal || '';
      let html = `<option value="">${placeholder}</option>`;
      airlineData.forEach(function(airline) {
        const isGaruda = airline.code === 'GA';
        const disabled = isGaruda && !isVip ? 'disabled' : '';
        const label    = isGaruda && !isVip ? airline.name + ' (Tidak tersedia)' : airline.name;
        const sel      = airline.name === selectedVal ? 'selected' : '';
        html += `<option value="${airline.name}" ${disabled} ${sel}>${label}</option>`;
      });
      return html;
    }

    async function getVipStatus(nik) {
      if (!nik) return false;
      try {
        const res  = await fetch(`api-handler.php?action=cek_vip&nik=${encodeURIComponent(nik)}`);
        const data = await res.json();
        return data.is_vip === true || data.is_vip === 1;
      } catch { return false; }
    }

    function genderLabel(g) {
      return g === 'L' ? 'Laki-laki' : g === 'P' ? 'Perempuan' : '';
    }

    function esc(v) {
      return String(v ?? '').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    }

    function escHtml(str) {
      return String(str ?? '').replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
    }

    // ── Snapshot semua card ke penumpangData ─────────────────────
    function snapshotCard(card, pos) {
      // Kalau card sudah tidak di DOM, kembalikan data lama tanpa overwrite
      if (!card.isConnected) return penumpangData[pos - 1] || {};

      const g  = (name) => card.querySelector(`[name="${name}"]`)?.value ?? '';
      const gc = (name) => card.querySelector(`[name="${name}"]:checked`)?.value ?? '';
      const existing = penumpangData[pos - 1] || {};

      return {
        nik_penumpang:         g(`nik_penumpang_${pos}`),
        nik_ktp:               g(`nik_ktp_${pos}`),
        nama_penumpang:        g(`nama_penumpang_${pos}`),
        posisi_penumpang:      g(`posisi_penumpang_${pos}`),
        sbu_penumpang:         g(`sbu_penumpang_${pos}`),
        no_telp_penumpang:     g(`no_telp_penumpang_${pos}`),
        gender:                g(`gender_${pos}`),
        tipe_perjalanan:       gc(`tipe_perjalanan_${pos}`) || 'One Way',
        _roundTrip:            (gc(`tipe_perjalanan_${pos}`) || 'One Way') === 'Round Trip',
        _isVip:                existing._isVip || false,
        bandara_asal:          g(`bandara_asal_${pos}`),
        bandara_tujuan:        g(`bandara_tujuan_${pos}`),
        maskapai:              g(`maskapai_${pos}`) || existing.maskapai,
        tanggal_penerbangan:   g(`tanggal_penerbangan_${pos}`),
        waktu_berangkat:       g(`waktu_berangkat_${pos}`),
        waktu_tiba:            g(`waktu_tiba_${pos}`),
        catatan_khusus:        g(`catatan_khusus_${pos}`),
        bandara_asal_p:        g(`bandara_asal_p_${pos}`),
        bandara_tujuan_p:      g(`bandara_tujuan_p_${pos}`),
        maskapai_p:            g(`maskapai_p_${pos}`) || existing.maskapai_p,
        tanggal_penerbangan_p: g(`tanggal_penerbangan_p_${pos}`),
        waktu_berangkat_p:     g(`waktu_berangkat_p_${pos}`),
        waktu_tiba_p:          g(`waktu_tiba_p_${pos}`),
        catatan_khusus_p:      g(`catatan_khusus_p_${pos}`),
      };
    }
    function saveAllSnapshots() {
      const allCards = document.querySelectorAll('.penumpang-card');
      allCards.forEach((card, i) => {
        const cardPos = parseInt(card.id.replace('penumpang_', ''));
        const snap = snapshotCard(card, cardPos);
        if (penumpangData[i]) {
          penumpangData[i] = { ...penumpangData[i], ...snap };
        }
      });
    }
    // ── Render ulang seluruh list dari array ──────────────────────
    function renderAll() {
      const list = document.getElementById('penumpangList');
      list.innerHTML = '';

      penumpangData.forEach((d, i) => {
        const pos        = i + 1;
        const roundTrip  = d._roundTrip || false;
        const isVip      = d._isVip     || false;

        const card = document.createElement('div');
        card.className = 'penumpang-card';
        card.id = `penumpang_${pos}`;

        card.innerHTML = `
          <div class="penumpang-header">
            <span class="penumpang-num">Penumpang ${pos}</span>
            <div style="display:flex;align-items:center;gap:6px">
              <label style="display:flex;align-items:center;gap:6px;cursor:pointer;font-size:13px;font-weight:500;margin:0">
                <input type="checkbox" name="sama_dengan_pemesan_${pos}"
                  onchange="toggleSamaDenganPemesan(${pos}, this.checked)"
                  style="width:16px;height:16px;cursor:pointer">
                Sama dengan data pemesan
              </label>
              ${penumpangData.length > 1
                ? `<button type="button" class="btn-remove" onclick="removePenumpang(${pos})">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Hapus
                  </button>`
                : ''}
            </div>
          </div>

          <!-- NIK SEARCH -->
          <div class="nik-search-wrap">
            <div class="field">
              <label>NIK Karyawan <span class="req">*</span></label>
              <input type="text" name="nik_penumpang_${pos}"
                placeholder="Ketik NIK untuk mencari data penumpang…"
                maxlength="50" required autocomplete="off"
                style="padding-right:38px"
                value="${esc(d.nik_penumpang)}">
              <svg class="nik-search-icon" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
              </svg>
            </div>
            <div class="nik-dropdown" id="nikDrop_${pos}"></div>
          </div>

          <!-- DATA PENUMPANG -->
          <div class="grid-3" style="margin-bottom:14px">
            <div class="field">
              <label>NIK KTP <span class="req">*</span></label>
              <input type="text" name="nik_ktp_${pos}" placeholder="16 digit NIK KTP" maxlength="16" required value="${esc(d.nik_ktp)}">
            </div>
            <div class="field col-span-2">
              <label>Nama Penumpang <span class="req">*</span></label>
              <input type="text" name="nama_penumpang_${pos}" placeholder="Sesuai KTP / Paspor" required value="${esc(d.nama_penumpang)}">
            </div>
            <div class="field">
              <label>Posisi / Jabatan <span class="req">*</span></label>
              <input type="text" name="posisi_penumpang_${pos}" placeholder="Jabatan penumpang" required value="${esc(d.posisi_penumpang)}">
            </div>
            <div class="field">
              <label>SBU <span class="req">*</span></label>
              <select name="sbu_penumpang_${pos}" required>
                <option value="">Pilih SBU</option>
                <?php foreach ($sbuPList as $sbu): ?>
                <option value="<?= htmlspecialchars($sbu['code']) ?>"
                  ${d.sbu_penumpang === '<?= $sbu['code'] ?>' ? 'selected' : ''}>
                  <?= htmlspecialchars($sbu['code'] . ' - ' . $sbu['desc']) ?>
                </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="field">
              <label>No. Telepon <span class="req">*</span></label>
              <input type="text" name="no_telp_penumpang_${pos}" placeholder="08xxxxxxxxxx" required value="${esc(d.no_telp_penumpang)}">
            </div>
            <div class="field">
              <label>Jenis Kelamin <span class="req">*</span></label>
              <select name="gender_${pos}" required>
                <option value="">Pilih Gender</option>
                <option value="Laki-laki" ${(d.gender === 'Laki-laki' || d.gender === 'L') ? 'selected' : ''}>Laki-laki</option>
                <option value="Perempuan" ${(d.gender === 'Perempuan' || d.gender === 'P') ? 'selected' : ''}>Perempuan</option>
              </select>
            </div>
            <div class="field col-span-2">
              <label>Tipe Perjalanan <span class="req">*</span></label>
              <div class="radio-group">
                <label class="radio-opt">
                  <input type="radio" name="tipe_perjalanan_${pos}" value="One Way"
                    ${!roundTrip ? 'checked' : ''}
                    onchange="onTipeChange(${pos}, this.value)" required> One Way
                </label>
                <label class="radio-opt">
                  <input type="radio" name="tipe_perjalanan_${pos}" value="Round Trip"
                    ${roundTrip ? 'checked' : ''}
                    onchange="onTipeChange(${pos}, this.value)" required> Round Trip
                </label>
              </div>
            </div>
          </div>

          <!-- PENERBANGAN PERGI -->
          <div style="background:#fff;border:1.5px solid #e0e7ff;border-radius:10px;padding:16px;margin-bottom:4px">
            <div style="font-size:12px;font-weight:700;color:var(--indigo);text-transform:uppercase;letter-spacing:.08em;margin-bottom:14px">Penerbangan Pergi</div>
            <div class="grid-3">
              <div class="field"><label>Bandara Asal <span class="req">*</span></label>
                <input type="text" name="bandara_asal_${pos}" placeholder="CGK — Jakarta" list="airportList" autocomplete="off" required value="${esc(d.bandara_asal)}">
              </div>
              <div class="field"><label>Bandara Tujuan <span class="req">*</span></label>
                <input type="text" name="bandara_tujuan_${pos}" placeholder="PLM — Palembang" list="airportList" autocomplete="off" required value="${esc(d.bandara_tujuan)}">
              </div>
              <div class="field"><label>Maskapai <span class="req">*</span></label>
                <select name="maskapai_${pos}" required>${buildMaskapaiOptions(isVip, 'Pilih Maskapai', d.maskapai)}</select>
              </div>
              <div class="field"><label>Tanggal Penerbangan <span class="req">*</span></label>
                <input type="date" name="tanggal_penerbangan_${pos}" required value="${esc(d.tanggal_penerbangan)}">
              </div>
              <div class="field"><label>Waktu Berangkat <span class="req">*</span></label>
                <input type="time" name="waktu_berangkat_${pos}" required value="${esc(d.waktu_berangkat)}">
              </div>
              <div class="field"><label>Waktu Tiba</label>
                <input type="time" name="waktu_tiba_${pos}" value="${esc(d.waktu_tiba)}">
              </div>
              <div class="field col-span-3"><label>Catatan Khusus</label>
                <input type="text" name="catatan_khusus_${pos}" placeholder="Contoh: butuh kursi aisle, extra baggage, dll" value="${esc(d.catatan_khusus)}">
              </div>
            </div>
          </div>

          <!-- PENERBANGAN PULANG -->
          <div class="pulang-section ${roundTrip ? 'show' : ''}" id="pulang_${pos}">
            <div class="pulang-label">Penerbangan Pulang (Round Trip)</div>
            <div class="grid-3">
              <div class="field"><label>Bandara Asal <span class="req">*</span></label>
                <input type="text" name="bandara_asal_p_${pos}" placeholder="PLM — Palembang" list="airportList" autocomplete="off"
                  ${roundTrip ? 'required' : ''} value="${esc(d.bandara_asal_p)}">
              </div>
              <div class="field"><label>Bandara Tujuan <span class="req">*</span></label>
                <input type="text" name="bandara_tujuan_p_${pos}" placeholder="CGK — Jakarta" list="airportList" autocomplete="off"
                  ${roundTrip ? 'required' : ''} value="${esc(d.bandara_tujuan_p)}">
              </div>
              <div class="field"><label>Maskapai <span class="req">*</span></label>
                <select name="maskapai_p_${pos}" ${roundTrip ? 'required' : ''}>${buildMaskapaiOptions(isVip, '— Pilih Maskapai —', d.maskapai_p)}</select>
              </div>
              <div class="field"><label>Tanggal Penerbangan <span class="req">*</span></label>
                <input type="date" name="tanggal_penerbangan_p_${pos}" ${roundTrip ? 'required' : ''} value="${esc(d.tanggal_penerbangan_p)}">
              </div>
              <div class="field"><label>Waktu Berangkat <span class="req">*</span></label>
                <input type="time" name="waktu_berangkat_p_${pos}" ${roundTrip ? 'required' : ''} value="${esc(d.waktu_berangkat_p)}">
              </div>
              <div class="field"><label>Waktu Tiba</label>
                <input type="time" name="waktu_tiba_p_${pos}" value="${esc(d.waktu_tiba_p)}">
              </div>
              <div class="field col-span-3"><label>Catatan Khusus</label>
                <input type="text" name="catatan_khusus_p_${pos}" placeholder="Catatan penerbangan pulang" value="${esc(d.catatan_khusus_p)}">
              </div>
            </div>
          </div>
        `;

        list.appendChild(card);
        initNikSearch(pos);
      });

      updateAddButton();
    }

    function updateAddButton() {
      const btn = document.querySelector('.btn-add-penumpang');
      if (!btn) return;
      btn.style.display = penumpangData.length >= MAX_PENUMPANG ? 'none' : 'flex';
    }

    function addPenumpang(prefill) {
      if (!prefill && penumpangData.length >= MAX_PENUMPANG) {
        showToast(`Maksimal ${MAX_PENUMPANG} penumpang dalam satu pengajuan.`);
        return;
      }
      saveAllSnapshots();
      const d = prefill || {};
      penumpangData.push({
        nik_penumpang:         d.nik_penumpang         || '',
        nik_ktp:               d.nik_ktp               || '',
        nama_penumpang:        d.nama_penumpang         || '',
        posisi_penumpang:      d.posisi_penumpang       || '',
        sbu_penumpang:         d.sbu_penumpang          || '',
        no_telp_penumpang:     d.no_telp_penumpang      || '',
        gender:                d.gender                 || '',
        tipe_perjalanan:       d.tipe_perjalanan        || 'One Way',
        _roundTrip:            (d.tipe_perjalanan       || '') === 'Round Trip',
        _isVip:                parseInt(d.vip)          === 1,
        maskapai:              d.maskapai               || '',
        bandara_asal:          d.bandara_asal           || '',
        bandara_tujuan:        d.bandara_tujuan         || '',
        tanggal_penerbangan:   d.tanggal_penerbangan    || '',
        waktu_berangkat:       d.waktu_berangkat        || '',
        waktu_tiba:            d.waktu_tiba             || '',
        catatan_khusus:        d.catatan_khusus         || '',
        maskapai_p:            d.maskapai_p             || '',
        bandara_asal_p:        d.bandara_asal_p         || '',
        bandara_tujuan_p:      d.bandara_tujuan_p       || '',
        tanggal_penerbangan_p: d.tanggal_penerbangan_p  || '',
        waktu_berangkat_p:     d.waktu_berangkat_p      || '',
        waktu_tiba_p:          d.waktu_tiba_p           || '',
        catatan_khusus_p:      d.catatan_khusus_p       || '',
      });
      renderAll();

      // Fetch VIP jika belum diketahui (penumpang baru dari prefill tanpa field vip)
      if (prefill && d.nik_penumpang && d.vip === undefined) {
        const pos = penumpangData.length;
        getVipStatus(d.nik_penumpang).then(isVip => {
          if (penumpangData[pos - 1]) penumpangData[pos - 1]._isVip = isVip;
          const card = document.getElementById(`penumpang_${pos}`);
          if (card) {
            card.querySelector(`[name="maskapai_${pos}"]`).innerHTML   = buildMaskapaiOptions(isVip, 'Pilih Maskapai',      d.maskapai   || '');
            card.querySelector(`[name="maskapai_p_${pos}"]`).innerHTML = buildMaskapaiOptions(isVip, '— Pilih Maskapai —', d.maskapai_p || '');
          }
        });
      }

      markFormChanged();
    }

    function removePenumpang(pos) {
      saveAllSnapshots();
      penumpangData.splice(pos - 1, 1);
      renderAll();
      markFormChanged();
    }

    function onTipeChange(pos, val) {
      if (penumpangData[pos - 1]) penumpangData[pos - 1]._roundTrip = (val === 'Round Trip');
      const sec = document.getElementById(`pulang_${pos}`);
      if (!sec) return;
      sec.classList.toggle('show', val === 'Round Trip');
      const inputs = sec.querySelectorAll('input[type="text"], input[type="date"], input[type="time"], select');
      inputs.forEach(inp => {
        if (val === 'Round Trip') {
          if (!inp.name.includes('catatan_khusus')) inp.setAttribute('required', 'required');
        } else {
          inp.removeAttribute('required');
          inp.value = '';
        }
      });
    }

    function togglePulang(pos, val) { onTipeChange(pos, val); }

    function fillPenumpangData(pos, data) {
      const card = document.getElementById(`penumpang_${pos}`);
      if (!card) return;

      // Cek duplikat NIK
      const nikBaru = String(data.nik ?? '').toLowerCase().trim();
      const duplikat = penumpangData.some((_, i) => {
        const otherPos = i + 1;
        if (otherPos === pos) return false;
        const otherCard = document.getElementById(`penumpang_${otherPos}`);
        const otherNik  = otherCard?.querySelector(`[name="nik_penumpang_${otherPos}"]`)?.value.trim().toLowerCase();
        return otherNik && otherNik === nikBaru;
      });
      if (duplikat) {
        showToast(`NIK ${data.nik} sudah digunakan oleh penumpang lain.`);
        const nikInput = card.querySelector(`[name="nik_penumpang_${pos}"]`);
        if (nikInput) nikInput.value = '';
        // ← JANGAN rebuild maskapai di sini, biarkan nilai lama tetap ada
        return;
      }

      const set = (name, val) => { const el = card.querySelector(`[name="${name}"]`); if (el) el.value = val ?? ''; };
      set(`nik_ktp_${pos}`,           data.nik_ktp       ?? '');
      set(`nama_penumpang_${pos}`,    data.nama           ?? '');
      set(`posisi_penumpang_${pos}`,  data.posisi_jabatan ?? '');
      set(`no_telp_penumpang_${pos}`, data.no_telp        ?? '');

      const sbuSel = card.querySelector(`[name="sbu_penumpang_${pos}"]`);
      if (sbuSel && data.sbu) {
        const sbuLower = data.sbu.toLowerCase().trim();
        let matched = false;
        for (const opt of sbuSel.options) {
          if (opt.text.toLowerCase().includes(sbuLower)) { opt.selected = true; matched = true; break; }
        }
        if (!matched) {
          for (const opt of sbuSel.options) {
            if (sbuLower.includes(opt.text.toLowerCase().trim())) { opt.selected = true; break; }
          }
        }
      }

      const genderSel = card.querySelector(`[name="gender_${pos}"]`);
      if (genderSel) {
        const mapped = genderLabel(data.gender);
        for (const opt of genderSel.options) {
          if (opt.value === mapped) { opt.selected = true; break; }
        }
      }

      const isVip = parseInt(data.vip) === 1;
      if (penumpangData[pos - 1]) penumpangData[pos - 1]._isVip = isVip;
      card.querySelector(`[name="maskapai_${pos}"]`).innerHTML   = buildMaskapaiOptions(isVip, 'Pilih Maskapai',      '');
      card.querySelector(`[name="maskapai_p_${pos}"]`).innerHTML = buildMaskapaiOptions(isVip, '— Pilih Maskapai —', '');

      markFormChanged();
    }

    function initNikSearch(pos) {
      const card = document.getElementById(`penumpang_${pos}`);
      if (!card) return;
      const nikInput = card.querySelector(`[name="nik_penumpang_${pos}"]`);
      const dropdown = card.querySelector(`#nikDrop_${pos}`);
      let debounceTimer = null;

      function showDropdown(results) {
        dropdown.innerHTML = '';

        // Filter NIK yang sudah dipakai penumpang lain
        const usedNiks = [];
        penumpangData.forEach((_, i) => {
          const otherPos = i + 1;
          if (otherPos === pos) return;
          const otherCard = document.getElementById(`penumpang_${otherPos}`);
          const val = otherCard?.querySelector(`[name="nik_penumpang_${otherPos}"]`)?.value.trim();
          if (val) usedNiks.push(val.toLowerCase());
        });
        const filtered = results.filter(row => !usedNiks.includes(row.nik.toLowerCase()));

        if (!filtered.length) {
          dropdown.innerHTML = '<div class="nik-dd-empty">Tidak ada data ditemukan</div>';
          dropdown.classList.add('show'); return;
        }
        filtered.forEach(row => {
          const item = document.createElement('div');
          item.className = 'nik-dd-item';
          item.innerHTML = `
            <span class="nik-dd-nik">${row.nik}</span>
            <span class="nik-dd-nama">${row.nama}</span>
            <span class="nik-dd-meta">${row.posisi_jabatan ?? ''} · ${row.sbu ?? ''}</span>`;
          item.addEventListener('mousedown', (e) => {
            e.preventDefault();
            nikInput.value = row.nik;
            dropdown.classList.remove('show');
            fillPenumpangData(pos, row);
          });
          dropdown.appendChild(item);
        });
        dropdown.classList.add('show');
      }

      function hideDropdown() { dropdown.classList.remove('show'); }

      nikInput.addEventListener('input', function () {
        const q = this.value.trim();
        clearTimeout(debounceTimer);
        if (!q || q.length < 2) { hideDropdown(); return; }
        dropdown.innerHTML = '<div class="nik-dd-loading">Mencari data…</div>';
        dropdown.classList.add('show');
        debounceTimer = setTimeout(async () => {
          try {
            const res  = await fetch(`api-handler.php?action=search_penumpang&q=${encodeURIComponent(q)}`);
            const data = await res.json();
            showDropdown(data.results ?? []);
          } catch (err) {
            dropdown.innerHTML = '<div class="nik-dd-empty">Gagal mengambil data</div>';
          }
        }, 300);
      });

      nikInput.addEventListener('blur', () => {
        setTimeout(() => {
          hideDropdown();
          const nikVal = nikInput.value.trim().toLowerCase();
          if (!nikVal) {
            if (penumpangData[pos - 1]) penumpangData[pos - 1].nik_penumpang = '';
            nikInput.style.borderColor = '';
            nikInput.style.boxShadow   = '';
            return;
          }

          const duplikat = penumpangData.some((_, i) => {
            const otherPos = i + 1;
            if (otherPos === pos) return false;
            const otherCard = document.getElementById(`penumpang_${otherPos}`);
            const otherNik  = otherCard
              ?.querySelector(`[name="nik_penumpang_${otherPos}"]`)
              ?.value.trim().toLowerCase();
            return otherNik && otherNik === nikVal;
          });

          if (duplikat) {
            showToast(`NIK "${nikInput.value.trim()}" sudah digunakan oleh penumpang lain.`);
            nikInput.value = '';
            if (penumpangData[pos - 1]) penumpangData[pos - 1].nik_penumpang = '';
            nikInput.style.borderColor = 'var(--red)';
            nikInput.style.boxShadow   = '0 0 0 3px rgba(220,38,38,.15)';
            nikInput.focus();
            // ← TIDAK perlu rebuild maskapai, nilai lama tetap aman
          } else {
            if (penumpangData[pos - 1]) penumpangData[pos - 1].nik_penumpang = nikInput.value.trim();
            nikInput.style.borderColor = '';
            nikInput.style.boxShadow   = '';
          }
        }, 150);
      });

      nikInput.addEventListener('keydown', (e) => {
        const items  = dropdown.querySelectorAll('.nik-dd-item');
        const active = dropdown.querySelector('.nik-dd-item.active');
        if (e.key === 'ArrowDown') {
          e.preventDefault();
          const next = active ? (active.nextElementSibling || items[0]) : items[0];
          active?.classList.remove('active'); next?.classList.add('active'); next?.scrollIntoView({ block: 'nearest' });
        } else if (e.key === 'ArrowUp') {
          e.preventDefault();
          const prev = active ? (active.previousElementSibling || items[items.length-1]) : items[items.length-1];
          active?.classList.remove('active'); prev?.classList.add('active'); prev?.scrollIntoView({ block: 'nearest' });
        } else if (e.key === 'Enter' && active) {
          e.preventDefault(); active.dispatchEvent(new Event('mousedown'));
        } else if (e.key === 'Escape') { hideDropdown(); }
      });
    }

    function toggleSamaDenganPemesan(pos, isChecked) {
      const card = document.getElementById(`penumpang_${pos}`);
      if (!card) return;
      const v   = (id) => document.getElementById(id)?.value ?? '';
      const set = (name, val) => { const el = card.querySelector(`[name="${name}"]`); if (el) el.value = val; };
      if (isChecked) {
        set(`nik_penumpang_${pos}`,     v('nik_pemesan'));
        set(`nama_penumpang_${pos}`,    v('nama_pemesan'));
        set(`posisi_penumpang_${pos}`,  v('posisi_pemesan'));
        set(`sbu_penumpang_${pos}`,     v('sbu_pemesan'));
        set(`no_telp_penumpang_${pos}`, v('no_telp_pemesan'));
      } else {
        [`nik_penumpang_${pos}`,`nama_penumpang_${pos}`,`posisi_penumpang_${pos}`,
         `sbu_penumpang_${pos}`,`no_telp_penumpang_${pos}`].forEach(n => set(n, ''));
      }
      markFormChanged();
    }

    // ── Submit ────────────────────────────────────────────────────
    document.getElementById('formReschedule').addEventListener('submit', async function(e) {
      e.preventDefault();
      const nik    = document.getElementById('nik_pemesan').value.trim();
      const nama   = document.getElementById('nama_pemesan').value.trim();
      const alasan = document.getElementById('alasan').value.trim();
      const atasan = document.getElementById('atasan_langsung').value.trim();
      if (!nik || !nama) { showToast('NIK dan nama pemesan wajib diisi.'); return; }
      if (!alasan)       { showToast('Alasan reschedule wajib diisi.'); return; }
      if (!atasan)       { showToast('Nama atasan langsung wajib diisi.'); return; }
      if (penumpangData.length === 0) { showToast('Minimal 1 penumpang harus ditambahkan.'); return; }
      
      saveAllSnapshots();

      let valid = true;
      const penumpang = [];

      penumpangData.forEach((d, i) => {
        if (!valid) return;
        const displayPos = i + 1;

        if (!d.nik_penumpang)     { showToast(`Penumpang ${displayPos}: NIK penumpang wajib diisi.`); valid = false; return; }
        if (!d.nama_penumpang)    { showToast(`Penumpang ${displayPos}: nama penumpang wajib diisi.`); valid = false; return; }
        if (!d.sbu_penumpang)     { showToast(`Penumpang ${displayPos}: SBU wajib diisi.`); valid = false; return; }
        if (!d.no_telp_penumpang) { showToast(`Penumpang ${displayPos}: no. telepon wajib diisi.`); valid = false; return; }
        if (!d.bandara_asal || !d.bandara_tujuan || !d.maskapai || !d.tanggal_penerbangan || !d.waktu_berangkat) {
          showToast(`Penumpang ${displayPos}: lengkapi data penerbangan pergi yang wajib diisi.`);
          valid = false; return;
        }
        if (d._roundTrip) {
          if (!d.bandara_asal_p || !d.bandara_tujuan_p || !d.maskapai_p || !d.tanggal_penerbangan_p || !d.waktu_berangkat_p) {
            showToast(`Penumpang ${displayPos}: lengkapi data penerbangan pulang yang wajib diisi.`);
            valid = false; return;
          }
        }

        penumpang.push({
          nik_penumpang:         d.nik_penumpang,
          nik_ktp:               d.nik_ktp,
          nama_penumpang:        d.nama_penumpang,
          posisi_penumpang:      d.posisi_penumpang,
          sbu_penumpang:         d.sbu_penumpang,
          no_telp_penumpang:     d.no_telp_penumpang,
          gender:                d.gender,
          tipe_perjalanan:       d._roundTrip ? 'Round Trip' : 'One Way',
          bandara_asal:          d.bandara_asal,
          bandara_tujuan:        d.bandara_tujuan,
          maskapai:              d.maskapai,
          tanggal_penerbangan:   d.tanggal_penerbangan,
          waktu_berangkat:       d.waktu_berangkat,
          waktu_tiba:            d.waktu_tiba,
          catatan_khusus:        d.catatan_khusus,
          bandara_asal_p:        d.bandara_asal_p,
          bandara_tujuan_p:      d.bandara_tujuan_p,
          maskapai_p:            d.maskapai_p,
          tanggal_penerbangan_p: d.tanggal_penerbangan_p,
          waktu_berangkat_p:     d.waktu_berangkat_p,
          waktu_tiba_p:          d.waktu_tiba_p,
          catatan_khusus_p:      d.catatan_khusus_p,
        });
      });

      if (!valid) return;

      const payload = {
        old_req_id: oldReqId,
        header: {
          nik_pemesan:     nik,   nama_pemesan:   nama,
          posisi_pemesan:  document.getElementById('posisi_pemesan').value,
          sbu_pemesan:     document.getElementById('sbu_pemesan').value,
          no_telp_pemesan: document.getElementById('no_telp_pemesan').value,
          email_pemesan:   document.getElementById('email_pemesan').value,
          atasan_langsung: atasan,
          jenis_pengajuan: document.querySelector('[name="jenis_pengajuan"]:checked')?.value || 'Dinas',
          alasan:          alasan,
          beban_sbu:       document.getElementById('beban_sbu').value.trim(),
        },
        penumpang
      };

      const btn = document.getElementById('btnSubmit');
      btn.disabled = true;
      btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg> Mengirim...`;

      try {
        const res  = await fetch('api-handler.php?action=submit_reschedule', {
          method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(payload)
        });
        const data = JSON.parse(await res.text());
        if (data.success) {
          hasChanges = false;
          document.getElementById('modalReqId').textContent = data.req_id;
          document.getElementById('modalSuccess').classList.add('show');
          sendEmailReschedule(data.req_id);
        } else {
          showToast(data.message || 'Gagal mengirim reschedule');
        }
      } catch (err) {
        showToast('Tidak dapat terhubung ke server: ' + err.message);
      } finally {
        btn.disabled = false;
        btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg> Ajukan Reschedule`;
      }
    });

    function closeModal() {
      document.getElementById('modalSuccess').classList.remove('show');
      window.location.href = 'cek-status.php';
    }

    function showToast(msg) {
      const t = document.getElementById('toast');
      t.textContent = msg; t.classList.add('show');
      setTimeout(() => t.classList.remove('show'), 3500);
    }

    function sendEmailReschedule(newReqId) {
      fetch('api-handler.php?action=send_reschedule_email', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ old_req_id: oldReqId, new_req_id: newReqId })
      });
    }

    document.getElementById('formReschedule').addEventListener('change', markFormChanged);
    document.getElementById('formReschedule').addEventListener('input',  markFormChanged);

    // Load data penumpang dari pengajuan lama
    const oldPenumpangList = <?= json_encode($penumpangList) ?>;
    if (oldPenumpangList.length > 0) {
      oldPenumpangList.forEach(p => addPenumpang(p));
    } else {
      addPenumpang();
    }
  </script>
  <?php endif; ?>

</body>
</html>