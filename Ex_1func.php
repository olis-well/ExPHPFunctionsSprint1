<?php

/*Programa una funciò que, donat un número qualsevol(per exemple,la teva edat)
 ens digui si és parell o imparell mitjançant un missatge per pantalla.*/

function par_impar($number){

  if ($number % 2 == 0) {
    print "Es par";
  }
  else{
    print "Es impar";
  }

}


par_impar(33)
?>