<?php


    require_once "modelo/producto.php";

    /**
     * Controlador de productos: Encargada de comunicar el modelo con
     * las vista relacionadas a la gestion de productos.
     */



    class ProductoControlador
    {
        private $modelo;

        public function __CONSTRUCT()
        {
            $this->modelo = new Producto();
        }

        //Metodo Inicio: Llamado a la vista principal
        public function Inicio()
        {
            require_once "vista/header.php";
            require_once "vista/productos/index.php";
            require_once "vista/footer.php";
        }
        /**
         * Metodo encargado de recibir la peticion para mostrar el formulario,
         * ya sea para registrar o modificar productos.
         *
         * Llega la id por metodo GET, por lo tanto se evalua, mediante la funcion isset,
         * para determinar entre una u otra opcion.
         */
        public function formCrear()
        {
            $titulo="Registrar";
            $producto=new Producto();
            if (isset($_GET['id'])) {
                $producto=$this->modelo->obtener($_GET['id']);
                $titulo="Modificar";
            }
            require_once "vista/header.php";
            require_once "vista/productos/form.php";
            require_once "vista/footer.php";
        }

        /**
         * Metodo guardad: este metodo es el encargado de comunicar la vista con el modelo ,
         * para dar de alta nuevos productos.
         *
         * Se reciben los datos de la vista por medio del metodo GET, posteriormente se encapsulan
         * en un objeto de tipo Producto.
         *
         * Finalmente se hace la comparacion de la id, para determinar entre insertar y modificar.
         */
        public function guardar()
        {
            $producto = new Producto();
            $producto->setId(intval($_POST['idProducto']));
            $producto->setNombre($_POST['nombreProducto']);
            $producto->setMarca($_POST['marcaProducto']);
            $producto->setCosto($_POST['costoProducto']);
            $producto->setPrecio($_POST['precioProducto']);
            $producto->setCantidad($_POST['cantidadProducto']);

            $producto->getId() > 0 ?
            $this->modelo->actualizar($producto) :
            $this->modelo->insertar($producto);

            header("location:?c=producto");
        }

        public function borrar()
        {
            $this->modelo->eliminar($_GET['id']);
            header("location:?c=producto");
        }
    }
