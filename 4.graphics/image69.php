<?php

header('Content-Type: image/png');

function main (int $x): void {
	$image = imagecreatetruecolor(600,600);

	$strokecolor = imagecolorallocate($image, 0, 0, 0);
	$fillcolor = imagecolorallocate($image, 255, 255, 255);

	imagefill($image, 0, 0, $fillcolor);

	for ($i = 0; $i < $x; $i++) {
		for ($j = 0; $j < $x; $j++) {
			if (($i + $j) % 2 === 1) {
				$x1 = (int) (600 * $i / $x);
				$y1 = (int) (600 * $j / $x);
				$x2 = (int) (600 * ($i + 1) / $x);
				$y2 = (int) (600 * ($j + 1) / $x);
				imagefilledrectangle($image, $x1, $y1, $x2, $y2, $strokecolor);
			}
		}
	}

	imagepng($image);
	imagedestroy($image);
}


main(9);


