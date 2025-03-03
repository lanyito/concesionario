<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'solicitudes_contacto';

$conexion = mysqli_connect($host, $user, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);

    $sql = "INSERT INTO contacto (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    if (mysqli_query($conexion, $sql)) {
        echo "<p style='color: green;'>Solicitud enviada con éxito.</p>";
    } else {
        echo "<p style='color: red;'>Error al enviar la solicitud: " . mysqli_error($conexion) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .contact-form {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        label {
            font-weight: bold;
            margin-top: 1rem;
            display: block;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            font-size: 1rem;
            color: green;
        }
    </style>
</head>

<body>
    <div class="contact-form">
        <h1>Contáctanos</h1>
        <form action="contacto.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5" required></textarea>

            <input type="submit" value="Enviar">
        </form>
        <div style="text-align: center; margin-top: 1rem;">
            <a href="index.php" style="text-decoration: none;">
                <input type="button" value="Regresar" style="background-color: #6c757d; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem;">
            </a>
        </div>
    </div>
</body>

</html>
<?php

?>