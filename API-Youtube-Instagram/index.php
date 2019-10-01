<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC4N09DBk0LKxfraKRruv_Ug&key=AIzaSyCJJQmOT1wj8VTLlkLJeQL2Rc9BW3MrJYk");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result, true);

$thumbnail = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$title = $result['items'][0]['snippet']['title'];
$description = $result['items'][0]['snippet']['description'];
$subs= $result['items'][0]['statistics']['subscriberCount'];

// Instagram
$clientID = '87f8f094705c4fdf976ec7d6e06e9807';
$accessToken = '2984111449.87f8f09.6fed26e76ee842128fbb2435c3eb5e0f';

$json_IG ="https://api.instagram.com/v1/users/self/?access_token=2984111449.87f8f09.6fed26e76ee842128fbb2435c3eb5e0f";
$jsonIG = file_get_contents($json_IG);
$data = json_decode($jsonIG, true);

$username = $data['data']['username'];
$thumbIG = $data['data']['profile_picture'];
$bio = $data['data']['bio'];
$follower = $data['data']['counts']['followed_by'];
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
            <a class="navbar-brand" href="index.php">API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="view/youtube.php">Youtube <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view/instagram.php">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $thumbnail;?>" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title"><?=$title?></h5>
                            <p class="card-text"><?=$description?></p>
                            <hr>
                            <p class="card-text">Subsriber : <?=$subs?></p>
                            <a href="#" class="btn btn-danger">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $thumbIG;?>" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title"><?=$username?></h5>
                            <p class="card-text"><?=$bio?></p>
                            <hr>
                            <p class="card-text">Follower : <?=$follower?></p>
                            <a href="#" class="btn btn-primary">Follow</a>
                        </div>
                    </div>
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