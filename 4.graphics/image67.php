<?php

header('Content-Type: image/png');

function main (int $x, int $y): void {
	$image = imagecreatetruecolor(600,400);

	$strokecolor = imagecolorallocate($image, 0, 0, 0);
	$fillcolor = imagecolorallocate($image, 255, 255, 255);

	imagefill($image, 0, 0, $fillcolor);

	for ($i = 0; $i < 5; $i++) {
		for ($j = 0; $j < 5; $j++) {
			imageellipse($image, $x + 30 * ($i - 2), $y + 30 * ($j - 2) , 20, 20, $strokecolor);
		}
	}

	imagepng($image);
	imagedestroy($image);
}


main(340, 180);


