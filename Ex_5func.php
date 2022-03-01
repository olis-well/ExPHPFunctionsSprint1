<?php

/*Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

Condicions
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

function verifica_grado($nota){

    if ($nota>=60 ) {
        print "Primera Divisió";
    }
    if ($nota>=45 && $nota<=59 ) {
        print "Segona Divisió";
    } 
    if ($nota>=33 && $nota<=44 ) {
        print "Tercera Divisió";
    } 
    if ($nota<=33){
        print "Reprovat";
    }

}

verifica_grado(40)
?>