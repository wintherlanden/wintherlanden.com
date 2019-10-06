<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$src = __DIR__ . '/' . $_GET['src'];

$desired_width = 300;


$dest_dir = __DIR__ . '/thumbnails/';
@mkdir($dest_dir);
$dest_filename = preg_replace('/[^a-zA-Z0-9]/', '', $src) . '.' . $desired_width . '.png';
$dest = $dest_dir . $dest_filename;

if (!is_file($dest)) {

// Do the rest of your stuff and things...
    $source_image = @imagecreatefromjpeg($src);
    if (!$source_image) $source_image = imagecreatefrompng($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    $desired_height = floor($height * ($desired_width / $width));
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

    imagealphablending($virtual_image, false);
    $colorTransparent = imagecolorallocatealpha($virtual_image, 0, 0, 0, 127);
    imagefill($virtual_image, 0, 0, $colorTransparent);
    imagesavealpha($virtual_image, true);

    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    imagepng($virtual_image, $dest);
}

if (is_file($dest)) {
    header('Location: /thumbnails/' . $dest_filename);
    exit;
}

