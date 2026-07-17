<?php

require_once __DIR__ . '/../config/database.php';

class ContactoModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function create(
        string $nombre,
        string $correo,
        string $telefono,
        string $asunto,
        string $mensaje
    ): bool {
        $sql = "INSERT INTO contacto (
                    nombre,
                    correo,
                    telefono,
                    asunto,
                    mensaje
                ) VALUES (
                    :nombre,
                    :correo,
                    :telefono,
                    :asunto,
                    :mensaje
                )";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            'nombre' => $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'asunto' => $asunto,
            'mensaje' => $mensaje
        ]);
    }
}