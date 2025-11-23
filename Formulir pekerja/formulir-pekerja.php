<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Lamaran Kerja Lengkap</title>
  <!-- Link CSS eksternal -->
  <link rel="stylesheet" href="formulir-pekerja.css">
</head>
<body>
<header>
</header>

  <div class="container">
    <h2>Formulir Lamaran Kerja</h2>
    <form id="formLamaran" action="../Login/login.php" method="post" enctype="multipart/form-data">

      <!-- Data Pribadi -->
      <h3>Data Pribadi</h3>
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

      <label for="tgl_lahir">Tanggal Lahir</label>
      <input type="date" id="tgl_lahir" name="tgl_lahir" required>

      <label>Jenis Kelamin</label>
      <div class="radio-group">
        <input type="radio" id="laki" name="jk" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jk" value="Perempuan">
        <label for="perempuan">Perempuan</label>
      </div>

      <label for="status">Status Perkawinan</label>
      <select id="status" name="status" required>
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
      <input type="tel" id="telepon" name="telepon" placeholder="08xxxxxxxxxx" required>

      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>

      <!-- Pendidikan -->
      <h3>Pendidikan</h3>
      <label for="pendidikan">Pendidikan Terakhir</label>
      <select id="pendidikan" name="pendidikan" required>
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
      <input type="text" id="perusahaan" name="perusahaan" placeholder="Nama perusahaan">

      <label for="posisi_kerja">Posisi/Jabatan</label>
      <input type="text" id="posisi_kerja" name="posisi_kerja" placeholder="Posisi terakhir">

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

      <button type="submit">Kirim Lamaran</button>
    </form>
  </div>

  <!-- Link JS eksternal -->
  <script src="formulir-pekerja.js"></script>
</body>
</html>
