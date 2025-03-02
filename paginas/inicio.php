<?php
require '../admin/config.php';

$query = "SELECT * FROM autos";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario - Inicio</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <h1>Bienvenidos a Nuestro Concesionario</h1>
    <div class="autos">
        <?php while ($auto = mysqli_fetch_assoc($result)): ?>
            <div class="auto">
                <img src="../imagenes/<?php echo $auto['imagen']; ?>" alt="Imagen del coche">
                <h2><?php echo $auto['marca'] . " " . $auto['modelo'] . " " . $auto['año']; ?></h2>
                <p><?php echo $auto['descripcion']; ?></p>
                <p>Precio: $<?php echo $auto['precio']; ?></p>
                <a href="detalle-coche.php?id=<?php echo $auto['id']; ?>">Ver detalles</a>
            </div>
        <?php endwhile; ?>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

</html>