<?php

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

        public function NivelDePelea()
        {
            $nivel = $this->nivel_pelea*2;
            return "$this->nombre aumento su nivel de pelea a  $nivel";
        }
    }