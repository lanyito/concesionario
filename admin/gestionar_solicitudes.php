<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'solicitudes_contacto';

$conexion = mysqli_connect($host, $user, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    $nuevo_estado = mysqli_real_escape_string($conexion, $_POST['estado']);

    $sql = "UPDATE solicitudes_contacto SET estado = '$nuevo_estado' WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "Estado actualizado con éxito.";
    } else {
        echo "Error al actualizar el estado: " . mysqli_error($conexion);
    }
}

$sql = "SELECT * FROM contacto ORDER BY fecha DESC";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Solicitudes de Contacto</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Gestión de Solicitudes de Contacto</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Cambiar Estado</th>
        </tr>

        <?php while ($solicitud = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $solicitud['id']; ?></td>
                <td><?php echo $solicitud['nombre']; ?></td>
                <td><?php echo $solicitud['email']; ?></td>
                <td><?php echo $solicitud['mensaje']; ?></td>
                <td><?php echo $solicitud['estado']; ?></td>
                <td><?php echo $solicitud['fecha']; ?></td>
                <td>
                    <form action="gestionar_solicitudes.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $solicitud['id']; ?>">
                        <select name="estado">
                            <option value="Pendiente" <?php if ($solicitud['estado'] == 'Pendiente') echo 'selected'; ?>>Pendiente</option>
                            <option value="Contactado" <?php if ($solicitud['estado'] == 'Contactado') echo 'selected'; ?>>Contactado</option>
                            <option value="Vendido" <?php if ($solicitud['estado'] == 'Vendido') echo 'selected'; ?>>Vendido</option>
                        </select>
                        <input type="submit" value="Actualizar">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>