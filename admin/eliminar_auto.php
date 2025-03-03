<?php
$conexion = mysqli_connect('localhost', 'root', '', 'autos');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexion, $_GET['id']);

    $sql = "SELECT Image FROM autos WHERE id = '$id'";
    $result = mysqli_query($conexion, $sql);
    $auto = mysqli_fetch_assoc($result);
    $imagePath = 'imagenes/autos/' . $auto['Image'];

    $deleteSql = "DELETE FROM autos WHERE id = '$id'";
    if (mysqli_query($conexion, $deleteSql)) {
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        echo "<div class='success-msg'>Auto eliminado con éxito.</div>";
    } else {
        echo "<div class='error-msg'>Error al eliminar el auto: " . mysqli_error($conexion) . "</div>";
    }
}

$result = mysqli_query($conexion, "SELECT * FROM autos");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Autos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        img {
            width: 100px;
        }

        .success-msg {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            margin-top: 20px;
            text-align: center;
            border-radius: 5px;
        }

        .error-msg {
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            margin-top: 20px;
            text-align: center;
            border-radius: 5px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Lista de Autos en Venta</h1>
        <table>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Acciones</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['Brand']}</td>
                        <td>{$row['Model']}</td>
                        <td>{$row['Year']}</td>
                        <td>\${$row['Price']}</td>
                        <td>{$row['Description']}</td>
                        <td><img src='imagenes/autos/{$row['Image']}' alt='{$row['Model']}'></td>
                        <td>
                            <a href='?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>