<?php
require_once '../Database/db-connection.php';

if (isset($_POST['register'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $tanggal_lahir = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $jenis_kelamin = htmlspecialchars(trim($_POST['jenis_kelamin']));
    $status_pekawinan = htmlspecialchars(trim($_POST['status_perkawinan']));
    $nomor_telepon = htmlspecialchars(trim($_POST['nomor_telepon']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $pendidikan_terakhir = htmlspecialchars(trim($_POST['pendidikan_terakhir']));
    $jurusan = htmlspecialchars(trim($_POST['jurusan']));
    $tahun_lulus = htmlspecialchars(trim($_POST['tahun_lulus']));
    $nama_perusahaan_terakhir = htmlspecialchars(trim($_POST['nama_perusahaan_terakhir']));
    $jabatan = htmlspecialchars(trim($_POST['jabatan']));
    $lama_kerja = htmlspecialchars(trim($_POST['lama_kerja']));
    $keahlian = htmlspecialchars(trim($_POST['keahlian']));
    $posisi = htmlspecialchars(trim($_POST['posisi']));
    


    // Cek apakah user sudah terdaftar sebelumnya
    $isUserExists = checkIsUserExists($email);

    if ($isUserExists) {
        echo "
            <script> 
                alert('Error to register new user, because email is already exists');
                window.location.href = '../Daftar/daftar.php';
            </script>
        ";
    }
    
    
    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    $queryInsertTableUser = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    $stmtInsertTableUser = $connection->prepare($queryInsertTableUser);
    $stmtInsertTableUser->bind_param('sss', $name, $email, $passwordHashed);
    $stmtInsertTableUser->execute();

    if ($stmtInsertTableUser->affected_rows > 0) {
       $queryGetUser = 'SELECT * FROM users WHERE email = ?';
       $stmtGetUser = $connection->prepare($queryGetUser);
       $stmtGetUser->bind_param('s', $email);
       $stmtGetUser->execute();

       $user = $stmtGetUser->get_result()->fetch_assoc();
       $user_id= $user['id'];
       $queryInsertBiodata = "INSERT INTO biodata ( user_id,tanggal_lahir, jenis_kelamin, status_perkawinan, nomor_telepon, alamat, 
       pendidikan_terakhir, jurusan, tahun_lulus,nama_perusahaan_terakhir, jabatan, lama_kerja, keahlian, posisi ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmtInsertBiodata = $connection->prepare($queryInsertBiodata);
        $stmtInsertBiodata->bind_param('isssssssssssss', $user_id, $tanggal_lahir, $jenis_kelamin, $status_pekawinan, $nomor_telepon, $alamat, $pendidikan_terakhir, $jurusan, $tahun_lulus, $nama_perusahaan_terakhir, $jabatan, $lama_kerja, $keahlian, $posisi );
        $stmtInsertBiodata->execute();

        if ($stmtInsertBiodata->affected_rows > 0) {
               header('Location: ../Login/login.php');
               exit;
        } else {
              echo "
            <script> 
                alert('Error to register new user');
            </script>
        ";

        header('Location: ../Daftar/daftar.php');
        exit;
        }
    } else {
        echo "
            <script> 
                alert('Error to register new user');
            </script>
        ";

        header('Location: ../Daftar/daftar.php');
        exit;
    }
}


function checkIsUserExists($email)
{
    global $connection;

    $queryToCheckUser = "select * from users where email = ?";
    $stmtToCheckUser = $connection->prepare($queryToCheckUser);
    $stmtToCheckUser->bind_param('s', $email);
    $stmtToCheckUser->execute();

    $user = $stmtToCheckUser->get_result()->fetch_assoc();
    
    if (isset($user)) {
        return true;
    }

    return false;
    
}
?>