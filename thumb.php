<?php

$src = $_GET['src'];

$pInfo  =   pathinfo($src);
// Save the new path using the current file name
$dest   =   $dest."/".$pInfo['basename'];
// Do the rest of your stuff and things...
$source_image = imagecreatefromjpeg($src);
$width = imagesx($source_image);
$height = imagesy($source_image);
$desired_height = floor($height * ($desired_width / $width));
$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
imagejpeg($virtual_image, $dest);

