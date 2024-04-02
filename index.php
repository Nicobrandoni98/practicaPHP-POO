<?php

    require "saiyajin.php";
    require "supersaiyajin.php";

    $goku = new Saiyajin(nivel:1000, nombre:'Goku');// Le puedo aclarar con el nombre del parametro cual es el valor (asi no importa en que posicion ponga los parametros, pero si no pongo el nombre del parametro con el valor, si tenemos que respetar las posiciones).
    echo $goku->NivelDePelea();

    echo "<br><br>";

    $vegeta = new Saiyajin('Vegeta', 980);
    echo $vegeta->NivelDePelea();

    echo "<br><br>";

    $gohan = new SuperSaiyajin(nivel:1500, nombre:'Gohan');
    echo $gohan->NivelDePelea();
