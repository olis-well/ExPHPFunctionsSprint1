<?php
/*Imagina't que volem que compti fins a un nombre diferent de 10.
 Programa la funció perquè el final del compte estigui parametritzat.*/

 function amagatall($num_max){

    for ($i = 0; $i < $num_max; $i+=2) {
        echo $i."\n";
    }
}
amagatall(55);
    
?>

