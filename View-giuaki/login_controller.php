    <?php
    require_once('user_model.php');

    class Login_Controller {
        private $model;

        public function __construct($db) {
            $this->model = new User_Model($db);
        }

        public function processLogin($username, $password) {
            $user = $this->model->validateUser($username, $password);
            if ($user) {
                // Đăng nhập thành công, chuyển hướng tới trang logout
                $_SESSION["IsLogin"] = true;
                //header("Location: Logout_Controller.php");
                header("Location: sach_view.php");
                //echo "bạn đã thành công";
                exit;
            } else {
                // Đăng nhập thất bại, chuyển hướng người dùng đến trang đăng nhập lại
                header("Location: login_view.php");
                exit;
            }
        }
    }
    ?>
