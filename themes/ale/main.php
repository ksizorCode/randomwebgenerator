

    <!--  contenido del cuerpo principal  -->
    <section>
        <?php
        // Funciun para mostrar el titulo
        function mostrarTitulo($titulo) {
            echo "<h2>$titulo</h2>";
        }

        // Funcion para mostrar el articulo
        function mostrarArticulo($articulo) {
            echo "<article>$articulo</article>";
        }

        // Funcion para mostrar la imagen
        function mostrarImagen($url, $descripcion) {
            echo "<img src='$url' alt='$descripcion'>";
        }

        // Llamar a las funciones
        mostrarTitulo("La programación con Miguel Esteban");
        mostrarArticulo("Temario");
        mostrarImagen("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS71cyWwe8YkoDW687pPh1YMGw9xTg8ZqM-30-cMko&s", "Descripciin de la imagen");
        ?>
    </section>

