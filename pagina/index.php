<?php

$controller = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';

switch($controller){

    case 'index':

        require_once 'controllers/IndexController.php';

        $obj = new IndexController();

        break;

    case 'cursos':

        require_once 'controllers/CursosController.php';

        $obj = new CursosController();

        break;

    default:

        require_once 'controllers/IndexController.php';

        $obj = new IndexController();

        break;
}

$obj->$action();