<?php
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
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <h1>Bienvenido al Panel de Administración</h1>
    <ul>
        <li><a href="autos.php">Gestión de Autos</a></li>
        <li><a href="solicitudes.php">Gestión de Solicitudes</a></li>
    </ul>

    <?php include '../includes/footer.php'; ?>
</body>

</html>