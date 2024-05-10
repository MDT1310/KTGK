<?php
class User_Model {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function validateUser($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
