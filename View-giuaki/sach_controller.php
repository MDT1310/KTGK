<?php
require_once('sach_model.php');

class Sach_Controller {
    public $model;

    public function __construct($db) {
        $this->model = new Sach_Model($db);
    }

    public function hienThiDanhSachSach() {
        $danhSachSach = $this->model->layDanhSachSach();
        include('sach_view.php');
    }
}
?>
