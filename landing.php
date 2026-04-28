<?php
// Start session dengan nama yang sama seperti PHPRunner
@session_name("pwvput4sWlnQlbMIPW6Rf");
@session_start();

// Check login - redirect jika belum login
if (!isset($_SESSION['UserID']) || $_SESSION['UserID'] == '') {
    header('Location: login.php');
    exit;
}

$isLoggedIn = false;
$userName = '';

// Cek session PHPRunner
if (isset($_SESSION['UserID']) && $_SESSION['UserID'] != '') {
    $isLoggedIn = true;
    $userName = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sumsel Ticketing</title>
  <link rel="icon" type="image/png" href="images/logo_sbu/SUMSEL%20ARMY.png">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #eef2ff;
      background-image:
        radial-gradient(ellipse 70% 50% at 10% 10%, rgba(165,180,252,0.45) 0%, transparent 55%),
        radial-gradient(ellipse 60% 50% at 90% 90%, rgba(167,243,208,0.35) 0%, transparent 55%),
        radial-gradient(ellipse 50% 40% at 50% 0%, rgba(196,181,253,0.25) 0%, transparent 50%);
      padding: 40px 20px;
      gap: 40px;
    }

    .content-wrapper {
      max-width: 900px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 40px;
    }

    /* ===== TOP BAR ===== */
    .topbar {
      position: fixed;
      top: 0; right: 0;
      padding: 14px 24px;
      display: flex;
      align-items: center;
      gap: 10px;
      z-index: 100;
    }

    .user-info {
      font-size: 13px;
      font-weight: 500;
      color: #6366f1;
    }

    .btn-auth {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 8px 16px;
      border-radius: 50px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 12px;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      border: none;
      transition: all 0.2s ease;
    }

    .btn-login {
      background: #6366f1;
      color: #fff;
      box-shadow: 0 4px 16px rgba(99,102,241,0.3);
    }
    .btn-login:hover {
      background: #4f46e5;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(99,102,241,0.4);
      color: #fff;
      text-decoration: none;
    }

    .btn-logout {
      background: rgba(255,255,255,0.8);
      color: #ef4444;
      border: 1.5px solid rgba(239,68,68,0.2);
      backdrop-filter: blur(8px);
    }
    .btn-logout:hover {
      background: #fef2f2;
      border-color: #ef4444;
      transform: translateY(-1px);
      color: #dc2626;
      text-decoration: none;
    }

    /* ===== HEADER ===== */
    .header {
      text-align: center;
    }

    .brand {
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.3em;
      color: #818cf8;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .title {
      font-size: 42px;
      font-weight: 700;
      color: #312e81;
      letter-spacing: -0.02em;
      margin-bottom: 12px;
    }

    .subtitle {
      font-size: 15px;
      color: #9ca3af;
      font-weight: 400;
    }

    /* ===== BUTTONS ROW ===== */
    .btn-row {
      display: flex;
      flex-direction: row;
      gap: 32px;
      flex-wrap: wrap;
      justify-content: center;
      align-items: stretch;
    }

    .card-btn {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 280px;
      min-height: 240px;
      padding: 32px 28px;
      border-radius: 24px;
      border: 1.5px solid rgba(255,255,255,0.9);
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.01em;
      text-align: center;
      text-transform: uppercase;
      line-height: 1.5;
      text-decoration: none;
      cursor: pointer;
      box-shadow: 0 4px 24px rgba(99,102,241,0.08), 0 1px 3px rgba(0,0,0,0.03);
      transition: transform 0.22s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.22s ease, background 0.22s ease;
    }

    .icon-box {
      width: 64px;
      height: 64px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
      flex-shrink: 0;
    }

    .icon-box svg {
      width: 32px;
      height: 32px;
    }

    /* Pengajuan — ungu/indigo */
    .btn-pengajuan .icon-box { background: #eef2ff; }
    .btn-pengajuan { color: #4338ca; }
    .btn-pengajuan:hover {
      background: rgba(238,242,255,0.95);
      border-color: #a5b4fc;
      box-shadow: 0 16px 48px rgba(99,102,241,0.2), 0 2px 8px rgba(0,0,0,0.06);
      transform: translateY(-8px);
      color: #3730a3;
      text-decoration: none;
    }

    /* Cek Status — hijau emerald */
    .btn-cekstatus .icon-box { background: #ecfdf5; }
    .btn-cekstatus { color: #059669; }
    .btn-cekstatus:hover {
      background: rgba(236,253,245,0.95);
      border-color: #6ee7b7;
      box-shadow: 0 16px 48px rgba(16,185,129,0.18), 0 2px 8px rgba(0,0,0,0.06);
      transform: translateY(-8px);
      color: #047857;
      text-decoration: none;
    }

    /* History — biru */
    .btn-history .icon-box { 
      background: #eff6ff; 
    }
    .btn-history { color: #2563eb; }
    .btn-history:hover {
      background: rgba(239,246,255,0.95);
      border-color: #93c5fd;
      box-shadow: 0 16px 48px rgba(59,130,246,0.18), 0 2px 8px rgba(0,0,0,0.06);
      transform: translateY(-8px);
      color: #1e40af;
      text-decoration: none;
    }

    .card-btn:active {
      transform: translateY(-2px) scale(0.97);
    }
      /* ── Info link wahana ── */
  .lp-info-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 17px;
    font-weight: 500;
    color: #6b7280;
    background: rgba(255,255,255,0.7);
    border: 1px solid rgba(255,255,255,0.9);
    padding: 8px 18px;
    border-radius: 999px;
    text-decoration: none;
    backdrop-filter: blur(8px);
    transition: all 0.2s ease;
    margin-top: 20px;
  }
  .lp-info-link:hover {
    background: rgba(255,255,255,0.95);
    color: #4338ca;
    border-color: #a5b4fc;
  }
  .lp-info-link svg { flex-shrink: 0; }


    /* ===== RESPONSIVE ===== */
    @media (max-width: 680px) {
      body { padding: 40px 20px 80px; }
      .content-wrapper { gap: 32px; }
      .btn-row { flex-direction: column; align-items: center; gap: 20px; }
      .card-btn { width: 100%; max-width: 300px; min-height: 220px; }
      .title { font-size: 32px; margin-bottom: 12px; }
      .btn-row { gap: 20px; }
    }
  </style>
</head>
<body>

  <!-- TOP BAR: Login / Logout -->
  <div class="topbar">
    <?php if ($isLoggedIn): ?>
      <?php if ($userName): ?>
        <span class="user-info">👤 <?= htmlspecialchars($userName) ?></span>
      <?php endif; ?>
      <a href="logout.php" class="btn-auth btn-logout">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
          <polyline points="16 17 21 12 16 7"/>
          <line x1="21" y1="12" x2="9" y2="12"/>
        </svg>
        Logout
      </a>
    <?php else: ?>
      <a href="login.php" class="btn-auth btn-login">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
          <polyline points="10 17 15 12 10 7"/>
          <line x1="15" y1="12" x2="3" y2="12"/>
        </svg>
        Login
      </a>
    <?php endif; ?>
  </div>

  <div class="content-wrapper">
    <div class="header">
      <p class="brand">Sumsel Ticketing</p>
      <h1 class="title">Selamat Datang<?= $isLoggedIn && $userName ? ', ' . htmlspecialchars(explode(' ', $userName)[0]) : '' ?></h1>
      <p class="subtitle">Pilih layanan di bawah untuk melanjutkan</p>
    </div>
      <a href="https://wahanatravel.id/" target="_blank" rel="noopener noreferrer" class="lp-info-link">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
        </svg>
        Lihat jadwal penerbangan tersedia
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
        </svg>
      </a>
    </div>
    <div class="btn-row">

      <a href="form-tiket.php" class="card-btn btn-pengajuan">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="12" y1="18" x2="12" y2="12"/>
            <line x1="9" y1="15" x2="15" y2="15"/>
          </svg>
        </div>
        Pengajuan Pemesanan Tiket
      </a>

      <a href="cek-status.php" class="card-btn btn-cekstatus">
        <div class="icon-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"/>
            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
        </div>
        Cek Status Pemesanan / Pengajuan Perubahan
      </a>

      <?php if ($isLoggedIn): ?>
        <a href="pengajuan_ticket_hdr_list.php" class="card-btn btn-history">
          <div class="icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 12a9 9 0 1 0 3-6.7"/>
              <polyline points="3 3 3 9 9 9"/>
              <path d="M12 7v5l3 3"/>
            </svg>
          </div>
          History Pemesanan & Pengajuan
        </a>
      <?php endif; ?>

    </div>
  </div>

</body>
</html>