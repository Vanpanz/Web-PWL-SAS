<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Komunitas</title>
    </head>
    <link rel="stylesheet" href="keluhkesah.css">
<body>

<body>
<header>
   <?php require_once "header.php"; ?>
 </header>

    <div class="hero">
        <h2>Halo, Selamat Datang Di Komunitas</h2>
        <h3>Keluh Kesah Pekerja!</h3>
    </div>

    <div class="header-komunitas">
        <h1>Keluh Kesah Pekerja</h1>
        <p>7.000 Anggota Sedang Aktif</p>
    </div>

    <div class="page-container">
        
        <aside class="sidebar left-sidebar">
            <h3>Anggota Teraktif</h3>
            <div class="member-list">
                <div class="member-item">
                    <div class="profile-icon"></div>
                    <span>User ABC</span>
                </div>
                <div class="member-item">
                    <div class="profile-icon"></div>
                    <span>User BAC</span>
                </div>
                <div class="member-item">
                    <div class="profile-icon"></div>
                    <span>User CBC</span>
                </div>
                <div class="member-item">
                    <div class="profile-icon"></div>
                    <span>User DCB</span>
                </div>
            </div>
            
            <a href="#" class="back-link">
                <span class="icon">&#x2190;</span> Kembali
            </a>
        </aside>

        <main class="main-content">
            
            <div class="post-form">
                <input type="text" class="input-judul" placeholder="Buat Judul Postingan...">
                <div class="form-bottom">
                    <textarea placeholder="Ceritakanlah Pengalaman Mu Di sini....."></textarea>
                    <button class="btn-kirim">Kirim</button>
                </div>
            </div>

            <h2>Terbaru</h2>
            
            <div class="post">
                <div class="post-meta">
                    <div class="profile-icon small"></div>
                    <div class="meta-text">
                        <span class="username">User ABC</span>
                        <span class="topic">Lingkungan Toxic?</span>
                    </div>
                </div>
                <p class="post-body-text">Baru seminggu kerja, tapi udah merasa gak cocok sama lingkungan kerjanya, kira kira kenapa ya guys? Apa saya mending resign aja ya?</p>
                <div class="post-actions">
                    <span class="action-item blue-icon">💙 44</span>
                    <span class="action-item">💬 18</span>
                </div>
            </div>

            <div class="post">
                <div class="post-meta">
                    <div class="profile-icon small"></div>
                    <div class="meta-text">
                        <span class="username">User CBA</span>
                        <span class="topic">Awalnya Susah tapi itu Letak Asiknya</span>
                    </div>
                </div>
                <p class="post-body-text">Serunya kerja itu pas ketemu atasan, emang si galak, tapi lama-lama terbiasa kok. Saya yang awalnya suka malas-malasan karena beliau jadi makin teratur sekarang.</p>
                <div class="post-actions">
                    <span class="action-item blue-icon">💙 104</span>
                    <span class="action-item">💬 25</span>
                </div>
            </div>
        </main>

        <aside class="sidebar right-sidebar">
            <h3>Trending Topic</h3>
            <ul class="topic-list">
                <li><a href="#">Lingkungan Toxic?</a></li>
                <li><a href="#">Awalnya Susah tapi itu Letak Asiknya</a></li>
                <li><a href="#">Tugas Nambah Gaji Ngurang</a></li>
                <li><a href="#">Atasan Mood Swing</a></li>
                <li><a href="#">Teman Sekantor Suka Ngatain</a></li>
                <li><a href="#">Bangun Lingkungan Sehat</a></li>
            </ul>
        </aside>

    </div>

</body>
</html>