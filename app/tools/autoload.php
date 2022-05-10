<?php
    # Cargar todas las clases
    spl_autoload_register(function($nombre_clase) {
        include "../controllers" . $nombre_clase . '.php';
    });
?>