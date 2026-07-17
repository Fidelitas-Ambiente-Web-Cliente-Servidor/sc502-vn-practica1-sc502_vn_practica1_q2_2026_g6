<?php

require_once __DIR__ . '/../config/database.php';

class CursosModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM cursos");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getByCategory($cat)
    {
        $stmt = $this->db->prepare("SELECT * FROM cursos WHERE categoria = :categoria");
        $stmt->execute(['categoria' => $cat]);

        return $stmt->fetchAll();
    }
}