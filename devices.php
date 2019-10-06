<?php

define('LN', "\n");
header("X-Frame-Options: allow-from https://www.instagram.com/");
header("Access-Control-Allow-Origin: *");
header("Content-Security-Policy: frame-ancestors https://instagram.com https://www.wintherlanden.com");
session_start();

$devices = [
    'Desktop' => [
        'width' => '99vw',
    ],
    'Small Laptop' => [
        'width' => '1200px',
    ],
    'Tablet Landscape' => [
        'width' => '800px',
    ],
    'Tablet Portrait' => [
        'width' => '620px',
    ],
    'Large Smartphone' => [
        'width' => '570px',
    ],
    'Small Smartphone' => [
        'width' => '300px',
    ],
];

foreach ($devices as $device_name => $device) {
    ?>
    <h1><?= $device_name; ?></h1>
    <iframe src="/?gallery" style="width: <?= $device['width']; ?>; height: 600px; ?>;">
    </iframe>
    <?php
}

?>


