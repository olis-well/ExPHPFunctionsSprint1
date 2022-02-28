<?php

/*Per prevenir oblits a l'utilitzar la nostra meravellosa opció
 "amagatall" establirem un paràmetre per defecte igual a 10 a la 
funció que s'encarrega de fer aquest compte.*/


function amagatall($num_max=10){

    for ($i = 0; $i < $num_max; $i+=2) {
        echo $i."\n";
    }
}
amagatall();
    
?>