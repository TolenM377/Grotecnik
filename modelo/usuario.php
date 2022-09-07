<?php
  class Usuario
  {
      private $id;
      private $nombre;
      private $correo;
      private $password;
      private $tipo;

      public function __CONSTRUCT()
      {
          $this->pdo = BaseDatos::Conexion();
      }

      
      public function validar($correo, $password,$pipiFtPopo)
      {
          try {
              $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE correo=? AND password=?;");
              $query->execute(array($correo, $password));
              $resultado=$query->fetch(PDO::FETCH_OBJ);
              return $resultado;
          } catch (Exception $e) {
              die($e->getMessage());
          }
      }
  }