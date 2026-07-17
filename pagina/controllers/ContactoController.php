<?php

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController
{
    public function index()
    {
        require_once __DIR__ . '/../views/Contacto.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect(
                'error',
                'El formulario debe enviarse mediante POST.'
            );
        }

        $nombre = trim($_POST['nombre'] ?? '');
        $correo = trim($_POST['correo'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $asunto = trim($_POST['asunto'] ?? '');
        $mensaje = trim($_POST['mensaje'] ?? '');

        if (
            $nombre === '' ||
            $correo === '' ||
            $telefono === '' ||
            $asunto === '' ||
            $mensaje === ''
        ) {
            $this->redirect(
                'error',
                'Todos los campos son obligatorios.'
            );
        }

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->redirect(
                'error',
                'El correo electrónico no es válido.'
            );
        }

        if (!preg_match('/^[0-9+\-\s()]{8,20}$/', $telefono)) {
            $this->redirect(
                'error',
                'El número de teléfono no es válido.'
            );
        }

        try {
            $model = new ContactoModel();

            $guardado = $model->create(
                $nombre,
                $correo,
                $telefono,
                $asunto,
                $mensaje
            );

            if ($guardado) {
                $this->redirect(
                    'success',
                    'El mensaje fue enviado correctamente.'
                );
            }

            $this->redirect(
                'error',
                'No fue posible guardar el mensaje.'
            );
        } catch (Throwable $error) {
            $this->redirect(
                'error',
                'Ocurrió un error al guardar el mensaje.'
            );
        }
    }

    private function redirect(string $type, string $message)
    {
        $query = http_build_query([
            'controller' => 'contacto',
            'action' => 'index',
            $type => $message
        ]);

        header("Location: index.php?$query", true, 303);
        exit;
    }
}