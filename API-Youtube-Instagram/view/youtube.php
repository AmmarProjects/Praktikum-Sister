<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC4N09DBk0LKxfraKRruv_Ug&key=AIzaSyCJJQmOT1wj8VTLlkLJeQL2Rc9BW3MrJYk");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);

$yutubProfilePic = $result['items'][0]['snippet']['thumbnails']['high']['url'];
$yutubNameChannel=$result['items'][0]['snippet']['title'];
$yutubSubs=$result['items'][0]['statistics']['subscriberCount'];
$yutubDeskripsi=$result['items'][0]['snippet']['description'];


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
    </div>

    <div class="card-center">
        <div class="card bg-light mb-3" style="max-width: 1080px;">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="<?= $yutubProfilePic?>" class="card-img" alt="..." class="rounded-circle">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><?=$yutubNameChannel?></h2>
                        <h5 class="card-text"><?=$yutubSubs?> Subscriber</p>
                        </h5>
                        <div class="g-ytsubscribe" data-channelid="UC15VpzK4og3NLmCVZQOroFw" data-layout="default"
                            data-count="default"></div>
                        <!-- <button type="button" class="btn btn-outline-danger">Subscribe</button> -->
                        <p></p>
                        <p class="card-text"><small class="text-muted"><?=$yutubDeskripsi?></small></p>
                    </div>
                </div>

                <!-- INI Video YT -->
                <div class="container">
                    <div class="row">
                        <h1> </h1>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/1T5Cpl_bAUU"></iframe>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/US9o-ZUIp5c"></iframe>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/8hmmemO9yZM"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <h1> </h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/QN8J9RRLYBA"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://apis.google.com/js/platform.js"></script>
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