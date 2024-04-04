<?php
    // PARA HACER USO DEL AUTOLOEADER TENGO QUE HACER USO DE LOS NAMESPACE
    /* spl_autoload_register(function($clase){
        echo $nombre_archivo = $clase . '.php';
        if (file_exists($nombre_archivo)){
            require $nombre_archivo;
        }
    }); */

    // con el autoloader ese cargan estos archivos automaticamente

    require "./App/Traits/TecnicasSimples.php";
    require "./App/Traits/TecnicasEspeciales.php";
    require "./App/Traits/TecnicasCombinadas.php";
    require "./App/Clases/Saiyajin.php";
    require "./App/Clases/SuperSaiyajin.php"; 

    $goku = new Saiyajin(nivel:1000, nombre:'Goku');// Le puedo aclarar con el nombre del parametro cual es el valor (asi no importa en que posicion ponga los parametros, pero si no pongo el nombre del parametro con el valor, si tenemos que respetar las posiciones).
    echo $goku->AumentarVelocidad();

    echo "<br><br>";

    $vegeta = new Saiyajin('Vegeta', 980);
    echo $vegeta->AumentarKi();

    echo "<br><br>";

    $gohan = new SuperSaiyajin(nivel:1500, nombre:'Gohan');
    echo $gohan->UsarKameHameHa();

    echo "<br><br>";

    echo $gohan->NuevoMetodo();


   // echo Saiyajin::MostrarColorCabello(); // :: se lo conoce como operador de resolucion, me permite acceder a elementos estaticos, constantes y sobrescribir propiedades o metodos de una clase.