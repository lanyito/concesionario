<footer style="width: 100%; background-color: #f8f8f8; padding: 1rem; text-align: end; position: relative; bottom: 0; box-sizing: border-box;">
    <nav>
        <ul style="list-style: none; display: flex; justify-content: flex-end; gap: 15px; padding: 0; margin: 0;">
            <li><a href="../index.php" style="text-decoration: none; color: #007BFF;">Inicio</a></li>
            <li><a href="paginas/sobre-nosotros.php" style="text-decoration: none; color: #007BFF;">Sobre Nosotros</a></li>
            <li><a href="paginas/politica-privacidad.php" style="text-decoration: none; color: #007BFF;">Política de Privacidad</a></li>
            <li><a href="contacto.php" style="text-decoration: none; color: #007BFF;">Contacto</a></li>
        </ul>
    </nav>
    <p>&copy; 2025 Concesionario. Todos los derechos reservados.</p>
</footer>

<style>
    /* Mantener el footer al final de la página sin ocupar toda la altura */
    body,
    html {
        margin: 0;
        padding: 0;
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    /* Contenedor principal para asegurar que el contenido esté antes del footer */
    .page-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Asegura que el footer esté al final */
    }

    main {
        flex: 1;
        /* Ocupa el espacio restante antes del footer */
    }

    footer {
        margin-top: auto;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
    }
</style>