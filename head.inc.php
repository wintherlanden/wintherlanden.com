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
            # background: black;
            # color: white;
        }

        h1, h2, h3, h4, p, body {
            font-family: 'Raleway', sans-serif;
        }

        #header_logo {
            height: 500px;
            background: url("images/cropped-Torso-1-1.jpg");
            background-size: cover;
            background-position: center center;

        }

        .navbar {
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
            font-weight: 600 !important;
        }

        #header_bar {
            height: 38px;
            z-index: 99999;

        }

        #language_icon {
            height: 28px;
            position: absolute;
            top: 5px;
            right: 5px;
        }
    </style>

    <title>Wintherlanden</title>
</head>
<body>

<div id='header_bar'>
    <img src="images/language-icon.png" id="language_icon">
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
