<?php

$texto = $_GET['texto'];    
$fundo = $_GET['fundo'];    
$corTexto = $_GET['corTexto'];    

echo "<h1 style='background-color: $fundo; color: $corTexto;'> $texto </h1>";

?>