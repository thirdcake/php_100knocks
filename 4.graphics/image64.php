<?php

header('Content-Type: image/png');

function main (int $x, int $y): void {
	$image = imagecreatetruecolor(600,400);

	$strokecolor = imagecolorallocate($image, 0, 0, 0);
	$fillcolor = imagecolorallocate($image, 255, 255, 255);
	$red = imagecolorallocate($image, 255, 0, 0);
	$green = imagecolorallocate($image, 0, 255, 0);
	$blue = imagecolorallocate($image, 0, 0, 255);
	$yellow = imagecolorallocate($image, 255, 255, 0);
	$orange = imagecolorallocate($image, 255, 165, 0);

	imagefill($image, 0, 0, $fillcolor);
	imageline($image, 300, 0, 300, 400, $strokecolor);
	imageline($image, 0, 200, 600, 200, $strokecolor);

	$color = [
		[$green, $yellow],
		[$red, $blue]
	];
	$ellipseColor = $color[($y <= 200)?0:1][($x <= 300)?0:1];
	if ((300 - 100) < $x && $x < (300 + 100) && (200 - 100)<$y && $y < (200 + 100)) {
		$ellipseColor = $orange;
	}
	imagefilledellipse($image, $x, $y, 100, 100, $ellipseColor);

	imagepng($image);
	imagedestroy($image);
}


main(300, 200);


