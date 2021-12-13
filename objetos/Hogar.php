<?php
    class Hogar
    {
        private $direccion;
        private $habitantes; //array

        public function __construct($direccion)
        {
            $this->direccion = $direccion;
            $this->habitantes = [];
        }
        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }
        public function agregarHabitante($unaPersona)
        {
            array_push($this->habitantes,$unaPersona);
        }
        public function cantidadHabitantes()
        {
            return count($this->habitantes);
        }
    }
?>