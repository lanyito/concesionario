<?php
// Incluir el header
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autos</title>
    <style>
        /* contrala la estructura de la pagna */
        body,
        html {
            margin: 0;
            padding: 0;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        /* Controla todo el contenido */
        .page-wrapper {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        h1 {
            margin: 20px;
            color: #333;
            text-align: center;
        }

        /* editar las tarjetas */
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-grow: 1;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%;
            padding: 20px;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .card h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <header>
            <h1>Panel de Administración</h1>
        </header>


        <div class="content-wrapper">
            <div class="card ferrari">
                <h1>Ferrari</h1>
                <img src="imagenes/ferrari/principal.webp" alt="Ferrari">
                <p>La Ferrari es un fabricante italiano de automóviles deportivos de lujo,<br> conocido por su rendimiento excepcional y su diseño icónico.</p>
            </div>

            <div class="card mercedes">
                <h1>Mercedes-Benz</h1>
                <img src="imagenes/mercedes bens/principal.jpg" alt="Mercedes-Benz">
                <p>Mercedes-Benz es una marca alemana de automóviles de lujo,<br> famosa por su ingeniería avanzada y su compromiso con la calidad y la innovación.</p>
            </div>

            <div class="card honda">
                <h1>Honda Civic</h1>
                <img src="imagenes/honda civic/frente.jpg" alt="Honda Civic">
                <p>El Honda Civic es un automóvil compacto japonés,<br> conocido por su fiabilidad, eficiencia de combustible y diseño moderno.</p>
            </div>

            <div class="card ford">
                <h1>Ford Mustang</h1>
                <img src="imagenes/fordmustan/frente.jpg" alt="Ford Mustang">
                <p>El Ford Mustang es un automóvil deportivo icónico estadounidense,<br> conocido por su diseño agresivo y su potente rendimiento.</p>
            </div>
        </div>


    </div>

</body>

</html>

<?php
include 'includes/footer.php';
?>