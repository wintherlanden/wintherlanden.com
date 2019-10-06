<?php

define('LN', "\n");
header("X-Frame-Options: allow-from https://www.instagram.com/");
header("Access-Control-Allow-Origin: *");
header("Content-Security-Policy: frame-ancestors https://instagram.com https://www.wintherlanden.com");
session_start();

$devices = [
    'Desktop' => [
        'width' => 1200,
    ],
    'Small Laptop' => [
        'width' => 1200,
    ],
    'Tablet Landscape' => [
        'width' => 800,
    ],
    'Tablet Portrait' => [
        'width' => 620,
    ],
    'Large Smartphone' => [
        'width' => 570,
    ],
    'Small Smartphone' => [
        'width' => 300,
    ],
];

foreach ($devices as $device) {
    ?>
    <iframe src="/?gallery" style="width: <?= $device['width']; ?>; height: <?= $device['height']; ?>;">
    </iframe>
    <?php
}

?>


