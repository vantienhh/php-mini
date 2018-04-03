<?php
namespace App\Controllers;

use App\Models\User;

class LogoutController extends Controller{
    public function logout(){
        session_start();
        setcookie('userLogin',"a",time()-100000);
        header('Location: /');
    }
}
 ?>