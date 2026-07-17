<?php

$controller = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';

switch ($controller) {

    case 'index':

        require_once __DIR__ . '/controllers/IndexController.php';
        $obj = new IndexController();

        break;

    case 'cursos':

        require_once __DIR__ . '/controllers/CursosController.php';
        $obj = new CursosController();

        break;

    case 'contacto':

        require_once __DIR__ . '/controllers/ContactoController.php';
        $obj = new ContactoController();

        break;

    default:

        require_once __DIR__ . '/controllers/IndexController.php';
        $obj = new IndexController();
        $action = 'index';

        break;
}

if (!method_exists($obj, $action)) {
    http_response_code(404);
    exit('La acción solicitada no existe.');
}

$obj->$action();