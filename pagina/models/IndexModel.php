<?php

require_once __DIR__ . '/../config/database.php';

class IndexModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM cursos_destacados");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}