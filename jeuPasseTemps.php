<?php
$nbmystere = rand(1 , 100);
$nbCapitaine = 0;
$nbCoups = 0; 

while($nbCapitaine != $nbmystere){
	echo "Saisir le nombre entier compris entre 1 et 100 : " ;
	$nbCapitaine = rtrim(fgets(STDIN ) ) ;
	
if ($nbCapitaine < $nbmystere) {
echo "Trop petit \n" ;
$nbCoups = $nbCoups + 1;
}
if ($nbCapitaine > $nbmystere ) {
echo "Trop grand \n" ;
$nbCoups = $nbCoups + 1;
}
if ($nbCapitaine > 100) {
echo "Valeur incorrecte ! \n";
$nbCoups = $nbCoups + 1;
}
}
if ($nbCapitaine == $nbmystere) {
$nbCoups = $nbCoups + 1;
echo "Félicitations Capitaine. Victoire en $nbCoups coups. \n";

}
?>
