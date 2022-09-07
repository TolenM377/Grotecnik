<?php

require_once "modelo/usuario.php";
require_once "modelo/producto.php";
class UsuarioControlador
{
    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo = new Usuario();
    }

    public function validar()
    {
        $titulo = "a";
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $respuesta=$this->modelo->validar($correo, $password);

        if ($respuesta > 0) {
            header("location:?c=producto");
        } else {
            header("location:?c=inicio");
        }
    }
}
