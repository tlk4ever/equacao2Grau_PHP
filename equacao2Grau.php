<?php

function equacao2Grau($a, $b, $c){
	
	if($a == 0) return [];
	
	$delta = ($b**2) - (4*$a*$c);
	
	if($delta > 0){
		
	
		return [
			'RAIZ_X1'=> (-($b) + sqrt($delta)) / (2 * $a),
			'RAIZ_X2'=> (-($b) - sqrt($delta)) / (2 * $a)
		];
	}
	
	return [];
}

print_r(equacao2Grau(1,-2,-3));
