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

if (isset($_SESSION['UserID']) && $_SESSION['UserID'] != '') {
    $isLoggedIn = true;
    $userName = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : '';
    $userData = isset($_SESSION['UserData']) ? $_SESSION['UserData'] : [];
}

function val($data, $key) {
    return htmlspecialchars($data[$key] ?? '');
}

function normalizeSbuCode($value, $sbuList) {
    $value = trim((string) $value);
    if ($value === '') {
        return '';
    }

    $valueLower = strtolower($value);
    foreach ($sbuList as $sbu) {
        $code = trim((string) ($sbu['code'] ?? ''));
        $desc = trim((string) ($sbu['desc'] ?? ''));

        if ($code !== '' && strtolower($code) === $valueLower) {
            return $code;
        }

        if ($desc !== '' && strtolower($desc) === $valueLower) {
            return $code;
        }
    }

    return $value;
}

function normalizeTicketPhoneNumber($value) {
    $value = trim((string) $value);
    if ($value === '') {
        return '';
    }

    $digits = preg_replace('/\D/', '', $value);
    if ($digits === '') {
        return '';
    }

    if (strpos($digits, '0') === 0) {
        return '+62' . substr($digits, 1);
    }

    if (strpos($digits, '62') === 0) {
        return '+' . $digits;
    }

    if (strpos($digits, '8') === 0) {
        return '+62' . $digits;
    }

    return '+' . $digits;
}

// Fetch SBU list dari database
$sbuList = [];
$sqlSbu = "SELECT DISTINCT CODE FROM tbl_code_list WHERE CatID = 'app_sbu' ORDER BY CODE";
$rsSbu = CustomQuery($sqlSbu);
while ($rowSbu = db_fetch_array($rsSbu)) {
    $sbuList[] = $rowSbu['CODE'];
}

$sbuPList = [];
$sqlSbu = "SELECT CODE, Description FROM tbl_code_list WHERE CatID = 'SBU' ORDER BY OrderNo";
$rsSbu = CustomQuery($sqlSbu);
while ($rowSbu = db_fetch_array($rsSbu)) {
    $sbuPList[] = [
        'code' => $rowSbu['CODE'],
        'desc' => $rowSbu['Description']
    ];
}

$sbuPemesanValue = normalizeSbuCode($userData['sbu'] ?? '', $sbuPList);
$noTelpPemesanValue = normalizeTicketPhoneNumber($userData['no_hp'] ?? '');

// Fetch Airport list dari database
$airportList = [];
$sqlAirport = "SELECT Code, Description2 FROM tbl_code_list WHERE CatID = 'AIRPORT' AND Active = 1 ORDER BY OrderNo";
$rsAirport = CustomQuery($sqlAirport);
while ($rowAirport = db_fetch_array($rsAirport)) {
    $airportList[] = [
        'code' => $rowAirport['Code'],
        'name' => $rowAirport['Description2']
    ];
}

// Fetch Airline list dari database
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
  <title>Pengajuan Tiket — Sumsel Ticketing</title>
  <link rel="icon" type="image/png" href="images/logo_sbu/SUMSEL%20ARMY.png">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --indigo:    #4338ca; --indigo-lt: #eef2ff; --indigo-md: #818cf8; --indigo-dk: #312e81;
      --green:     #059669; --green-lt:  #ecfdf5; --green-md:  #6ee7b7;
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

    .login-notice { max-width: 860px; margin: 0 auto 20px; padding: 12px 18px; background: #fffbeb; border: 1.5px solid #fde68a; border-radius: var(--radius); font-size: 13px; color: #92400e; display: flex; align-items: center; gap: 8px; }

    .card { background: rgba(255,255,255,.80); backdrop-filter: blur(16px); border: 1.5px solid rgba(255,255,255,.9); border-radius: 24px; box-shadow: var(--shadow); padding: 32px; margin-bottom: 20px; }
    .card-title { font-size: 16px; font-weight: 700; color: var(--indigo-dk); display: flex; align-items: center; gap: 10px; margin-bottom: 24px; padding-bottom: 14px; border-bottom: 1.5px solid var(--gray-200); }
    .card-title .icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .icon-indigo { background: var(--indigo-lt); } .icon-green { background: var(--green-lt); }

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

    .pulang-section { margin-top: 20px; padding-top: 20px; border-top: 1.5px dashed var(--gray-200); display: none; }
    .pulang-section.show { display: block; }
    .pulang-label { font-size: 12px; font-weight: 700; color: var(--green); text-transform: uppercase; letter-spacing: .08em; margin-bottom: 16px; }

    .btn-add-penumpang { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 12px; background: transparent; border: 2px dashed var(--indigo-md); border-radius: var(--radius); color: var(--indigo); font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; font-weight: 600; cursor: pointer; transition: all .2s; margin-top: 4px; }
    .btn-add-penumpang:hover { background: var(--indigo-lt); border-color: var(--indigo); }

    .btn-submit { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 16px; background: var(--indigo); border: none; border-radius: var(--radius); color: #fff; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 700; cursor: pointer; transition: all .25s cubic-bezier(.34,1.56,.64,1); box-shadow: 0 4px 20px rgba(67,56,202,.3); }
    .btn-submit:hover { background: var(--indigo-dk); transform: translateY(-2px); }
    .btn-submit:disabled { background: var(--gray-400); cursor: not-allowed; transform: none; box-shadow: none; }

    .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,.45); z-index: 100; align-items: center; justify-content: center; padding: 20px; }
    .modal-overlay.show { display: flex; }
    .modal { background: #fff; border-radius: 24px; padding: 40px 36px; max-width: 420px; width: 100%; text-align: center; animation: pop .35s cubic-bezier(.34,1.56,.64,1); }
    @keyframes pop { from { transform: scale(.85); opacity: 0; } to { transform: scale(1); opacity: 1; } }
    .modal-icon { width: 64px; height: 64px; border-radius: 20px; background: var(--green-lt); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; }
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

        /* ══════════════════════════════════════════
      NIK SEARCH DROPDOWN
    ══════════════════════════════════════════ */

    /* Wrapper posisi relative agar dropdown bisa absolute di dalamnya */
    .nik-search-wrap {
      position: relative;
      margin-bottom: 16px;
    }

    /* Icon search di dalam input */
    .nik-search-icon {
      position: absolute;
      right: 14px;
      top: 36px; /* sejajar dengan input (label ~22px + gap 6px + padding atas 8px) */
      pointer-events: none;
      transition: opacity .2s;
    }

    /* Dropdown container */
    .nik-dropdown {
      display: none;
      position: absolute;
      top: calc(100% + 4px);
      left: 0;
      right: 0;
      background: #fff;
      border: 1.5px solid #c7d2fe;
      border-radius: 12px;
      box-shadow: 0 8px 32px rgba(99,102,241,.15), 0 2px 8px rgba(0,0,0,.06);
      z-index: 50;
      max-height: 260px;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: #c7d2fe transparent;
    }
    .nik-dropdown.show { display: block; }

    /* Tiap item hasil search */
    .nik-dd-item {
      display: grid;
      grid-template-columns: auto 1fr;
      grid-template-rows: auto auto;
      column-gap: 10px;
      align-items: center;
      padding: 10px 14px;
      cursor: pointer;
      border-bottom: 1px solid #f3f4f6;
      transition: background .15s;
    }
    .nik-dd-item:last-child { border-bottom: none; }
    .nik-dd-item:hover,
    .nik-dd-item.active    { background: #eef2ff; }

    /* Badge NIK */
    .nik-dd-nik {
      grid-row: 1 / 3;
      grid-column: 1;
      font-size: 11px;
      font-weight: 700;
      color: var(--indigo);
      background: var(--indigo-lt);
      padding: 3px 9px;
      border-radius: 20px;
      letter-spacing: .04em;
      white-space: nowrap;
      align-self: center;
    }

    /* Nama penumpang */
    .nik-dd-nama {
      grid-row: 1;
      grid-column: 2;
      font-size: 13px;
      font-weight: 600;
      color: var(--gray-800);
    }

    /* Posisi & SBU */
    .nik-dd-meta {
      grid-row: 2;
      grid-column: 2;
      font-size: 11px;
      color: var(--gray-400);
    }

    /* State: tidak ada hasil */
    .nik-dd-empty {
      padding: 14px 16px;
      font-size: 13px;
      color: var(--gray-400);
      text-align: center;
    }

    /* State: sedang loading */
    .nik-dd-loading {
      padding: 14px 16px;
      font-size: 13px;
      color: var(--indigo-md);
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .nik-dd-loading::before {
      content: '';
      width: 14px; height: 14px;
      border: 2px solid #c7d2fe;
      border-top-color: var(--indigo);
      border-radius: 50%;
      animation: nik-spin .7s linear infinite;
      flex-shrink: 0;
    }
    @keyframes nik-spin { to { transform: rotate(360deg); } }

    /* Field auto-fill (readonly) */
    .field-autofill input,
    .field-autofill select {
      background: var(--gray-50) !important;
      color: var(--gray-600) !important;
      cursor: default;
    }

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

    <a href="landing.php" class="back-link">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      Kembali ke Beranda
    </a>

    <div class="page-header">
      <p class="brand">Sumsel Ticketing</p>
      <h1>Pengajuan Tiket Pesawat</h1>
      <p>Isi data pemesan dan detail penumpang dengan lengkap</p>
    </div>

    <?php if (!$isLoggedIn): ?>
    <div class="login-notice">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      Anda belum login. Data pemesan harus diisi manual.
      <a href="login.php" style="color:#92400e;font-weight:700;margin-left:4px">Login sekarang →</a>
    </div>
    <?php endif; ?>

    <form id="formTiket" novalidate>

    <!-- DATA PEMESAN -->
    <div class="card">
      <div class="card-title">
        <div class="icon icon-indigo">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        Data Pemesan
        <?php if ($isLoggedIn): ?>
          <span style="margin-left:auto;font-size:12px;font-weight:500;color:var(--green);background:var(--green-lt);padding:4px 10px;border-radius:20px;">
            ✓ Terisi dari profil
          </span>
        <?php endif; ?>
      </div>

      <!-- ✏️ CHANGE: Hapus field atasan_langsung dari sini, grid tetap 2 kolom -->
      <div class="grid-2" style="margin-bottom:16px">
        <div class="field">
          <label>NIK Pemesan <span class="req">*</span></label>
          <input type="text" id="nik_pemesan" name="nik_pemesan"
            placeholder="Masukkan NIK" maxlength="20" required
            value="<?= val($userData, 'nik') ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <div class="field">
          <label>Nama Pemesan <span class="req">*</span></label>
          <input type="text" id="nama_pemesan" name="nama_pemesan"
            placeholder="Nama lengkap" required
            value="<?= val($userData, 'nama') ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <div class="field">
          <label>Posisi / Jabatan <span class="req">*</span></label>
          <input type="text" id="posisi_pemesan" name="posisi_pemesan"
            placeholder="Posisi / jabatan" required
            value="<?= val($userData, 'posisi') ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <div class="field">
          <label>SBU <span class="req">*</span></label>
          <input type="text" id="sbu_pemesan" name="sbu_pemesan"
            placeholder="SBU" required
            value="<?= htmlspecialchars($sbuPemesanValue) ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <div class="field">
          <label>No. Telepon <span class="req">*</span></label>
          <input type="text" id="no_telp_pemesan" name="no_telp_pemesan"
            placeholder="+628xxxxxxxxxx" required
            value="<?= htmlspecialchars($noTelpPemesanValue) ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <div class="field">
          <label>Email <span class="req">*</span></label>
          <input type="email" id="email_pemesan" name="email_pemesan"
            placeholder="email@baramultigroup.co.id" required
            value="<?= val($userData, 'email') ?>"
            <?= $isLoggedIn ? 'readonly' : '' ?>>
        </div>
        <!-- ✏️ REMOVED: field atasan_langsung dihapus dari sini -->
      </div>

    <!-- DATA PENGAJUAN -->
      <div class="card-title" style="margin-bottom: 16px; margin-top: 24px;">
        <div class="icon icon-indigo">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
              <input type="radio" name="jenis_pengajuan" value="Dinas" checked required> Dinas
            </label>
            <label class="radio-opt">
              <input type="radio" name="jenis_pengajuan" value="Cuti" required> Cuti
            </label>
          </div>
        </div>

        <div class="field">
          <label>Beban SBU <span class="req">*</span></label>
          <select id="beban_sbu" name="beban_sbu" required>
            <option value="">Pilih SBU</option>
            <?php foreach ($sbuList as $sbu): ?>
              <option value="<?= htmlspecialchars($sbu) ?>"><?= htmlspecialchars($sbu) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="field col-span-2">
          <label>Alasan / Keperluan <span class="req">*</span></label>
          <textarea id="alasan" name="alasan" required
            placeholder="Jelaskan Alasan Pengajuan"></textarea>
        </div>

        <!-- ✏️ CHANGE: nama_penanggung_jawab → diganti atasan_langsung -->
        <div class="field col-span-2">
          <label>Atasan Langsung <span class="req">*</span></label>
          <input type="text" id="atasan_langsung" name="atasan_langsung" required
            placeholder="Nama atasan langsung">
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

    <div style="max-width:860px;margin:0 auto">
      <button type="submit" class="btn-submit" id="btnSubmit">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        Kirim Pengajuan
      </button>
    </div>
    </form>

    </div>

  <!-- MODAL SUCCESS -->
  <div class="modal-overlay" id="modalSuccess">
    <div class="modal">
      <div class="modal-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h2>Pengajuan Berhasil!</h2>
      <p>Simpan nomor tiket berikut untuk memantau status pengajuan Anda</p>
      <div class="req-id-box" id="modalReqId">—</div>
      <p class="modal-note">Gunakan nomor ini di halaman <strong>Cek Status</strong></p>
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

  <script>
    let penumpangCount = 0;
    let hasChanges = false;

    function markFormChanged() {
      hasChanges = true;
    }

    window.addEventListener('beforeunload', function(e) {
      if (hasChanges) {
        e.preventDefault();
        e.returnValue = '';
        return '';
      }
    });

    // Build data maskapai dari PHP sekali saja
    const airlineData = [
        <?php foreach ($airlineList as $airline): ?>
        { code: '<?= $airline['code'] ?>', name: '<?= addslashes($airline['name']) ?>' },
        <?php endforeach; ?>
    ];

    function buildMaskapaiOptions(isVip, placeholder) {
        let html = `<option value="">${placeholder}</option>`;
        airlineData.forEach(function(airline) {
            const isGaruda  = airline.code === 'GA';
            const disabled = isGaruda && !isVip ? 'disabled' : '';
            const label    = isGaruda && !isVip ? airline.name + ' (Tidak tersedia)' : airline.name;
            html += `<option value="${airline.name}" ${disabled}>${label}</option>`;
        });
        return html;
    }

    // ── Helper: konversi gender DB (L/P) → value option form ─────
    function genderLabel(g) {
      return g === 'L' ? 'Laki-laki' : g === 'P' ? 'Perempuan' : '';
    }

    // ── Isi field penumpang dari data hasil search ────────────────
    function fillPenumpangData(idx, data) {
      const card = document.getElementById(`penumpang_${idx}`);
      if (!card) return;

      // Isi input text biasa
      const set = (name, val) => {
        const el = card.querySelector(`[name="${name}"]`);
        if (el) el.value = val ?? '';
      };

      set(`nik_ktp_${idx}`,           data.nik_ktp       ?? '');
      set(`nama_penumpang_${idx}`,    data.nama           ?? '');
      set(`posisi_penumpang_${idx}`,  data.posisi_jabatan ?? '');
      set(`no_telp_penumpang_${idx}`, data.no_telp        ?? '');

      // SBU — set select, coba exact match dulu
      const sbuSel = card.querySelector(`[name="sbu_penumpang_${idx}"]`);
      if (sbuSel && data.sbu) {
        const sbuLower = data.sbu.toLowerCase().trim();
        let matched = false;

        for (const opt of sbuSel.options) {
          // cek apakah teks option mengandung description dari DB
          if (opt.text.toLowerCase().includes(sbuLower)) {
            opt.selected = true;
            matched = true;
            break;
          }
        }

        // fallback: cek sebaliknya — description DB mengandung teks option
        if (!matched) {
          for (const opt of sbuSel.options) {
            if (sbuLower.includes(opt.text.toLowerCase().trim())) {
              opt.selected = true;
              break;
            }
          }
        }
      }

      // Gender — map L/P ke value option
      const genderSel = card.querySelector(`[name="gender_${idx}"]`);
      if (genderSel) {
        const mapped = genderLabel(data.gender);
        for (const opt of genderSel.options) {
          if (opt.value === mapped) { opt.selected = true; break; }
        }
      }

      // Update maskapai sesuai VIP — langsung dari data, tanpa fetch ulang
      const isVip    = parseInt(data.vip) === 1;
      const selPergi  = card.querySelector(`[name="maskapai_${idx}"]`);
      const selPulang = card.querySelector(`[name="maskapai_p_${idx}"]`);
      if (selPergi)  selPergi.innerHTML  = buildMaskapaiOptions(isVip, 'Pilih Maskapai');
      if (selPulang) selPulang.innerHTML = buildMaskapaiOptions(isVip, '— Pilih Maskapai —');

      markFormChanged();
    }

    // ── NIK search autocomplete ───────────────────────────────────
    function initNikSearch(idx) {
      const card     = document.getElementById(`penumpang_${idx}`);
      if (!card) return;

      const nikInput = card.querySelector(`[name="nik_penumpang_${idx}"]`);
      const dropdown = card.querySelector(`#nikDrop_${idx}`);
      let debounceTimer = null;

      function showDropdown(results) {
        dropdown.innerHTML = '';

        if (!results.length) {
          dropdown.innerHTML = '<div class="nik-dd-empty">Tidak ada data ditemukan</div>';
          dropdown.classList.add('show');
          return;
        }

        results.forEach(row => {
          const item = document.createElement('div');
          item.className = 'nik-dd-item';
          item.innerHTML = `
            <span class="nik-dd-nik">${row.nik}</span>
            <span class="nik-dd-nama">${row.nama}</span>
            <span class="nik-dd-meta">${row.posisi_jabatan ?? ''} · ${row.sbu ?? ''}</span>`;

          item.addEventListener('mousedown', (e) => {
            e.preventDefault(); // cegah blur sebelum klik selesai
            nikInput.value = row.nik;
            dropdown.classList.remove('show');
            fillPenumpangData(idx, row);
          });

          dropdown.appendChild(item);
        });

        dropdown.classList.add('show');
      }

      function hideDropdown() {
        dropdown.classList.remove('show');
      }

      // Ketik → search dengan debounce
      nikInput.addEventListener('input', function () {
        const q = this.value.trim();
        clearTimeout(debounceTimer);

        if (!q || q.length < 2) { hideDropdown(); return; }

        // Tampilkan loading dulu
        dropdown.innerHTML = '<div class="nik-dd-loading">Mencari data…</div>';
        dropdown.classList.add('show');

        debounceTimer = setTimeout(async () => {
          try {
            const res  = await fetch(`api-handler.php?action=search_penumpang&q=${encodeURIComponent(q)}`);
            const data = await res.json();
            showDropdown(data.results ?? []);
          } catch (err) {
            dropdown.innerHTML = '<div class="nik-dd-empty">Gagal mengambil data</div>';
            console.error('search_penumpang error:', err);
          }
        }, 300);
      });

      // Blur → tutup dropdown (delay agar mousedown sempat jalan)
      nikInput.addEventListener('blur', () => {
        setTimeout(hideDropdown, 150);
      });

      // Keyboard navigation
      nikInput.addEventListener('keydown', (e) => {
        const items  = dropdown.querySelectorAll('.nik-dd-item');
        const active = dropdown.querySelector('.nik-dd-item.active');

        if (e.key === 'ArrowDown') {
          e.preventDefault();
          const next = active ? (active.nextElementSibling || items[0]) : items[0];
          active?.classList.remove('active');
          next?.classList.add('active');
          next?.scrollIntoView({ block: 'nearest' });

        } else if (e.key === 'ArrowUp') {
          e.preventDefault();
          const prev = active
            ? (active.previousElementSibling || items[items.length - 1])
            : items[items.length - 1];
          active?.classList.remove('active');
          prev?.classList.add('active');
          prev?.scrollIntoView({ block: 'nearest' });

        } else if (e.key === 'Enter' && active) {
          e.preventDefault();
          active.dispatchEvent(new Event('mousedown'));

        } else if (e.key === 'Escape') {
          hideDropdown();
        }
      });
    }
    function addPenumpang() {
      penumpangCount++;
      const idx = penumpangCount;
      const list = document.getElementById('penumpangList');
      const card = document.createElement('div');
      card.className = 'penumpang-card';
      card.id = `penumpang_${idx}`;
card.innerHTML = `
  <div class="penumpang-header">
    <span class="penumpang-num">Penumpang ${idx}</span>
    <div style="display:flex;align-items:center;gap:6px">
      <label style="display:flex;align-items:center;gap:6px;cursor:pointer;font-size:13px;font-weight:500;margin:0">
        <input type="checkbox" name="sama_dengan_pemesan_${idx}" onchange="toggleSamaDenganPemesan(${idx}, this.checked)" style="width:16px;height:16px;cursor:pointer">
        Sama dengan data pemesan
      </label>
      ${idx > 1 ? `<button type="button" class="btn-remove" onclick="removePenumpang(${idx})">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Hapus
      </button>` : ''}
    </div>
  </div>

  <!-- ① NIK SEARCH -->
  <div class="nik-search-wrap">
    <div class="field">
      <label>NIK Karyawan <span class="req">*</span></label>
      <input
        type="text"
        name="nik_penumpang_${idx}"
        placeholder="Ketik NIK untuk mencari data penumpang…"
        maxlength="50"
        required
        autocomplete="off"
        style="padding-right:38px">
      <svg class="nik-search-icon" width="15" height="15" viewBox="0 0 24 24" fill="none"
        stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
    </div>
    <div class="nik-dropdown" id="nikDrop_${idx}"></div>
  </div>

  <!-- ② DATA PENUMPANG — auto-fill tapi tetap bisa diedit -->
  <div class="grid-3" style="margin-bottom:14px">

    <div class="field">
      <label>NIK KTP <span class="req">*</span></label>
      <input type="text" name="nik_ktp_${idx}" placeholder="16 digit NIK KTP" maxlength="16" required>
    </div>

    <div class="field col-span-2">
      <label>Nama Penumpang <span class="req">*</span></label>
      <input type="text" name="nama_penumpang_${idx}" placeholder="Sesuai KTP / Paspor" required>
    </div>

    <div class="field">
      <label>Posisi / Jabatan <span class="req">*</span></label>
      <input type="text" name="posisi_penumpang_${idx}" placeholder="Jabatan penumpang" required>
    </div>

    <div class="field">
      <label>SBU <span class="req">*</span></label>
      <select name="sbu_penumpang_${idx}" required>
        <option value="">Pilih SBU</option>
        <?php foreach ($sbuPList as $sbu): ?>
        <option value="<?= htmlspecialchars($sbu['code']) ?>">
          <?= htmlspecialchars($sbu['code'] . ' - ' . $sbu['desc']) ?>
        </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="field">
      <label>No. Telepon <span class="req">*</span></label>
      <input type="text" name="no_telp_penumpang_${idx}" placeholder="08xxxxxxxxxx" required>
    </div>

    <div class="field">
      <label>Jenis Kelamin <span class="req">*</span></label>
      <select name="gender_${idx}" required>
        <option value="">Pilih Gender</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="field col-span-2">
      <label>Tipe Perjalanan <span class="req">*</span></label>
      <div class="radio-group">
        <label class="radio-opt">
          <input type="radio" name="tipe_perjalanan_${idx}" value="One Way" checked
            onchange="togglePulang(${idx}, this.value)" required> One Way
        </label>
        <label class="radio-opt">
          <input type="radio" name="tipe_perjalanan_${idx}" value="Round Trip"
            onchange="togglePulang(${idx}, this.value)" required> Round Trip
        </label>
      </div>
    </div>

  </div>

  <!-- ③ PENERBANGAN PERGI -->
  <div style="background:#fff;border:1.5px solid #e0e7ff;border-radius:10px;padding:16px;margin-bottom:4px">
    <div style="font-size:12px;font-weight:700;color:var(--indigo);text-transform:uppercase;letter-spacing:.08em;margin-bottom:14px">
      Penerbangan Pergi
    </div>
    <div class="grid-3">
      <div class="field"><label>Bandara Asal <span class="req">*</span></label>
        <input type="text" name="bandara_asal_${idx}" placeholder="CGK — Jakarta" list="airportList" autocomplete="off" required>
      </div>
      <div class="field"><label>Bandara Tujuan <span class="req">*</span></label>
        <input type="text" name="bandara_tujuan_${idx}" placeholder="PLM — Palembang" list="airportList" autocomplete="off" required>
      </div>
      <div class="field"><label>Maskapai <span class="req">*</span></label>
        <select name="maskapai_${idx}" required>${buildMaskapaiOptions(false, 'Pilih Maskapai')}</select>
      </div>
      <div class="field"><label>Tanggal Penerbangan <span class="req">*</span></label>
        <input type="date" name="tanggal_penerbangan_${idx}" required>
      </div>
      <div class="field"><label>Waktu Berangkat <span class="req">*</span></label>
        <input type="time" name="waktu_berangkat_${idx}" required>
      </div>
      <div class="field"><label>Waktu Tiba <span class="req">*</span></label>
        <input type="time" name="waktu_tiba_${idx}" required>
      </div>
      <div class="field col-span-3"><label>Catatan Khusus</label>
        <input type="text" name="catatan_khusus_${idx}" placeholder="Contoh: butuh kursi aisle, extra baggage, dll">
      </div>
    </div>
  </div>

  <!-- ④ PENERBANGAN PULANG -->
  <div class="pulang-section" id="pulang_${idx}"
    style="background:#fff;border:1.5px solid #e0e7ff;border-radius:10px;padding:16px;margin-top:16px;margin-bottom:0">
    <div class="pulang-label">Penerbangan Pulang (Round Trip)</div>
    <div class="grid-3">
      <div class="field"><label>Bandara Asal <span class="req">*</span></label>
        <input type="text" name="bandara_asal_p_${idx}" placeholder="PLM — Palembang" list="airportList" autocomplete="off">
      </div>
      <div class="field"><label>Bandara Tujuan <span class="req">*</span></label>
        <input type="text" name="bandara_tujuan_p_${idx}" placeholder="CGK — Jakarta" list="airportList" autocomplete="off">
      </div>
      <div class="field"><label>Maskapai <span class="req">*</span></label>
        <select name="maskapai_p_${idx}">${buildMaskapaiOptions(false, '— Pilih Maskapai —')}</select>
      </div>
      <div class="field"><label>Tanggal Penerbangan <span class="req">*</span></label>
        <input type="date" name="tanggal_penerbangan_p_${idx}">
      </div>
      <div class="field"><label>Waktu Berangkat <span class="req">*</span></label>
        <input type="time" name="waktu_berangkat_p_${idx}">
      </div>
      <div class="field"><label>Waktu Tiba <span class="req">*</span></label>
        <input type="time" name="waktu_tiba_p_${idx}">
      </div>
      <div class="field col-span-3"><label>Catatan Khusus</label>
        <input type="text" name="catatan_khusus_p_${idx}" placeholder="Catatan penerbangan pulang">
      </div>
    </div>
  </div>
`;
      list.appendChild(card); // ← appendChild dulu

      initNikSearch(idx);
      markFormChanged();
    }

    function removePenumpang(idx) { 
      document.getElementById(`penumpang_${idx}`)?.remove();
      markFormChanged();
    }
    function togglePulang(idx, val) { 
      const sec = document.getElementById(`pulang_${idx}`);
      sec?.classList.toggle('show', val === 'Round Trip');
      const inputs = sec?.querySelectorAll('input[type="text"], input[type="date"], input[type="time"], select') || [];
      inputs.forEach(inp => {
        if (val === 'Round Trip') {
          if (!inp.name.includes('catatan_khusus')) {
            inp.setAttribute('required', 'required');
          }
        } else {
          inp.removeAttribute('required');
        }
      });
    }

    function toggleSamaDenganPemesan(idx, isChecked) {
      const card = document.getElementById(`penumpang_${idx}`);
      if (!card) return;
      
      const nikPemesan = document.getElementById('nik_pemesan').value;
      const namaPemesan = document.getElementById('nama_pemesan').value;
      const posisiPemesan = document.getElementById('posisi_pemesan').value;
      const sbuPemesan = document.getElementById('sbu_pemesan').value;
      const telpPemesan = document.getElementById('no_telp_pemesan').value;
      
      const nikInput = card.querySelector(`[name="nik_penumpang_${idx}"]`);
      const namaInput = card.querySelector(`[name="nama_penumpang_${idx}"]`);
      const posisiInput = card.querySelector(`[name="posisi_penumpang_${idx}"]`);
      const sbuInput = card.querySelector(`[name="sbu_penumpang_${idx}"]`);
      const telpInput = card.querySelector(`[name="no_telp_penumpang_${idx}"]`);
      
      if (isChecked) {
        nikInput.value = nikPemesan;
        namaInput.value = namaPemesan;
        posisiInput.value = posisiPemesan;
        sbuInput.value = sbuPemesan;
        telpInput.value = telpPemesan;
      } else {
        nikInput.value = '';
        namaInput.value = '';
        posisiInput.value = '';
        sbuInput.value = '';
        telpInput.value = '';
      }
      
      markFormChanged();
    }

    document.getElementById('formTiket').addEventListener('submit', async function(e) {
      e.preventDefault();
      const nik    = document.getElementById('nik_pemesan').value.trim();
      const nama   = document.getElementById('nama_pemesan').value.trim();
      const alasan = document.getElementById('alasan').value.trim();
      // ✏️ CHANGE: validasi atasan_langsung (menggantikan nama_penanggung_jawab)
      const atasan_langsung = document.getElementById('atasan_langsung').value.trim();
      if (!nik || !nama) { showToast('NIK dan nama pemesan wajib diisi.'); return; }
      if (!alasan)       { showToast('Alasan / keperluan wajib diisi.'); return; }
      if (!atasan_langsung) { showToast('Nama atasan langsung wajib diisi.'); return; }
      const cards = document.querySelectorAll('.penumpang-card');
      if (cards.length === 0) { showToast('Minimal 1 penumpang harus ditambahkan.'); return; }
      const penumpang = []; let valid = true;
      cards.forEach((card, i) => {
        const idx    = card.id.replace('penumpang_', '');
        const nama_p = card.querySelector(`[name="nama_penumpang_${idx}"]`)?.value.trim();
        const sbu_p  = card.querySelector(`[name="sbu_penumpang_${idx}"]`)?.value.trim();
        const telp_p = card.querySelector(`[name="no_telp_penumpang_${idx}"]`)?.value.trim();
        const asal   = card.querySelector(`[name="bandara_asal_${idx}"]`)?.value.trim();
        const tujuan = card.querySelector(`[name="bandara_tujuan_${idx}"]`)?.value.trim();
        const maskai = card.querySelector(`[name="maskapai_${idx}"]`)?.value.trim();
        const tgl    = card.querySelector(`[name="tanggal_penerbangan_${idx}"]`)?.value;
        const jam    = card.querySelector(`[name="waktu_berangkat_${idx}"]`)?.value;
        const tipe_perjalanan = card.querySelector(`[name="tipe_perjalanan_${idx}"]:checked`)?.value || 'One Way';
        
        if (!nama_p || !sbu_p || !telp_p || !asal || !tujuan || !maskai || !tgl || !jam) {
          showToast(`Penumpang ${i+1}: lengkapi data penerbangan pergi yang wajib diisi.`); valid = false; return;
        }
        
        if (tipe_perjalanan === 'Round Trip') {
          const asal_p   = card.querySelector(`[name="bandara_asal_p_${idx}"]`)?.value.trim();
          const tujuan_p = card.querySelector(`[name="bandara_tujuan_p_${idx}"]`)?.value.trim();
          const maskai_p = card.querySelector(`[name="maskapai_p_${idx}"]`)?.value.trim();
          const tgl_p    = card.querySelector(`[name="tanggal_penerbangan_p_${idx}"]`)?.value;
          const jam_p    = card.querySelector(`[name="waktu_berangkat_p_${idx}"]`)?.value;
          
          if (!asal_p || !tujuan_p || !maskai_p || !tgl_p || !jam_p) {
            showToast(`Penumpang ${i+1}: lengkapi data penerbangan pulang yang wajib diisi.`); valid = false; return;
          }
        }
        penumpang.push({
          nik_penumpang: card.querySelector(`[name="nik_penumpang_${idx}"]`)?.value.trim(),
          nik_ktp: card.querySelector(`[name="nik_ktp_${idx}"]`)?.value.trim(),
          nama_penumpang: nama_p,
          posisi_penumpang: card.querySelector(`[name="posisi_penumpang_${idx}"]`)?.value.trim(),
          sbu_penumpang: sbu_p, no_telp_penumpang: telp_p,
          gender: card.querySelector(`[name="gender_${idx}"]`)?.value,
          tipe_perjalanan: tipe_perjalanan,
          bandara_asal: asal, bandara_tujuan: tujuan, maskapai: maskai,
          tanggal_penerbangan: tgl, waktu_berangkat: jam,
          waktu_tiba: card.querySelector(`[name="waktu_tiba_${idx}"]`)?.value,
          catatan_khusus: card.querySelector(`[name="catatan_khusus_${idx}"]`)?.value.trim(),
          bandara_asal_p: card.querySelector(`[name="bandara_asal_p_${idx}"]`)?.value.trim(),
          bandara_tujuan_p: card.querySelector(`[name="bandara_tujuan_p_${idx}"]`)?.value.trim(),
          maskapai_p: card.querySelector(`[name="maskapai_p_${idx}"]`)?.value.trim(),
          tanggal_penerbangan_p: card.querySelector(`[name="tanggal_penerbangan_p_${idx}"]`)?.value,
          waktu_berangkat_p: card.querySelector(`[name="waktu_berangkat_p_${idx}"]`)?.value,
          waktu_tiba_p: card.querySelector(`[name="waktu_tiba_p_${idx}"]`)?.value,
          catatan_khusus_p: card.querySelector(`[name="catatan_khusus_p_${idx}"]`)?.value.trim(),
        });
      });
      if (!valid) return;
      const payload = {
        header: {
          nik_pemesan: nik, nama_pemesan: nama,
          posisi_pemesan: document.getElementById('posisi_pemesan').value,
          sbu_pemesan: document.getElementById('sbu_pemesan').value,
          no_telp_pemesan: document.getElementById('no_telp_pemesan').value,
          email_pemesan: document.getElementById('email_pemesan').value,
          // ✏️ CHANGE: kirim atasan_langsung (menggantikan nama_penanggung_jawab)
          atasan_langsung: atasan_langsung,
          jenis_pengajuan: document.querySelector('[name="jenis_pengajuan"]:checked')?.value || 'Dinas',
          alasan: alasan,
          beban_sbu: document.getElementById('beban_sbu').value.trim(),
        }, penumpang
      };
      const btn = document.getElementById('btnSubmit');
      btn.disabled = true;
      btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg> Mengirim...`;
      try {
      const res  = await fetch('api-handler.php?action=submit_tiket', { 
          method: 'POST', 
          headers: { 'Content-Type': 'application/json' }, 
          body: JSON.stringify(payload) 
      });
      const text = await res.text();           // ← text dulu
      // console.log('RAW RESPONSE:', text);      // ← lihat di console
      const data = JSON.parse(text);           // ← baru parse
      if (data.success) {
          hasChanges = false;
          document.getElementById('modalReqId').textContent = data.req_id;
          document.getElementById('modalSuccess').classList.add('show');
      } else { 
        showToast(data.message || 'Gagal mengirim pengajuan'); 
      }
      } catch (err) { 
        console.error('Error:', err);
        showToast('Tidak dapat terhubung ke server: ' + err.message); 
      }
      finally {
        btn.disabled = false;
        btn.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg> Kirim Pengajuan`;
      }
    });

    function closeModal() {
      const reqId = document.getElementById('modalReqId').textContent;
      document.getElementById('modalSuccess').classList.remove('show');
      window.location.href = "print_tiket.php?req_id=" + encodeURIComponent(reqId)
    }
    function showToast(msg) {
      const t = document.getElementById('toast');
      t.textContent = msg; t.classList.add('show');
      setTimeout(() => t.classList.remove('show'), 3500);
    }

    document.getElementById('formTiket').addEventListener('change', markFormChanged);
    document.getElementById('formTiket').addEventListener('input', markFormChanged);
    
    addPenumpang();
  </script>
</body>
</html>
