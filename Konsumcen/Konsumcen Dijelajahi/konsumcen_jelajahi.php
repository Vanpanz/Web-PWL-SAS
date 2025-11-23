<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas & Support Center - LamarKuy!</title>
    <link rel="stylesheet" href="konsumcen_jelajahi.css">
</head>
<body>
   

<header>
  <?php include "../../header/header.php"; ?>
</header>

<div class="hero">
  <h2>Komunitas dan Support Center LamarKuy!</h2>
  <h3>Jelajahi dan Ngobrol bareng Sobat Karirmu!</h3>
</div>




        <!-- Content Area -->
         <div style="align-items: flex-start; display: flex; margin-left: -920px;">
            <?php include "../../bagian.php"; ?>
            <section class="content">
            <div class="Jelajahi-header">
            <h2>Jelajahi Komunitas dan Bergabunglah!</h2>
            </div>
            <div class="community-card">
                <div>
                    <h3>Keluh Kesah Pekerja</h3>
                    <p>35.000 Pengikut</p>
                    <small>Sharing pengalamanmu selama bekerja agar menjadi pembelajaran bersama!</small>
                </div>
                <button class="btn-join" onclick="goToPage('keluhkesah.html')">Bergabung</button>
            </div>

            <div class="community-card">
                <div>
                    <h3>Keluh Kesah Pekerja</h3>
                    <p>35.000 Pengikut</p>
                    <small>Sharing pengalamanmu selama bekerja agar menjadi pembelajaran bersama!</small>
                </div>
                <button class="btn-join">Bergabung</button>
            </div>

            <div class="community-card">
                <div>
                    <h3>Keluh Kesah Pekerja</h3>
                    <p>35.000 Pengikut</p>
                    <small>Sharing pengalamanmu selama bekerja agar menjadi pembelajaran bersama!</small>
                </div>
                <button class="btn-join" onclick="goToPage('keluhkesah.html')">Bergabung</button>

          
        </section>

    </div>
    <div class="jelajahi">
      <button class="btn-more">Jelajahi Komunitas Lainnya!</button>
    </div>
    </div>
</body>
<script>
    function goToPage(url) {
        // Mengarahkan ke halaman baru di tab yang sama
        window.location.href = url; 
    }
</script>
</html>
