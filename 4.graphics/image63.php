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
	
	imagefill($image, 0, 0, $fillcolor);
	imageline($image, 300, 0, 300, 400, $strokecolor);
	imageline($image, 0, 200, 600, 200, $strokecolor);

	$color = [
		[$green, $yellow],
		[$red, $blue]
	];
	$ellipseColor = $color[($y <= 200)?0:1][($x <= 300)?0:1];
	imagefilledellipse($image, $x, $y, 100, 100, $ellipseColor);

	imagepng($image);
	imagedestroy($image);
}


main(150, 100);


