<?php

	$n = 55;

	switch ($n) {
		case $n < 10:
			echo "Numero pequeno";
			break;

			case ($n > 10) && ($n <= 100):
			echo "Numero medio";
			break;
			case $n > 100:
				echo "Numero grande";
				break;

		
		default:
			echo "Insira numero valido";
			break;
	}