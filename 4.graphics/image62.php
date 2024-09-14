<?php

header('Content-Type: image/png');

function main (int $x, int $y): void {
	$image = imagecreatetruecolor(600,400);

	$strokecolor = imagecolorallocate($image, 0, 0, 0);
	$fillcolor = imagecolorallocate($image, 255, 255, 255);
	imagefill($image, 0, 0, $fillcolor);

	imageellipse($image, $x, $y, 160, 160, $strokecolor);
	imagerectangle($image, $x - 80, $y + 80, $x + 80, $y - 80, $strokecolor);

	imagepng($image);
	imagedestroy($image);
}


main(240, 180);


