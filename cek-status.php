<?php
require_once("include/dbcommon.php");

// Check login - redirect jika belum login
if (!isset($_SESSION['UserID']) || $_SESSION['UserID'] == '') {
    header('Location: login.php');
    exit;
}

$isLoggedIn = false;
$userName   = '';
$userData   = [];

if (isset($_SESSION['UserID']) && $_SESSION['UserID'] != '') {
    $isLoggedIn = true;
    $userName   = isset($_SESSION['UserName']) ? $_SESSION['UserName'] : '';
    $userData   = isset($_SESSION['UserData']) ? $_SESSION['UserData']  : [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cek Status Tiket — Sumsel Ticketing</title>
  <link rel="icon" type="image/png" href="images/logo_sbu/SUMSEL%20ARMY.png">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --indigo:    #4338ca;
      --indigo-lt: #eef2ff;
      --indigo-md: #818cf8;
      --indigo-dk: #312e81;
      --green:     #059669;
      --green-lt:  #ecfdf5;
      --amber:     #d97706;
      --amber-lt:  #fffbeb;
      --red:       #dc2626;
      --red-lt:    #fef2f2;
      --gray-50:   #f9fafb;
      --gray-100:  #f3f4f6;
      --gray-200:  #e5e7eb;
      --gray-400:  #9ca3af;
      --gray-600:  #4b5563;
      --gray-800:  #1f2937;
      --radius:    12px;
      --shadow:    0 4px 24px rgba(99,102,241,.10), 0 1px 4px rgba(0,0,0,.04);
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #eef2ff;
      background-image:
        radial-gradient(ellipse 70% 50% at 10% 10%, rgba(165,180,252,.4) 0%, transparent 55%),
        radial-gradient(ellipse 60% 50% at 90% 90%, rgba(167,243,208,.3) 0%, transparent 55%);
      min-height: 100vh;
      color: var(--gray-800);
    }

    /* ── TOPBAR ── */
    .topbar { position: fixed; top: 0; right: 0; padding: 14px 24px; display: flex; align-items: center; gap: 10px; z-index: 100; }
    .user-info { font-size: 13px; font-weight: 500; color: #6366f1; }
    .btn-auth { display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 50px; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 12px; font-weight: 600; text-decoration: none; cursor: pointer; border: none; transition: all 0.2s ease; }
    .btn-login { background: #6366f1; color: #fff; box-shadow: 0 4px 16px rgba(99,102,241,0.3); }
    .btn-login:hover { background: #4f46e5; color: #fff; text-decoration: none; }
    .btn-logout { background: rgba(255,255,255,0.8); color: #ef4444; border: 1.5px solid rgba(239,68,68,0.2); backdrop-filter: blur(8px); }
    .btn-logout:hover { background: #fef2f2; border-color: #ef4444; color: #dc2626; text-decoration: none; }


    /* ── PAGE ── */
    .page-body { max-width: 760px; margin: 0 auto; padding: 40px 20px 80px; }

    .back-link {
      display: inline-flex; align-items: center; gap: 6px;
      font-size: 13px; font-weight: 600; color: var(--indigo);
      text-decoration: none; margin-bottom: 24px;
    }
    .back-link:hover { color: var(--indigo-dk); }

    .page-header { text-align: center; margin-bottom: 36px; }
    .page-header .brand-label {
      font-size: 12px; font-weight: 600; letter-spacing: .3em;
      color: var(--indigo-md); text-transform: uppercase; margin-bottom: 10px;
    }
    .page-header h1 { font-size: 32px; font-weight: 700; color: var(--indigo-dk); letter-spacing: -.02em; margin-bottom: 6px; }
    .page-header p  { font-size: 15px; color: var(--gray-400); }

    /* ── LOGIN PROMPT ── */
    .login-prompt {
      background: rgba(255,255,255,.82); backdrop-filter: blur(16px);
      border: 1.5px solid rgba(255,255,255,.9);
      border-radius: 24px; box-shadow: var(--shadow);
      padding: 48px 32px; text-align: center;
    }
    .login-prompt-icon { font-size: 48px; margin-bottom: 16px; }
    .login-prompt h2   { font-size: 20px; font-weight: 700; color: var(--indigo-dk); margin-bottom: 8px; }
    .login-prompt p    { font-size: 14px; color: var(--gray-400); margin-bottom: 24px; }
    .btn-login-big {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 13px 32px; background: var(--indigo); color: #fff;
      border: none; border-radius: var(--radius);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 15px; font-weight: 700; text-decoration: none;
      box-shadow: 0 4px 16px rgba(67,56,202,.3);
      transition: all .22s cubic-bezier(.34,1.56,.64,1);
    }
    .btn-login-big:hover { background: var(--indigo-dk); transform: translateY(-2px); }

    /* ── SEARCH ── */
    .search-card {
      background: rgba(255,255,255,.82); backdrop-filter: blur(16px);
      border: 1.5px solid rgba(255,255,255,.9);
      border-radius: 24px; box-shadow: var(--shadow);
      padding: 32px; margin-bottom: 24px;
    }
    .search-wrap { display: flex; gap: 12px; }
    .search-input {
      flex: 1; padding: 13px 18px;
      border: 1.5px solid var(--gray-200); border-radius: var(--radius);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 15px; color: var(--gray-800); background: #fff;
      outline: none; transition: border-color .2s, box-shadow .2s;
      text-transform: uppercase; letter-spacing: .04em;
    }
    .search-input::placeholder { text-transform: none; letter-spacing: 0; }
    .search-input:focus { border-color: var(--indigo-md); box-shadow: 0 0 0 3px rgba(129,140,248,.15); }
    .btn-cek {
      padding: 13px 28px; background: var(--green);
      border: none; border-radius: var(--radius);
      color: #fff; font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 15px; font-weight: 700; cursor: pointer;
      display: flex; align-items: center; gap: 8px; white-space: nowrap;
      box-shadow: 0 4px 16px rgba(5,150,105,.25);
      transition: all .22s cubic-bezier(.34,1.56,.64,1);
    }
    .btn-cek:hover { background: #047857; transform: translateY(-2px); }
    .btn-cek:disabled { background: var(--gray-400); cursor: not-allowed; transform: none; box-shadow: none; }

    /* ── BADGE ── */
    .badge { display: inline-flex; align-items: center; gap: 6px; padding: 5px 14px; border-radius: 20px; font-size: 13px; font-weight: 700; }
    .badge-dot { width: 7px; height: 7px; border-radius: 50%; }
    .badge-pending  { background: var(--amber-lt); color: var(--amber); }   .badge-pending  .badge-dot { background: var(--amber); }
    .badge-approved { background: var(--green-lt); color: var(--green); }   .badge-approved .badge-dot { background: var(--green); }
    .badge-rejected { background: var(--red-lt);   color: var(--red);   }   .badge-rejected .badge-dot { background: var(--red); }
    .badge-default  { background: var(--gray-100); color: var(--gray-600); } .badge-default  .badge-dot { background: var(--gray-400); }
    .badge-hold { background: #fff7ed; color: #ea580c; } .badge-hold .badge-dot { background: #ea580c; }


    /* ── RESULT ── */
    .result-card {
      background: rgba(255,255,255,.82); backdrop-filter: blur(16px);
      border: 1.5px solid rgba(255,255,255,.9);
      border-radius: 24px; box-shadow: var(--shadow);
      padding: 32px; margin-bottom: 20px;
      display: none; animation: fadeup .35s ease;
    }
    .result-card.show { display: block; }
    @keyframes fadeup { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }

    .result-top {
      display: flex; align-items: flex-start; justify-content: space-between;
      flex-wrap: wrap; gap: 12px;
      margin-bottom: 24px; padding-bottom: 20px;
      border-bottom: 1.5px solid var(--gray-200);
    }
    .req-id-label { font-size: 12px; color: var(--gray-400); font-weight: 600; margin-bottom: 4px; }
    .req-id-val   { font-size: 22px; font-weight: 700; color: var(--indigo); letter-spacing: .03em; }
    .sec-label    { font-size: 11px; font-weight: 700; color: var(--gray-400); text-transform: uppercase; letter-spacing: .1em; margin-bottom: 14px; }

    .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px 24px; margin-bottom: 24px; }
    .info-item .lbl { font-size: 12px; color: var(--gray-400); font-weight: 500; margin-bottom: 2px; }
    .info-item .val { font-size: 14px; color: var(--gray-800); font-weight: 600; }

    .ket-box { background: var(--amber-lt); border: 1.5px solid #fde68a; border-radius: var(--radius); padding: 14px 16px; margin-bottom: 24px; }
    .ket-box .ket-label { font-size: 12px; font-weight: 700; color: var(--amber); margin-bottom: 4px; }
    .ket-box .ket-val   { font-size: 14px; color: var(--gray-800); }

    .penumpang-item { background: var(--gray-50); border: 1.5px solid var(--gray-200); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 12px; }
    .penumpang-item:last-child { margin-bottom: 0; }
    .penumpang-name { font-size: 15px; font-weight: 700; color: var(--indigo-dk); margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
    .flight-row { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; font-size: 13px; color: var(--gray-600); margin-bottom: 8px; }
    .flight-arrow { color: var(--gray-400); font-size: 16px; }
    .flight-badge    { font-size: 11px; font-weight: 700; padding: 3px 10px; border-radius: 12px; background: var(--indigo-lt); color: var(--indigo); }
    .flight-badge-rt { background: var(--green-lt); color: var(--green); }
    .flight-divider  { border-top: 1.5px dashed var(--gray-200); margin: 10px 0; }

    /* ── ERROR ── */
    .error-card {
      background: rgba(255,255,255,.82); backdrop-filter: blur(16px);
      border: 1.5px solid #fecaca; border-radius: 24px;
      padding: 32px; text-align: center; display: none;
    }
    .error-card.show { display: block; animation: fadeup .3s ease; }
    .error-icon  { font-size: 40px; margin-bottom: 12px; }
    .error-title { font-size: 18px; font-weight: 700; color: var(--red); margin-bottom: 6px; }
    .error-msg   { font-size: 14px; color: var(--gray-400); }

    /* ── ACTION BUTTONS ── */
    .action-buttons {
      display: flex; gap: 12px; flex-wrap: wrap;
      margin-top: 28px; padding-top: 24px;
      border-top: 1.5px solid var(--gray-200);
    }
    .btn-action {
      flex: 1; min-width: 160px;
      padding: 12px 18px; border: 1.5px solid;
      border-radius: var(--radius);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 14px; font-weight: 700;
      cursor: pointer; display: flex; align-items: center;
      justify-content: center; gap: 8px; white-space: nowrap;
      transition: all .22s cubic-bezier(.34,1.56,.64,1);
      text-decoration: none;
    }
    .btn-reschedule {
      background: #fef3c7; border-color: #fcd34d;
      color: #b45309;
    }
    .btn-reschedule:hover {
      background: #fde68a; border-color: #fbbf24;
      transform: translateY(-2px);
    }
    .btn-refund {
      background: #fee2e2; border-color: #fca5a5;
      color: #be123c;
    }
    .btn-refund:hover {
      background: #fecaca; border-color: #f87171;
      transform: translateY(-2px);
    }
    .btn-print {
      background: var(--indigo-lt); border-color: var(--indigo-md);
      color: var(--indigo);
    }
    .btn-print:hover {
      background: #dbeafe; border-color: var(--indigo);
      transform: translateY(-2px);
    }
    .btn-download {
      background: var(--green-lt); border-color: #6ee7b7;
      color: var(--green);
    }
    .btn-download:hover {
      background: #d1fae5; border-color: var(--green);
      transform: translateY(-2px);
    }

    @media (max-width: 560px) {
      .search-wrap { flex-direction: column; }
      .info-grid   { grid-template-columns: 1fr; }
      .result-top  { flex-direction: column; }
      .action-buttons { flex-direction: column; }
      .btn-action { min-width: 100%; }
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

  <!-- PAGE -->
  <div class="page-body">

    <a href="landing.php" class="back-link">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="15 18 9 12 15 6"/></svg>
      Kembali ke Beranda
    </a>

    <div class="page-header">
      <p class="brand-label">Sumsel Ticketing</p>
      <h1>Cek Status Pengajuan</h1>
      <p>Masukkan nomor tiket yang Anda terima saat pengajuan</p>
    </div>

    <div>

      <div class="search-card">
        <div class="search-wrap">
          <input type="text" class="search-input" id="inputReqId"
            placeholder="Contoh: TKT-20240501-0001"
            maxlength="25" autocomplete="off">
          <button class="btn-cek" id="btnCek" onclick="cekStatus()">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Cek Status
          </button>
        </div>
      </div>

      <div class="result-card" id="resultCard">
        <div class="result-top">
          <div>
            <div class="req-id-label">Nomor Tiket</div>
            <div class="req-id-val" id="resReqId">—</div>
          </div>
          <div id="resBadge"></div>
        </div>
        <div class="sec-label">Data Pemesan</div>
        <div class="info-grid" id="resPemesan"></div>
        <div class="sec-label">Keterangan Pengajuan</div>
        <div class="info-grid" id="resKeterangan" style="margin-bottom:24px"></div>
        <div class="ket-box" id="resKetAdmin" style="display:none">
          <div class="ket-label">Catatan dari Admin</div>
          <div class="ket-val" id="resKetAdminVal"></div>
        </div>
        <div class="sec-label">Data Penumpang</div>
        <div id="resPenumpang"></div>
        <div class="action-buttons" id="actionButtons">
          <a href="javascript:void(0)" class="btn-action btn-reschedule" id="btnReschedule">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Ajukan Reschedule
          </a>
          <a href="javascript:void(0)" class="btn-action btn-refund" id="btnRefund">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            Ajukan Refund
          </a>
          <a href="javascript:void(0)" class="btn-action btn-print" id="btnPrint" onclick="printResult()">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Cetak
          </a>
          <a href="javascript:void(0)" class="btn-action btn-download" id="btnDownload">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Tiket
          </a>
        </div>
      </div>

      <div class="error-card" id="errorCard">
        <div class="error-icon">🚫</div>
        <div class="error-title">Tiket Tidak Ditemukan</div>
        <div class="error-msg" id="errorMsg">Pastikan nomor tiket yang Anda masukkan sudah benar.</div>
      </div>

    </div>

  </div>


  <script>
  const loginUserNik = "<?= $_SESSION['UserID'] ?? '' ?>";
  </script>

  <script>
    let currentReqId = null;

    document.getElementById('inputReqId').addEventListener('keydown', e => {
      if (e.key === 'Enter') cekStatus();
    });

    // Auto-cek jika ada ?req_id= di URL (dari link email)
    const urlParams  = new URLSearchParams(window.location.search);
    const reqFromUrl = urlParams.get('req_id');
    if (reqFromUrl) {
      document.getElementById('inputReqId').value = reqFromUrl.toUpperCase();
      cekStatus();
    }

    async function cekStatus() {
      const req_id = document.getElementById('inputReqId').value.trim().toUpperCase();
      if (!req_id) { alert('Masukkan nomor tiket terlebih dahulu.'); return; }

      const newUrl = window.location.pathname + '?req_id=' + encodeURIComponent(req_id);
      history.pushState({ req_id }, '', newUrl);

      const btn = document.getElementById('btnCek');
      btn.disabled = true;
      btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg> Mencari...`;

      document.getElementById('resultCard').classList.remove('show');
      document.getElementById('errorCard').classList.remove('show');

      try {
        const res  = await fetch(`cek-tiket.php?req_id=${encodeURIComponent(req_id)}`);
        const data = await res.json();
        if (data.success) {
          currentReqId = req_id;
          renderResult(data);
          setupActionButtons(data.header, data.header.status_code, data.is_superadmin);
        } else {
          document.getElementById('errorMsg').textContent = data.message || 'Nomor tiket tidak ditemukan.';
          document.getElementById('errorCard').classList.add('show');
        }
      } catch {
        document.getElementById('errorMsg').textContent = 'Gagal terhubung ke server. Coba beberapa saat lagi.';
        document.getElementById('errorCard').classList.add('show');
      } finally {
        btn.disabled = false;
        btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg> Cek Status`;
      }
    }

    function setupActionButtons(header, currentStatus, isSuperAdmin) {
        const btnReschedule = document.getElementById('btnReschedule');
        const btnRefund     = document.getElementById('btnRefund');
        const btnPrint      = document.getElementById('btnPrint'); // ✅ tambah ini

        const pemilikNik       = (header.nik_pemesan || '').toString().trim();
        const userNik          = (loginUserNik || '').toString().trim();
        const isOwner          = (pemilikNik === userNik);
        const isUserSuperAdmin = isSuperAdmin === true;

        const isStatusIssued   = (currentStatus == 5);
        const isStatusOnProgress = (currentStatus == 1); // ✅ status 1 = On Progress

        const canAct   = (isOwner || isUserSuperAdmin) && isStatusIssued;
        const canCetak = isStatusOnProgress; // ✅ cetak hanya status 1, siapapun boleh? atau perlu cek owner juga?

        // Reschedule & Refund
        btnReschedule.style.pointerEvents = canAct ? 'auto' : 'none';
        btnRefund.style.pointerEvents     = canAct ? 'auto' : 'none';
        btnReschedule.style.opacity       = canAct ? '1' : '0.5';
        btnRefund.style.opacity           = canAct ? '1' : '0.5';

        // ✅ Cetak
        btnPrint.style.pointerEvents = canCetak ? 'auto' : 'none';
        btnPrint.style.opacity       = canCetak ? '1' : '0.5';
        btnPrint.title = canCetak ? '' : 'Cetak hanya bisa dilakukan untuk tiket dengan status On Progress';

        // Tooltip reschedule/refund
        let tooltip = '';
        if (!isStatusIssued) {
            tooltip = 'Reschedule/Refund hanya bisa dilakukan untuk tiket yang sudah Issued (status 5)';
        } else if (!isOwner && !isUserSuperAdmin) {
            tooltip = 'Hanya pemilik tiket atau Superadmin yang bisa reschedule/refund';
        }
        btnReschedule.title = tooltip;
        btnRefund.title     = tooltip;

        btnReschedule.onclick = () => {
            if (!canAct) return;
            window.location.href = `reschedule.php?req_id=${encodeURIComponent(currentReqId)}`;
        };

        btnRefund.onclick = async () => {
            if (!canAct) return;
            if (!confirm('Yakin ingin mengajukan refund untuk tiket ini? Tindakan ini tidak dapat dibatalkan.')) return;

            const btn = document.getElementById('btnRefund');
            btn.style.opacity = '0.6';
            btn.style.pointerEvents = 'none';
            btn.innerHTML = '⏳ Memproses...';

            try {
                const res  = await fetch('api-handler.php?action=submit_refund', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ old_req_id: currentReqId })
                });
                const data = await res.json();
                if (data.success) {
                    alert(`Refund berhasil diajukan. Nomor refund: ${data.req_id}`);
                    cekStatus(); // refresh tampilan status
                } else {
                    alert('Gagal: ' + (data.message || 'Terjadi kesalahan.'));
                    btn.style.opacity = '1';
                    btn.style.pointerEvents = 'auto';
                    btn.innerHTML = `<svg .../>Ajukan Refund`;
                }
            } catch {
                alert('Gagal terhubung ke server.');
                btn.style.opacity = '1';
                btn.style.pointerEvents = 'auto';
            }
        };

        // ✅ onclick cetak
        btnPrint.onclick = () => {
            if (!canCetak) return;
            window.location.href = `print_tiket.php?req_id=${encodeURIComponent(currentReqId)}`;
        };
        const hasAttachment  = header.attachment && header.attachment.trim() !== '';
        const canDownload    = isStatusIssued && hasAttachment;

        btnDownload.style.pointerEvents = canDownload ? 'auto' : 'none';
        btnDownload.style.opacity       = canDownload ? '1' : '0.5';
        btnDownload.title = !isStatusIssued
          ? 'Download hanya tersedia untuk tiket berstatus Issued'
          : !hasAttachment
          ? 'File attachment belum tersedia'
          : '';

        btnDownload.onclick = () => {
          if (!canDownload) return;
          window.open(`download_attachment.php?req_id=${encodeURIComponent(currentReqId)}`, '_blank');
        };
    }

    function printResult() {
      if (!currentReqId) return;
      window.open(`print_tiket.php?req_id=${encodeURIComponent(currentReqId)}`, '_blank');
    }

    function renderResult(data) {
      const h = data.header;
      const p = data.penumpang || [];

      document.getElementById('resReqId').textContent = h.req_id;
      document.getElementById('resBadge').innerHTML   = makeBadge(h.status);

      document.getElementById('resPemesan').innerHTML = `
        ${infoItem('Nama Pemesan',     h.nama_pemesan)}
        ${infoItem('Posisi / Jabatan', h.posisi_pemesan  || '—')}
        ${infoItem('SBU',              h.sbu_pemesan     || '—')}
        ${infoItem('No. Telepon',      h.no_telp_pemesan || '—')}
        ${infoItem('Email',            h.email_pemesan   || '—')}
        ${infoItem('Atasan Langsung',  h.atasan_langsung)}
      `;

      document.getElementById('resKeterangan').innerHTML = `
        ${infoItem('Jenis Pengajuan',   h.jenis_pengajuan)}
        ${infoItem('Beban SBU',         h.beban_sbu || '—')}
        ${infoItem('Tanggal Pengajuan', formatDate(h.created_at))}
        ${infoItem('Alasan',            h.alasan    || '—', true)}
      `;

      const ketBox = document.getElementById('resKetAdmin');
      if (h.ket_admin) {
        document.getElementById('resKetAdminVal').textContent = h.ket_admin;
        ketBox.style.display = 'block';
      } else {
        ketBox.style.display = 'none';
      }

      let html = '';
      p.forEach(pt => {
        const isRT = pt.tipe_perjalanan === 'Round Trip';
        html += `
          <div class="penumpang-item">
            <div class="penumpang-name">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              ${pt.nama_penumpang}
              <span style="font-size:12px;font-weight:500;color:var(--gray-400)">${pt.posisi_penumpang || ''}</span>
              ${pt.gender ? `<span style="font-size:11px;color:var(--gray-400)">(${pt.gender})</span>` : ''}
            </div>
            <div style="margin-bottom:8px"><span class="flight-badge">✈️ Pergi</span></div>
            <div class="flight-row">
              <strong>${pt.bandara_asal}</strong>
              <span class="flight-arrow">→</span>
              <strong>${pt.bandara_tujuan}</strong>
              <span>·</span><span>${pt.maskapai}</span>
              <span>·</span><span>${formatDate(pt.tanggal_penerbangan)}</span>
              <span>${pt.waktu_berangkat?.slice(0,5) || ''}${pt.waktu_tiba ? ' – ' + pt.waktu_tiba.slice(0,5) : ''}</span>
            </div>
            ${pt.catatan_khusus ? `<div style="font-size:12px;color:var(--gray-400);margin-top:4px">Catatan: ${pt.catatan_khusus}</div>` : ''}
            ${isRT && pt.bandara_asal_p ? `
              <div class="flight-divider"></div>
              <div style="margin-bottom:8px"><span class="flight-badge flight-badge-rt">↩ Pulang</span></div>
              <div class="flight-row">
                <strong>${pt.bandara_asal_p}</strong>
                <span class="flight-arrow">→</span>
                <strong>${pt.bandara_tujuan_p}</strong>
                <span>·</span><span>${pt.maskapai_p || '—'}</span>
                <span>·</span><span>${formatDate(pt.tanggal_penerbangan_p)}</span>
                <span>${pt.waktu_berangkat_p?.slice(0,5) || ''}${pt.waktu_tiba_p ? ' – ' + pt.waktu_tiba_p.slice(0,5) : ''}</span>
              </div>
              ${pt.catatan_khusus_p ? `<div style="font-size:12px;color:var(--gray-400);margin-top:4px">Catatan pulang: ${pt.catatan_khusus_p}</div>` : ''}
            ` : ''}
          </div>`;
      });
      document.getElementById('resPenumpang').innerHTML = html;
      document.getElementById('resultCard').classList.add('show');
    }

    function makeBadge(status) {
      const s = (status || '').toLowerCase();
      let cls = 'badge-default', label = status || 'Tidak Diketahui';

      if (s.includes('on progress')) {
        cls = 'badge-pending';
        label = 'On Progress';
      } 
      else if (s.includes('approved')) {
        cls = 'badge-approved';
        label = 'Approved';
      } 
      else if (s.includes('hold')) {
        cls = 'badge-hold';
        label = 'Hold';
      } 
      else if (s.includes('rejected')) {
        cls = 'badge-rejected';
        label = 'Rejected';
      } 
      else if (s.includes('issued')) {
        cls = 'badge-approved';
        label = 'Issued';
      } 
      else if (s.includes('rescheduled')) {
        cls = 'badge-pending';
        label = 'Rescheduled';
      } 
      else if (s.includes('refunded')) {
        cls = 'badge-rejected';
        label = 'Refunded';
      }

      return `<span class="badge ${cls}"><span class="badge-dot"></span>${label}</span>`;
    }

    function infoItem(label, val, full) {
      return `<div class="info-item${full ? ' col-span-2' : ''}">
        <div class="lbl">${label}</div>
        <div class="val">${val || '—'}</div>
      </div>`;
    }

    function formatDate(str) {
      if (!str) return '—';
      const d = new Date(str);
      if (isNaN(d)) return str;
      return d.toLocaleDateString('id-ID', { day:'2-digit', month:'long', year:'numeric' });
    }
  </script>

</body>
</html>