<?php

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


