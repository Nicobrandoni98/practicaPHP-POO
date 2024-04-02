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

        public function Saludar ($texto="Hola soy ") 
        {
        return $texto . $this->nombre; 
        }

        public function NivelDePelea()
        {
            return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea y pertenece a la clase $this->clase";
        }
    }