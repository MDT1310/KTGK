<?php
session_start();
$_SESSION["IsLogin"] = false;
// Kết nối CSDL
$uri = "mysql://avnadmin:************************@mysql-e06b633-dat1310200310a6-1d63.l.aivencloud.com:13731/quanlysach?ssl-mode=REQUIRED";
$fields = parse_url($uri);
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];
$conn .= ";dbname=" . ltrim($fields["path"], '/');
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);

    // Khởi tạo controller và hiển thị danh sách sách
    require_once('sach_controller.php');
    $controller = new Sach_Controller($db);
    $controller->hienThiDanhSachSach();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
