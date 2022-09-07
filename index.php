<?php

    /**
     * Programadores:
     * Ing. Tolentino Morales Arturo Israel
     * Ing. Sanchez Juarez Diego Roman
     */

    /**
     * Main Controller
     * Este modulo es el reponsable de tratar el direccionamiento,
     * organizando las direcciones, ded igual forma se asosian a un
     *controlador, dependiento la url obtenida por el metodo GET
     */

    require_once "modelo/DB.php";
    if (!isset($_GET['c'])) {
        require_once "controlador/inicio.controlador.php";
        $controlador = new InicioControlador();
        call_user_func(array($controlador,"Inicio"));
    } else {
        $controlador=$_GET['c'];
        require_once "controlador/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador();
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador,$accion));
    }
