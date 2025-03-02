<?php
require 'config.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Solicitudes</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <h1>Gestión de Solicitudes</h1>

    <?php include '../includes/footer.php'; ?>
</body>

</html>