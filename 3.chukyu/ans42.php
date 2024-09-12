<?php

function main(int $n1, int $n2, int $n3): string {
    if($n1 <= $n2 && $n2 <= $n3) {
        return 'OK';
    } else {
	return 'NG';
    }
}
