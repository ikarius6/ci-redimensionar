<?php
    /*
     *   DEMO - Mr.Jack (https://keybase.io/mrjack)
     */
    require_once("redimensionar.php");
    
    $jpg_normal = "./normal.jpg";
    $jpg_resized = "./thumb.jpg";
    $png_normal = "./normal.png";
    $png_resized = "./thumb.png";
    
    // $imagen, $width, $height, $crop=true, $destino="", $watermark=""
    // Si crop = false, entonces se mantiene el radio de la imagen tomando las dimensiones como valores máximos
    // Si no se especifica el destino se redimensiona la imagen fuente
    // Si se especifica el watermark, se agrega una marca de agua en la esquina inferior derecha
    
    redimensionar( $jpg_normal, 300, 300, true, $jpg_resized);
    redimensionar( $png_normal, 300, 300, true, $png_resized);
    
    // Ver archivos resultantes en thumb.jpg y thumb.png