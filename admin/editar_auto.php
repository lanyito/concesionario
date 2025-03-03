<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'autos';

$conexion = mysqli_connect($host, $user, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Brand = mysqli_real_escape_string($conexion, $_POST['Brand']);
    $Model = mysqli_real_escape_string($conexion, $_POST['Model']);
    $Year = mysqli_real_escape_string($conexion, $_POST['Year']);
    $Price = mysqli_real_escape_string($conexion, $_POST['Price']);
    $Description = mysqli_real_escape_string($conexion, $_POST['Description']);
    $Image = $_FILES['Image']['name'];
    $target = "imagenes/autos/" . basename($Image);


    if (move_uploaded_file($_FILES['Image']['tmp_name'], $target)) {

        $sql = "INSERT INTO autos (Brand, Model, Year, Price, Description, Image) 
                VALUES ('$Brand', '$Model', '$Year', '$Price', '$Description', '$Image')";

        if (mysqli_query($conexion, $sql)) {
            echo "<div class='success-msg'>Auto agregado con éxito.</div>";
        } else {
            echo "<div class='error-msg'>Error al agregar el auto: " . mysqli_error($conexion) . "</div>";
        }
    } else {
        echo "<div class='error-msg'>Error al subir la imagen.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Auto</title>
    <style>
        /* vista con mas tiza */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 2rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }


        .success-msg {
            margin-top: 20px;
            padding: 15px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
        }

        .error-msg {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Agregar un Auto en Venta</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="Brand">Marca:</label>
            <input type="text" name="Brand" id="Brand" required>

            <label for="Model">Modelo:</label>
            <input type="text" name="Model" id="Model" required>

            <label for="Year">Año:</label>
            <input type="number" name="Year" id="Year" required>

            <label for="Price">Precio:</label>
            <input type="number" step="0.01" name="Price" id="Price" required>

            <label for="Description">Descripción:</label>
            <textarea name="Description" id="Description" rows="5" required></textarea>

            <label for="Image">Imagen del Auto:</label>
            <input type="file" name="Image" id="Image" required>

            <input type="submit" value="Agregar Auto">
        </form>
    </div>
</body>

</html>