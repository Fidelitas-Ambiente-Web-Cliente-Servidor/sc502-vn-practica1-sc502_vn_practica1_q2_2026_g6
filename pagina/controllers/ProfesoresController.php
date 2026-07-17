<?php
require_once __DIR__ . '/../models/ProfesoresModel.php';

class ProfesoresController {
    private $model;

    public function __construct() {
        $this->model = new ProfesoresModel();
    }

    public function index() {
        $modelo = new ProfesoresModel();
        $profesores = $modelo->getAll();
        require_once __DIR__ . '/../profesores.php';;
    }

    public function show() {
    $id = $_GET['id'] ?? null;
    
    if ($id) {
        $modelo = new ProfesoresModel();
        $profesor = $modelo->getById((int)$id); 
        
        require_once 'views/profesores.php';
    } else {
        header('Location: profesores.php');
    }
}
}
?>