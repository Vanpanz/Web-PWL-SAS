<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LamarKuy! - Daftar</title>
  <link rel="stylesheet" href="daftar.css">
</head>
<body>
  <!-- Header -->
    <header class="header">
    <div class="logo-container">
      <img src="IMG FOLDER/logo lamar.png" alt="Logo" class="logo">
      <div class="logo-text">
        <h2>LamarKuy!</h2>
        <p>Achieve Higher, Growth Better.</p>
      </div>
    </div>
    <a href="../index.php" class="back-link">⬅ Kembali</a>
  </header>

  <!-- Register Box -->
  <div class="login-box">
    <h2>Daftar</h2>
    <form  method="post" action="../Isi database/db-register.php">
      <label for="name">Masukkan Nama</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Masukkan Alamat Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Buat Password Anda</label>
      <input type="password" id="password" name="password" required>

  <div class="container">
    <h2>Formulir Lamaran Kerja</h2>
    
      <!-- Data Pribadi -->
      <h3>Data Pribadi</h3>
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="name" placeholder="Masukkan nama lengkap" required>

      <label for="tgl_lahir">Tanggal Lahir</label>
      <input type="date" id="tgl_lahir" name="tanggal_lahir" required>

      <label>Jenis Kelamin</label>
      <div class="radio-group">
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label>
      </div>

      <label for="status">Status Perkawinan</label>
      <select id="status" name="status_perkawinan" required>
        <option value="">-- Pilih Status --</option>
        <option value="single">Belum Menikah</option>
        <option value="married">Menikah</option>
        <option value="other">Lainnya</option>
      </select>

      <!-- Kontak -->
      <h3>Kontak</h3>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="contoh@email.com" required>

      <label for="telepon">No. Telepon</label>
      <input type="tel" id="telepon" name="nomor_telepon" placeholder="08xxxxxxxxxx" required>

      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>

      <!-- Pendidikan -->
      <h3>Pendidikan</h3>
      <label for="pendidikan">Pendidikan Terakhir</label>
      <select id="pendidikan" name="pendidikan_terakhir" required>
        <option value="">-- Pilih Pendidikan --</option>
        <option value="sma">SMA/SMK Sederajat</option>
        <option value="diploma">Diploma (D1-D3)</option>
        <option value="s1">Sarjana (S1)</option>
        <option value="s2">Magister (S2)</option>
        <option value="s3">Doktor (S3)</option>
      </select>

      <label for="jurusan">Jurusan</label>
      <input type="text" id="jurusan" name="jurusan" placeholder="Contoh: Teknik Informatika" required>

      <label for="tahun_lulus">Tahun Lulus</label>
      <input type="number" id="tahun_lulus" name="tahun_lulus" placeholder="Contoh: 2022" required>

      <!-- Pengalaman Kerja -->
      <h3>Pengalaman Kerja</h3>
      <label for="perusahaan">Nama Perusahaan Terakhir</label>
      <input type="text" id="perusahaan" name="nama_perusahaan_terakhir" placeholder="Nama perusahaan">

      <label for="posisi_kerja">Posisi/Jabatan</label>
      <input type="text" id="posisi_kerja" name="jabatan" placeholder="Posisi terakhir">

      <label for="lama_kerja">Lama Bekerja</label>
      <input type="text" id="lama_kerja" name="lama_kerja" placeholder="Contoh: 2 Tahun">

      <!-- Keahlian -->
      <h3>Keahlian</h3>
      <textarea id="keahlian" name="keahlian" rows="3" placeholder="Tuliskan keahlian utama Anda" required></textarea>

      <!-- Posisi -->
      <h3>Posisi yang Dilamar</h3>
      <select id="posisi" name="posisi" required>
        <option value="">-- Pilih Posisi --</option>
        <option value="staff">Staff Administrasi</option>
        <option value="marketing">Marketing</option>
        <option value="it">IT Support</option>
        <option value="finance">Keuangan</option>
        <option value="lainnya">Lainnya</option>
      </select>

      <!-- Upload -->
      <h3>Upload Dokumen</h3>
      <label for="cv">Upload CV</label>
      <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

      <label for="foto">Upload Pas Foto</label>
      <input type="file" id="foto" name="foto" accept=".jpg,.jpeg,.png" required>

    
  </div>

  <!-- Link JS eksternal -->
  <script src="formulir-pekerja.js"></script>

      <p class="terms">
        Dengan Mendaftar, Saya Sudah Menyetujui 
        <a href="#">Syarat Kebijakan LamarKuy!</a>
      </p>

      <button type="submit" class="btn-masuk" name="register" >Daftar</button>
    </form>

    <p class="atau">Atau</p>

    <div class="social-login">
  <a href="#" class="btn-google">
    <img src="IMG FOLDER/google.png" alt="Google" class="social-icon">
    Lanjutkan dengan Google
  </a>
  <a href="#" class="btn-facebook">
    <img src="IMG FOLDER/facebook.png" alt="Facebook" class="social-icon">
    Lanjutkan dengan Facebook
  </a>
  <a href="#" class="btn-twitter">
    <img src="IMG FOLDER/twitter.png" alt="Twitter" class="social-icon">
    Lanjutkan dengan Twitter
  </a>
</div>

    <p class="signup-link">
      <a href="../">Saya Sudah Punya Akun</a>
    </p>
  </div>
</body>
</html>