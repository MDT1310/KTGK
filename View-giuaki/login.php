<?php
session_start();
$_SESSION["IsLogin"] = false;

require_once('login_controller.php');

// Kết nối CSDL
$uri = "mysql://avnadmin:************************@mysql-e06b633-dat1310200310a6-1d63.l.aivencloud.com:13731/defaultdb?ssl-mode=REQUIRED";
$fields = parse_url($uri);
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];
$conn .= ";dbname=" . ltrim($fields["path"], '/');
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);

    // Xử lý đăng nhập khi nhận được dữ liệu từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['usernameForm'];
        $password = $_POST['passwordForm'];

        $controller = new Login_Controller($db);
        $controller->processLogin($username, $password);
    }

    // Hiển thị form đăng nhập
    include('login_view.php');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
