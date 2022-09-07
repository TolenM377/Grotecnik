<?php

    require_once "modelo/producto.php";
    /**
    * Clase principal, es la ecargada de redireccionar a la vista principal del sistema,
    * en este caso el inisio de sesion
    */

    class InicioControlador
    {
        private $modelo;
        //Controlador principal

        //Construtor
        public function __CONSTRUCT()
        {
            $this->modelo = new Producto();
        }

        //Llamado a la vista principal (Inicio de sesion)
        public function Inicio()
        {
            require_once "vista/inicio/principal.php";
        }
    }
