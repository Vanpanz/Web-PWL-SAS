document.getElementById("formLamaran").addEventListener("submit", function(event) {
  let nama = document.getElementById("nama").value.trim();
  let email = document.getElementById("email").value.trim();
  let telepon = document.getElementById("telepon").value.trim();
  let tahunLulus = document.getElementById("tahun_lulus").value.trim();

  // Validasi Nama
  if (nama.length < 3) {
    alert("Nama lengkap minimal 3 karakter!");
    event.preventDefault();
    return;
  }

  // Validasi Email
  let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("Email tidak valid!");
    event.preventDefault();
    return;
  }

  // Validasi Telepon
  let teleponPattern = /^[0-9]{10,13}$/;
  if (!telepon.match(teleponPattern)) {
    alert("Nomor telepon harus angka (10-13 digit)!");
    event.preventDefault();
    return;
  }

  // Validasi Tahun Lulus (antara 1950 - tahun sekarang)
  let currentYear = new Date().getFullYear();
  if (tahunLulus < 1950 || tahunLulus > currentYear) {
    alert("Tahun lulus harus antara 1950 dan " + currentYear);
    event.preventDefault();
    return;
  }

  alert("Lamaran berhasil dikirim!");
});
