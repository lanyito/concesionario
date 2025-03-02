<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$base_de_datos = 'autos';

$conn = mysqli_connect($host, $usuario, $password, $base_de_datos);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
