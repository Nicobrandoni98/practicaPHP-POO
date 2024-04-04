<?php

    class Saiyajin 
    {
        //use TecnicasSimples, TecnicasEspeciales; // De esta forma llamo al Trait, si es mas de una, pongo , y agrego el otro trait
         use TecnicasCombinadas; // ACA ESTOY TRAYENDO LOS TRAITS QUE AGREGUE AL TRAIT DE TECNICAS COMBINADAS
       /*  {
            UsarKameHameHa as private; // de esta forma puedo cambiar el encapsulamiento(paso de public a private)
        } */

        private $nombre; // Si no le damos un valor, php lo transforma en null
        private $nivel_pelea; // con int, le estoy dando un tipado especifico, en este caso que sea de numero entero         
        public string $clase = 'Saiyajin';
        public static $cabello = 'Negro'; // Una propiedad o metodo static siempre tiene que ser public
        const VELOCIDAD = "Normal"; // Una constante se declara con "const" y el nombre en MAYUSCULA.

        public function __construct($nombre, $nivel) // Este metodo se ejecuta automaticamente, se usa para definir o dar valor a los atributos que queremos de la clase.Tambien puedo poner las propiedades de las clases en los paramtros del constructor.
        {
            $this->nombre = $nombre;
            $this->nivel_pelea = $nivel;
        }

        public static function MostrarColorCabello() // Puedo llamar a los metodos static desde la creacion del objeto, pero no puedo acceder a las variables static
        {
            return "Tengo el cabello de color " .self::$cabello; // dentro de un metodo estatico no puedo acceder a las variables que NO son estaticas, tienen que ser siosi estaticas, y se las llama de esa manera "self::$variable" o "NombreDeLaClase::$variable;
        }

        public function Saludar ($texto="Hola soy ") 
        {
            return $texto . $this->nombre; 
        }

        public function NivelDePelea()
        {
            return "$this->nombre tiene un nivel de pelea de $this->nivel_pelea y pertenece a la clase $this->clase";
        }

        public function getNombre()
        {
            return $this->nombre; // Cuando la variable/propiedad es privada puedo acceder a ella usando "Getter", y lo pongo en la clase hijo.
        }
        public function getNivelPelea()
        {
            return $this->nivel_pelea;
        }
    }