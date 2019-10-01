<?php
// Instagram
$clientID = '87f8f094705c4fdf976ec7d6e06e9807';
$accessToken = '2984111449.87f8f09.6fed26e76ee842128fbb2435c3eb5e0f';

$json_url = "https://api.instagram.com/v1/users/self/?access_token=2984111449.87f8f09.6fed26e76ee842128fbb2435c3eb5e0f";

$json = file_get_contents($json_url);
$data = json_decode($json, true);

$json_foto = "https://api.instagram.com/v1/users/self/media/recent/?access_token=2984111449.87f8f09.6fed26e76ee842128fbb2435c3eb5e0f";

$json1 = file_get_contents($json_foto);
$foto = json_decode($json1,true);

// JSON URL
$IGusername = $data ['data']['username'];
$IGname = $data ['data']['full_name'];
$IGbio = $data ['data']['bio'];
$IGPic = $data ['data']['profile_picture'];
$IGpost = $data ['data']['counts']['media'];
$IGfollower = $data ['data']['counts']['followed_by'];
$IGfollow = $data ['data']['counts']['follows'];
$IGfoto1=$foto ['data'][10]['images']['low_resolution']['url'];
$IGfoto2=$foto ['data'][11]['images']['low_resolution']['url'];
$IGfoto3=$foto ['data'][12]['images']['low_resolution']['url'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API - Youtube dan Instagram</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            .circle{
                border-radius : 100%;
            }
        </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../index.php">API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/view/youtube.php">Youtube <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="instagram.php">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ini Kartu -->
    <div class="container">
        <div class="row">
            <h1> </h1>
        </div>

        <div class="card-center">


            <div class="card bg-light mb-3" style="max-width: 1080px;">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="<?= $IGPic ?>" class="card-img circle" alt="..." class="rounder-circle">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">@<?=$IGusername?></h5>
                            <p class="card-text"><?= $IGpost ?> Post&emsp;&emsp;&emsp;&emsp;&emsp;<?= $IGfollower ?>
                                Follower&emsp;&emsp;&emsp;&emsp;&emsp;<?= $IGfollow ?>
                                Following&emsp;&emsp;&emsp;&emsp;&emsp;</p>
                            <p class="card-text"><small class="text-muted"><?=$IGname?></small></p>
                            <p class="card-text"><small class="text-muted"><?=$IGbio?></small></p>
                            <button type="button" class="btn btn-outline-primary">Follow</button>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INI Post IG -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="<?= $IGfoto1 ?>" alt="" style="width: 300px;">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="<?= $IGfoto2 ?>" alt="" style="width: 350px;">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="<?= $IGfoto3 ?>" alt="" style="width: 300px;">
                    </div>
                </div>
            </div>
        </div>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>