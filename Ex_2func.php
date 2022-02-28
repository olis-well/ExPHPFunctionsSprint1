<?PHP
/*Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. 
Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.*/

function amagatall(){

    for ($i = 0; $i < 11; $i+=2) {
        echo $i."\n";
    }
}
amagatall();
    
?>

