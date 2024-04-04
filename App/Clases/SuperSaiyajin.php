<?php

    class SuperSaiyajin extends Saiyajin // extends sirve para extender o heredar todas las caracteristicas (metodos, atributos) siempre y cuando no sean privados (tienen que ser public) el extends es el hijo de la clase padre (en este caso SuperSiyajin es el hijo de la clase Saiyajin)
    {
        public string $clase = 'Super Saiyajin';
        public static $cabello = 'Amarillo';
        
        public function transformacion()
        {
            if($this->getNivelPelea() >= 1500){
                $texto = "{$this->getNombre()} se tranformo en $this->clase"; //Aca iria el metodo "getter" que se encuentra en la clase padre.
            } else $texto = "{$this->getNombre()} NO se tranformo en $this->clase";

            return $texto;
        }

        public static function MostrarColorCabello()
        {
            return "Tengo el cabello de color " .self::$cabello;
        }

        /* public function NivelDePelea() // polimorfismo, una funcion o variable se comporta de distinta manera dependiendo de la clase(La function nivelDePelea() devuelve un string distinto del de el archivo saiyajin.php)
        {
            $nivel = $this->nivel_pelea*2;
            return "$this->nombre aumento su nivel de pelea a  $nivel";
        } */

        public static function NuevoMetodo()
        {
            return parent::VELOCIDAD; 
        }
    }