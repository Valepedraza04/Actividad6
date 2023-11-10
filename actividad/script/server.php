<?php
    if(isset($_GET["datos"])){
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $documento = $_GET["documento"];
        echo "<h3>Nombre: $nombre</h3>";
        echo "<h3>Apellido: $apellido</h3>";
        echo "<h3>Cédula: $documento</h3>";
            
    }
    ?>