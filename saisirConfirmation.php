<?php
define("CONFIRMATION", 1);

do {
    echo "Confirmez-vous la modification (oui/non)? ";
    $valeurM = trim(fgets(STDIN));

    if ($valeurM !== "oui" && $valeurM !== "non") {
        echo "Réponse incorrecte! \n";
    }
} while ($valeurM !== "oui" && $valeurM !== "non");

echo "Modification en cours ...";
?>


