<?php
    trait TecnicasSimples
    {
        public function AumentarVelocidad()
        {
            return "{$this->getNombre()} aumento su velocidad ";
        }

        public function AumentarKi()
        {
            return "{$this->getNombre()} aumento su KI " . $this->getNivelPelea();
        }
    }
    