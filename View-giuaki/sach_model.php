<?php
class Sach_Model {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function layDanhSachSach() {
        $query = "SELECT * FROM sach LIMIT 5";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
