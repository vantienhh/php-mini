<?php
    namespace App\Controllers;
    use App\Models\User;

    class LoginController extends Controller{

        public function showLoginForm(){
            return $this->app()->view('login');
        }

        public function loginSubmit(){
            session_start();
            if (isset($_POST['btnLogin'])) {
                $email=$_POST['email'];
                $pass=$_POST['password'];
                 $_SESSION['email']=$_POST['email'];
                 $_SESSION['password']=$_POST['password'];

                if ($email=='' || $pass== '') {
                    setcookie('msg','Điền đầy đủ thông tin',time()+5);
                    header('Location: /login');
                }else{
                    $user = $this->app()->database->on(User::class)->fetchOne(
                        'SElECT * FROM users WHERE email = ? AND password = ?',
                        [$email, $pass]
                    );
                    // var_dump($user);
                    if (count($user)==0) {
                        echo "Sai";
                    }else{
                        header('Location: /');
                    }
                }
            }
        }
    }

 ?>