<?php

header('Content-Type: image/png');

function main (int $x): void {
	$image = imagecreatetruecolor(600,600);

	$strokecolor = imagecolorallocate($image, 0, 0, 0);
	$fillcolor = imagecolorallocate($image, 255, 255, 255);

	imagefill($image, 0, 0, $fillcolor);

	for ($i = 1; $i < $x; $i++) {
		$step = (int) (600 * $i / $x);
		imageline($image, $step, 0, $step, 600, $strokecolor);
		imageline($image, 0, $step, 600, $step, $strokecolor);
	}

	imagepng($image);
	imagedestroy($image);
}


main(9);


