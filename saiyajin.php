<?php

class Saiyajin 
{
    public $nombre; // Si no le damos un valor, php lo transforma en null
    public $nivel_pelea; // con int, le estoy dando un tipado especifico, en este caso que sea de numero entero 
    public string $clase = 'Saiyajin';

    public function __construct($nombre, $nivel) // Este metodo se ejecuta automaticamente, se usa para definir o dar valor a los atributos que queremos de la clase.Tambien puedo poner las propiedades de las clases en los paramtros del constructor.
    {
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel;
    }

    public function Saludar($texto="Hola soy ") 
    {
       return $texto . $this->nombre; 
    }

    public function NivelDePelea()
    {
        return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea y pertenece a la clase $this->clase";
    }
}


class SuperSaiyajin extends Saiyajin // extends sirve para extender o heredar todas las caracteristicas (metodos, atributos) siempre y cuando no sean privados (tienen que ser public) el extends es el hijo de la clase padre (en este caso SuperSiyajin es el hijo de la clase Saiyajin)
{
    public string $clase = 'Super Saiyajin';

    public function transformacion()
    {
        if($this->nivel_pelea >= 1500){
            $texto = "$this->nombre se tranformo en $this->clase";
        } else $texto = "$this->nombre NO se tranformo en $this->clase";

        return $texto;
    }
}

    $goku = new Saiyajin(nivel:1000, nombre:'Goku');
    echo $goku->NivelDePelea();

    echo "<br><br>";

    $vegeta = new Saiyajin('Vegeta', 980);
    echo $vegeta->NivelDePelea();

    echo "<br><br>";

    $gohan = new SuperSaiyajin(nivel:1500, nombre:'Gohan');
    echo $gohan->NivelDePelea();

    echo "<br><br>";

    echo $gohan->transformacion();