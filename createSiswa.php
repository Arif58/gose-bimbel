<?php

include_once "conn.php";
if(isset($_POST['submit'])){
    if (!empty($_POST['nama']) && !empty($_POST['noHP']) && !empty($_POST['email']) && !empty($_POST['kelas'])){
        $nama = $_POST['nama'];
        $noHP = $_POST['noHP'];
        $email = $_POST['email'];
        $kelas = $_POST['kelas'];
    
        $query = "INSERT INTO siswa(nama, noHP, email, kelas) values('$nama', '$noHP', '$email', '$kelas')";
        if (mysqli_query($conn, $query)){
            echo "<script>alert('Data Telah Terkirim');window.location='index.php'</script>";
        }
    }
    else{
        echo "<script>alert('semua kolom wajib diisi');window.location='index.php'</script>";
        die();
    }
}



?>
