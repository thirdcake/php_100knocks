<?php

header('Content-Type: image/png');

$image = imagecreatetruecolor(600, 400);

$strokecolor = imagecolorallocate($image, 0, 0, 0);
$fillcolor = imagecolorallocate($image, 255, 255, 255);

imagefill($image, 0, 0, $fillcolor);
imagerectangle($image, 200, 400 - 100 - 200, 200 + 200, 400 - 100, $strokecolor  );
imageellipse($image, 200 + 100, 400 - 100 - 100, 200, 200, $strokecolor);

imagepng($image);

imagedestroy($image);


