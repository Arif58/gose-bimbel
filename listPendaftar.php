<?php

include "conn.php";
$pendaftar = mysqli_query($conn, "SELECT * FROM siswa");

$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GOSE Bimbel</title>

</head>
<body>
    <div class="text-center mt-4 mb-3">
        <h2>List Pendaftar</h2>
    </div>
        <table class="table table-info mx-auto" style="width: 50%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Kelas</th>
            </tr>
            <?php
            foreach ($pendaftar as $row){
                echo "<tr>
                    <td>".$no++."</td>
                    <td>" . $row['nama'] ."</td>
                    <td>" . $row['email'] ."</td>
                    <td>" . $row['noHP'] ."</td>
                    <td>" . $row['kelas'] ."</td>
                        </tr>";
            }
            ?>
            
        </table>
    <div class="container">
        <div class="position-absolute start-50">
            <a class="btn btn-dark" href="index.php">Back</a>
        </div>
    </div>
</body>
</html>