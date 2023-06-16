<?php include 'header.php'; ?>

    <!-- Aquí puedes colocar el contenido del cuerpo principal de tu página -->
    <section>
        <?php
        // Función para mostrar el título
        function mostrarTitulo($titulo) {
            echo "<h2>$titulo</h2>";
        }

        // Función para mostrar el artículo
        function mostrarArticulo($articulo) {
            echo "<article>$articulo</article>";
        }

        // Función para mostrar la imagen
        function mostrarImagen($url, $descripcion) {
            echo "<img src='$url' alt='$descripcion'>";
        }

        // Llamar a las funciones
        mostrarTitulo("Título del artículo");
        mostrarArticulo("Contenido del artículo");
        mostrarImagen("ruta/imagen.jpg", "Descripción de la imagen");
        ?>
    </section>

<?php include 'footer.php'; ?>
