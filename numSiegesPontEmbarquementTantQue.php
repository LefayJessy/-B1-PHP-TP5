<?php
	define( "SIEGE_MAX" , 28 ) ;
	echo "Sièges du pont d'embarquement :\n\n" ;
	
	$numSiege = 20 ;
	while( $numSiege<= SIEGE_MAX ){
		
		echo "Siège numéro ", $numSiege , "\n" ;
		$numSiege = $numSiege + 1;
		
	}
	echo "Siège numéro " , $numSiege , "\n" ;
?>

