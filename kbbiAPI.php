<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

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
        <h2>KBBI</h2>
    </div>
    <div class="container">
        <form action="" method="GET">
            <div class="row align-items-center">
                <div class="col">
                    <input type="text" name="word" class="form-control" placeholder="Kata">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <div class="mt-5">
            <?php
            if (isset($_GET['word'])) {
                $response = $client->request(
                    'GET',
                    'https://new-kbbi-api.herokuapp.com/cari/' . $_GET['word']
                );

                $body = $response->getBody()->getContents();

                $data_body = json_decode($body);
                // var_dump($data_body);
                echo "<h2>".$_GET['word']."</h2>";
                foreach ($data_body->data as $word) {
                    echo "<b>".$word->lema."</b>";
                    echo "<br>";
                    foreach ($word->arti as $arti) {
                     
                        echo $arti->kelas_kata;
                        echo "<br>";
                        echo $arti->deskripsi;
                        echo "<br>";
                        echo "<hr>";
            
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="text-center mt-4 mb-3">
        <a class="btn btn-dark" href="index.php">Back</a>
    </div>


</body>

</html>