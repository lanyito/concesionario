<?php
require '../admin/config.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    $query = "SELECT * FROM autos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $auto = mysqli_fetch_assoc($result);
} else {
    header('Location: inicio.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Coche</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <?php if ($auto): ?>
        <h1><?php echo $auto['marca'] . " " . $auto['modelo'] . " " . $auto['año']; ?></h1>
        <img src="../imagenes/<?php echo $auto['imagen']; ?>" alt="Imagen del coche">
        <p><?php echo $auto['descripcion']; ?></p>
        <p>Precio: $<?php echo $auto['precio']; ?></p>
        <a href="../contacto.php?auto_id=<?php echo $auto['id']; ?>">Contáctanos</a>
    <?php else: ?>
        <p>No se ha encontrado el coche solicitado.</p>
    <?php endif; ?>

    <?php include '../includes/footer.php'; ?>
</body>

</html>