<?php
    namespace App\Controllers;

    use App\Models\User;

    class LoginController extends Controller{
        public function showLoginForm(){
            include __DIR__ . "/../Views/login.view.php";
            die();
        }

        public function loginSubmit(){
            session_start();

            $_SESSION['email']=$_POST['email'];
            $_SESSION['password']=$_POST['password'];

            unset($_POST['btnLogin']);  //Xoa btnLogin trong mang

            $validate = $this->validateRequest($_POST);

            if ($validate['error']) {
                setcookie('msg',$validate['message'],time()+5);
                header('Location: /login');
            } else {
                $user = (new User())->login($this->app()->database, [$_POST['email'], $_POST['password']]);

                if (count($user)==0) {
                    header('Location: /login');
                } else {
                    header('Location: /');
                }
            }
        }

        private function validateRequest($data) {
            if ($data['email']=='' || $data['password'] == '') {
                return ['error' => true, 'message' => 'Chua du thong tin'];
            }
        }
    }
 ?>