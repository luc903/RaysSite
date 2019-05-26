<?php
/**
 * Created by PhpStorm.
 * User: LucW
 * Date: 24/05/2019
 * Time: 17:22
 */
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Recorded Emotion</title>
    <meta name="description" content="Recorded Emotion">
    <meta name="author" content="Ray M">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="fade">
<div class="fader fade-light"></div>
<div class="home-container">
    <div class="home__happiness">
        <h1>RECORDED</h1>
        <div class="video-link" data-target="emma">
            <h2>Emma's Story</h2>
        </div>
    </div>
    <div class="home__sadness">
        <h1>EMOTION</h1>
        <div class="video-link" data-target="minds-eye">
            <h2>Minds Eye</h2>
        </div>
    </div>
</div>


<div class="video-overlay">
    <video width="1140" height="780" controls id="emma">
        <source src="/media/EMMA.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <video width="1140" height="780" controls id="minds-eye">
        <source src="/media/MINDS%20EYE_FINAL.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
