<?php

header('Content-Type: image/png');

$image = imagecreatetruecolor(600, 400);

$strokecolor = imagecolorallocate($image, 0, 0, 0);
$fillcolor = imagecolorallocate($image, 255, 255, 255);

imagefill($image, 0, 0, $fillcolor);
imageellipse($image, 200, 150, 100, 100, $strokecolor);

imagepng($image);

imagedestroy($image);


