<?php

    /**
     * Clase encargada de relializar la conexion a la base de datos.
     * Se utiliza la capa de abstraccion PHP PDO
     */

    class BaseDatos
    {
        public const server = "localhost";
        public const user = "root";
        public const password = "";
        public const dbname = "proyectoMvc";

        public static function Conexion()
        {
            try {
                $con = new PDO(
                    "mysql:host=".self::server.
                    ";dbname=".self::dbname.";charset=utf8",
                    self::user,
                    self::password
                );
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $con;
            } catch (PDOException $e) {
                return "Fallo:".$e->getMessage();
            }
        }
    }
