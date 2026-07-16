<?php

require_once __DIR__ . '/../models/IndexModel.php';

class IndexController
{
    public function index()
    {
        $model = new IndexModel();

        $cursos = $model->getAll();

        require_once __DIR__ . '/../views/index.php';
    }
}