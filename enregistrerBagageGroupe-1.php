<?php
echo "saisir le nombre de passagers pour le groupe : " ;
$nbPassagers = rtrim(fgets(STDIN) ) ;

$poidsTotal = 0 ;
$numeroPassager = 1 ;

while( $numeroPassager <= $nbPassagers ){
	echo "Saisir le poids (en kg) des bagages du passager " ;
	echo $numeroPassager , " : " ;
	$poids = rtrim( fgets( STDIN ) ) ;
	
	$poidsTotal = $poidsTotal + $poids ;
	
	$numeroPassager = $numeroPassager + 1 ;
}

echo "Le poids total des bagages pour ce groupe est de " ;
echo $poidsTotal , " kg.\n" ;
?>
