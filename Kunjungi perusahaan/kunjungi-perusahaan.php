<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil Perusahaan</title>
  <link rel="stylesheet" href="kunjungi-perusahaan.css">
</head>
<body>
  <<header>
    <?php require_once "../header/header.php"; ?>
</header>


  <main class="profile-main">
    <div class="back-row">
      <a class="back-link" href="../index.php"><span class="back-circle">←</span> <span class="back-text">Kembali</span></a>
    </div>

    <div class="profile-grid">
      <aside class="left-col">
        <img class="company-img" src="../IMG FOLDER/ASRI.jpg" alt="ASRI">
        <h2 class="company-name">ASRI</h2>
        <div class="company-meta">Industri : Real Estate & Properti</div>
        <div class="company-size">Ukuran Perusahaan : 1.001 - 5.000</div>
        <div class="company-location">Jl. Pantai Indah Kapuk Boulevard,<br>Kamal Muara, Penjaringan, Jakarta Utara</div>

        <div class="side-actions">
          <button class="btn-masuk">Kunjungi Perusahaan</button>
          <button class="btn-perusahaan">Beri Ulasan Mu</button>
        </div>
      </aside>

      <section class="right-col">
        <div class="card about">
          <h3>Tentang Perusahaan</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>

        <div class="card benefits">
          <h3>Benefit</h3>
          <div class="benefit-list">
            <span class="pill">Medical Checkup</span>
            <span class="pill">Free Parking</span>
            <span class="pill">Jamsostek</span>
            <span class="pill">Dental</span>
          </div>
        </div>

        <div class="card why">
          <h3>Mengapa Bergabung Kepada Kami?</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
      </section>
    </div>

    <!-- Dokumentasi (single block only) -->
    <section class="DokumentasiPerusahaan">
      <div class="doc-inner">
        <h3>Dokumentasi Perusahaan</h3>
        <div class="gallery">
          <img src="../IMG FOLDER/asri1.jpg" alt="Gallery Image 1" data-index="0">
          <img src="../IMG FOLDER/asri2.jpg" alt="Gallery Image 2" data-index="1">
          <img src="../IMG FOLDER/asri3.jpg" alt="Gallery Image 3" data-index="2">
          <img src="../IMG FOLDER/asri4.jpg" alt="Gallery Image 4" data-index="3">
        </div>
      </div>
    </section>

    <!-- Penilaian & Ulasan -->
    <section class="reviews-section">
      <div class="reviews-container">

        <div class="rating-summary">
          <div class="rating-overall">
            <div class="score">4.8</div>
            <div class="stars">★★★★☆</div>
            <div class="total">25 Total Penilaian</div>
          </div>

          <div class="rating-breakdown">
            <div class="break-row"><span class="label">5</span><span class="bar"><span class="bar-fill f5"></span></span><span class="count">15</span></div>
            <div class="break-row"><span class="label">4</span><span class="bar"><span class="bar-fill f4"></span></span><span class="count">5</span></div>
            <div class="break-row"><span class="label">3</span><span class="bar"><span class="bar-fill f3"></span></span><span class="count">4</span></div>
            <div class="break-row"><span class="label">2</span><span class="bar"><span class="bar-fill f2"></span></span><span class="count">0</span></div>
            <div class="break-row"><span class="label">1</span><span class="bar"><span class="bar-fill f1"></span></span><span class="count">1</span></div>
          </div>

          <div class="rating-recommend" data-percent="83">
            <div class="circle-wrap">
              <svg class="rating-circle" viewBox="0 0 36 36" aria-hidden="true">
                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                <path class="circle" stroke-dasharray="0,100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
              </svg>
              <div class="percent">0%</div>
            </div>
            <div class="rec-text"><strong>18 Pegawai</strong><br>merekemendasikan<br>Perusahaan ini</div>
          </div>
        </div>

        <div class="category-cards">
          <div class="cat"><div class="cat-title">Work/Life Balance</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
          <div class="cat"><div class="cat-title">Benefit & Perks</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
          <div class="cat"><div class="cat-title">Management</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
          <div class="cat"><div class="cat-title">Career Development</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
          <div class="cat highlighted"><div class="cat-title">Working Environment</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
          <div class="cat"><div class="cat-title">Equality of Works</div><div class="cat-stars">★★★★☆</div><div class="cat-score">4.5</div></div>
        </div>

        <div class="reviews-header">
          <h3>Ulasan</h3>
          <p class="subtitle">Menampilkan 20 ulasan yang telah diberikan</p>
        </div>

        <div class="review-card">
          <aside class="review-meta">
            <div class="meta-score">★★★★☆ <span class="meta-num">4.0</span></div>
            <div class="meta-role">Property Sales</div>
            <div class="meta-date">Juli 2025</div>
            <div class="meta-location">South Jakarta, Jakarta</div>
            <div class="meta-time">Working Time: Less than 1 Year</div>
          </aside>

          <div class="review-body">
            <div class="review-title">Review</div>
            <p class="review-text">Amazing and inspiring working environment but lack of work/life balance so sometimes it gets so tiring</p>

            <div class="pros-cons">
              <div class="pros"><div class="pc-title">Pros</div><p>"Lorem ipsum..."</p></div>
              <div class="cons"><div class="pc-title">Cons</div><p>"Ut enim ad minim..."</p></div>
            </div>

           <div class="review-actions">
             <button class="help-btn" data-helped="false" title="Beri bantuan">
             <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 21l-1-1c-4-4-7-7-7-10a5 5 0 0 1 5-5h1" stroke="#2563eb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span class="help-text">Apakah ulasan ini membantu?</span>
             </button>

            <button class="report-btn" title="Laporkan ulasan">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 2l12 6-12 6V2z M6 8v12a2 2 0 0 0 2 2h8" stroke="#6b7280" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>Laporkan</span>
            </button>
          </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <div id="lightbox" class="lightbox" aria-hidden="true">
    <button class="lb-close" type="button" aria-label="Tutup">✕</button>
    <img class="lb-img" src="" alt="">
    <button class="lb-prev" type="button" aria-label="Sebelumnya">‹</button>
    <button class="lb-next" type="button" aria-label="Selanjutnya">›</button>
  </div>

  <script src="kunjungi-perusahaan.js"></script>
</body>
</html>