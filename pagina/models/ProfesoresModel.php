<?php
require_once __DIR__ . '/../config/database.php';

class ProfesoresModel {
    
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM profesores");
        return $stmt->fetchAll();
    }

    public function getById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM profesores WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }
}
?>