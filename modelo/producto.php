<?php


    /**
     * Clase productos: encargada de encapsular y realizar las operaciones referentes a los productos
     */


    class Producto
    {
      
        //Atributos
        private $pdo;
        private $id;
        private $nombre;
        private $marca;
        private $costo;
        private $precio;
        private $cantidad;
        private $imagen;


        //En el constructor se inicializa la variable con la clase responsable de la conexion
        //con la base de datos
        public function __CONSTRUCT()
        {
            $this->pdo = BaseDatos::Conexion();
        }

        //Metodos setter y getter
        public function getId(): ?int
        {
            return $this->id;
        }
        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function getNombre(): ?string
        {
            return $this->nombre;
        }
        public function setNombre(string $nombre)
        {
            $this->nombre = $nombre;
        }

        public function getMarca(): ?string
        {
            return $this->marca;
        }
        public function setMarca(string $marca)
        {
            $this->marca = $marca;
        }

        public function getCosto(): ?float
        {
            return $this->costo;
        }
        public function setCosto(float $costo)
        {
            $this->costo = $costo;
        }

        public function getPrecio(): ?float
        {
            return $this->precio;
        }
        public function getCantidad(): ?int
        {
            return $this->cantidad;
        }
        public function setCantidad(int $cantidad)
        {
            $this->cantidad = $cantidad;
        }

        public function getImagen(): ?string
        {
            return $this->imagen;
        }
        public function setImagen(string $imagen)
        {
            $this->imagen = $imagen;
        }

        //Obtiene el resultado de la consulata, la cual retorna la cantidad de productos
        //en la base de datos
        public function cantidadProductos()
        {
            try {
                $query = $this->pdo->prepare("SELECT SUM(cantidad) AS cantidad FROM productos");
                $query->execute();
                return $query->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Devuelve un array con todos la informacion contenida en la base de datos
        public function listar()
        {
            try {
                $query = $this->pdo->prepare("SELECT * FROM productos");
                $query->execute();
                return $query->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        /**
         * Este metodo nos permite retornar un array con la informacion
         * de un producto en especifico, esto mediante la consulta, especificando el
         * id del producto.
         */

        public function obtener($id)
        {
            try {
                $query = $this->pdo->prepare("SELECT * FROM productos WHERE id=?;");
                $query->execute(array($id));
                $resultado=$query->fetch(PDO::FETCH_OBJ);

                $producto = new Producto();
                $producto->setId($resultado->id);
                $producto->setNombre($resultado->nombre);
                $producto->setMarca($resultado->marca);
                $producto->setCosto($resultado->costo);
                $producto->setPrecio($resultado->precio);
                $producto->setCantidad($resultado->cantidad);
                return $producto;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        

        //Metodo encargado de insertar la informacion en la base de datos
        public function insertar(Producto $producto)
        {
            try {
                $this->pdo->prepare("INSERT INTO productos (nombre,marca,costo,precio,cantidad) VALUES (?,?,?,?,?);")->
                execute(array(
                    $producto->getNombre(),
                    $producto->getMarca(),
                    $producto->getCosto(),
                    $producto->getPrecio(),
                    $producto->getCantidad()
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Metodo encargado de la modificacion de un producto
        public function actualizar(Producto $producto)
        {
            try {
                $this->pdo->prepare("UPDATE productos SET nombre=?,marca=?,costo=?,precio=?,cantidad=? WHERE id=?;")->
                execute(array(
                    $producto->getNombre(),
                    $producto->getMarca(),
                    $producto->getCosto(),
                    $producto->getPrecio(),
                    $producto->getCantidad(),
                    $producto->getId()
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        //Metodo encargado de la eliminacion de los productos en la base de datos
        public function eliminar($id)
        {
            try {
                $this->pdo->prepare("DELETE FROM productos WHERE id=?")->
                execute(array($id));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
