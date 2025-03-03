<?php
// Obtener la página actual
$current_page = basename($_SERVER['PHP_SELF']);

// Definir la ruta de las imágenes y los enlaces del menú según la página actual
if ($current_page == "index.php") {
    $image_path = "imagenes/header/";
    $link_prefix = "";
} else {
    $image_path = "../imagenes/header/";
    $link_prefix = "../";
}
?>

<header style="position: relative; width: 100%; height: 50rem; background-image: url('<?php echo $image_path; ?>header2.jpg'); background-size: cover; background-position: center;">
    <div style="position: absolute; top: 20px; left: 20px; display: flex; align-items: center;">
        <img src="<?php echo $image_path; ?>logo2.jpg" alt="Logo del Concesionario" style="width: 10rem; height: auto;">
    </div>

    <nav style="position: absolute; top: 20px; right: 20px;">
        <ul style="list-style: none; display: flex; gap: 1rem;">
            <li><a href="<?php echo $link_prefix; ?>index.php" style="color: white;">Inicio</a></li>
            <li><a href="<?php echo $link_prefix; ?>paginas/sobre-nosotros.php" style="color: white;">Sobre Nosotros</a></li>
            <li><a href="<?php echo $link_prefix; ?>paginas/politica-privacidad.php" style="color: white;">Política de Privacidad</a></li>
            <li><a href="<?php echo $link_prefix; ?>contacto.php" style="color: white;">Contacto</a></li>
        </ul>
    </nav>
</header>