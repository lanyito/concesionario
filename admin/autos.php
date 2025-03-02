<?php
include '../includes/header.php';

$conexion = new mysqli('localhost', 'root', '', 'autos');
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$sql = "SELECT * FROM autos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autos</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        /* darle forma ala tabla*/
        table {
            border-collapse: collapse;
            width: 80%;
            /* ancho de la tabla */
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            margin-left: 5px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <h1>Listado de Autos</h1>

        <?php if ($resultado->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Price</th>
                        <th>Descriptions</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($auto = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $auto['Brand']; ?></td>
                            <td><?php echo $auto['Model']; ?></td>
                            <td><?php echo $auto['Year']; ?></td>
                            <td><?php echo $auto['Price']; ?></td>
                            <td><?php echo $auto['Descriptions']; ?></td>
                            <td>
                                <a href="editar_auto.php?id=<?php echo $auto['id']; ?>">Editar</a> |
                                <a href="eliminar_auto.php?id=<?php echo $auto['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay autos disponibles.</p>
        <?php endif; ?>
    </div>

    <?php
    $conexion->close();

    include '../includes/footer.php';
    ?>

</body>

</html>