<?php
	
	$areatotal = 10;
	$areaConstruida= 5;

	$valorMetroConst = 5;
	$valorMetroNaoConst = 3.80;

	$areaNaoCont = ($areatotal - $areaConstruida) * $valorMetroNaoConst ;

	$totalImposto = ($areaConstruida * $valorMetroConst) + $areaNaoCont;


	echo "valor do imposto " . $totalImposto;