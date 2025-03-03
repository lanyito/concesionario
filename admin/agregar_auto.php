<?php
$conexion = mysqli_connect('localhost', 'root', '', 'autos');

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Brand = isset($_POST['brand']) ? mysqli_real_escape_string($conexion, $_POST['brand']) : null;
    $Model = isset($_POST['model']) ? mysqli_real_escape_string($conexion, $_POST['model']) : null;
    $Year = isset($_POST['year']) ? mysqli_real_escape_string($conexion, $_POST['year']) : null;
    $Price = isset($_POST['price']) ? mysqli_real_escape_string($conexion, $_POST['price']) : null;
    $Description = isset($_POST['description']) ? mysqli_real_escape_string($conexion, $_POST['description']) : null;

    $Image = isset($_FILES['Image']['name']) ? $_FILES['Image']['name'] : null;
    $target_dir = "imagenes/autos/";
    $target_file = $Image ? $target_dir . basename($Image) : null;

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0775, true);
    }

    if ($Image && $target_file) {
        $ImageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES['Image']['tmp_name']);

        if ($check !== false) {
            if (move_uploaded_file($_FILES['Image']['tmp_name'], $target_file)) {
                $sql = "INSERT INTO autos (Brand, Model, Year, Price, Description, Image) 
                        VALUES ('$Brand', '$Model', '$Year', '$Price', '$Description', '$Image')";

                if (mysqli_query($conexion, $sql)) {
                    echo "Car added successfully!";
                } else {
                    echo "Error: " . mysqli_error($conexion);
                }
            } else {
                echo "Error uploading the image.";
            }
        } else {
            echo "The file is not an image.";
        }
    } else {
        echo "Please select an image.";
    }
}
