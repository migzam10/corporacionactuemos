<?php 

$idUnico = time();
$nombre = htmlspecialchars($_POST['nombre']); 
$correo = htmlspecialchars($_POST['correo']); 
$monto = htmlspecialchars($_POST['monto']); 
$moneda = "COP";
$llaveSecreta = "cRMvoJT_-k0XOSzFHN-EeA";


$cadena_concatenada = $idUnico.$monto.$moneda.$llaveSecreta;  

echo $cadena_concatenada;

$hash_integridad = hash('sha256', $cadena_concatenada);

echo "<br><br><br>";
echo $hash_integridad;
?>