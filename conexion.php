<?php

$servidor= 'localhost';
$basedatos='baldo';
$usuario="root";
$contraseña= "";

$conexion= new mysqli($servidor,$usuario,$contraseña,$basedatos);
if($conexion->connect_errno)
{
    echo "Nuestra conexión a la base de datos presenta fallas";
    exit();
}

?>