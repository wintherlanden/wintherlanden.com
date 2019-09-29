<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
          integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous"/>

    <style>
        body {
            background: #ccc url("images/hintergrund.jpg");
        }

        h1, h2, h3, h4, p, body {
            font-family: 'Raleway', sans-serif;
        }

        #header_logo {
            height: 200px;
            width: 50vw;
            margin-left: 25vw;
            background: url("images/Schriftzug.png");
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .navbar {
            background: #ffffffaa;
            padding-left: 35vw;
            font-variant: small-caps;
            text-transform: uppercase;

            -webkit-box-shadow: 0 8px 6px -6px #999;
            -moz-box-shadow: 0 8px 6px -6px #999;
            box-shadow: 0 8px 6px -6px #999;
        }

        .navbar li a.nav-link {
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 400 !important;
            margin-left: 10px;
            margin-right: 10px;
        }

        #header_bar {
            height: 38px;
            z-index: 99999;
            background: #ffffffaa;
        }

        #instagram_icon {
            position: relative;
            left: 60px;
            height: 28px;
        }

        .main_container {
            background: #ffffffaa;
            min-height: calc(100vh - 300px);
            padding: 10px 10px 10px 10px;
        }

        #language_icon_holder {
            position: absolute;
            top: 5px;
            right: 5px;
        }

        #language_icon {
            height: 28px;
        }

        #instagram_icon_holder {
            float: right;
        }
    </style>

    <title>Wintherlanden</title>
</head>
<body>

<div id='header_bar'>
    <div id="language_icon_holder" class="dropdown">
        <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="images/language-icon.png" id="language_icon">
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">English</a>
            <a class="dropdown-item" href="#">Deutsch</a>
        </div>
    </div>
</div>

<div id='header_logo'>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?= ($page == "home" ? "active" : ""); ?>">
                <a class="nav-link" href="?home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= ($page == "gallery" ? "active" : ""); ?>">
                <a class="nav-link" href="?gallery">Gallery</a>
            </li>
            <li class="nav-item <?= ($page == "biography" ? "active" : ""); ?>">
                <a class="nav-link" href="?biography">Biography</a>
            </li>
            <li class="nav-item <?= ($page == "exhibitions" ? "active" : ""); ?>">
                <a class="nav-link" href="?exhibitions">Exhibitions</a>
            </li>
            <li class="nav-item <?= ($page == "contact" ? "active" : ""); ?>">
                <a class="nav-link" href="?contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<br>


<div class="container main_container">

    <div id="instagram_icon_holder">
        <img src="images/instagram-icon.png" id="instagram_icon">
    </div>
