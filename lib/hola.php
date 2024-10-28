<?php
//Autor: Javier Reyes <javireyescarmona24@gmail.com>

require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);;

?>
