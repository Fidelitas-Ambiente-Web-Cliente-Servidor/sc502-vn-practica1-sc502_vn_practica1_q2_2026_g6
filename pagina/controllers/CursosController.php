<?php

require_once __DIR__ . '/../models/CursosModel.php';

class CursosController
{
    public function index()
    {
        $model = new CursosModel();

        $categoria = $_GET['categoria'] ?? 'todos';

        if ($categoria === 'todos') {
            $cursos = $model->getAll();
        } else {
            $cursos = $model->getByCategory($categoria);
        }

        require_once __DIR__ . '/../views/cursos.php';
    }
}