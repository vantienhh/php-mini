<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller
{
	public function index()
	{
		$userPage=$this->setupQuery()->page();

        $num_page=$this->setupQuery()->num_page;

        //xử lý giới tính
        foreach ($userPage as $key => $value) {
        	if ($value->gender==0) {
        		$value->gender='Nam';
        	 }else{
        	 	$value->gender='Nữ';
        	 }
        }

        return $this->app()->view('admin/user/index', ['users' => $userPage, 'num_page'=>$num_page]);
	}

	public function store()
	{
		return 'storing the user..';
	}

	//create
	public function show(){
		include __DIR__ . "/../Views/admin/user/create.view.php";
	}

	public function create(){
		$reEmail=$this->setupQuery()->findEmail($_POST['email']);

		//Kiểm tra pass và Email
		if ($_POST['pass1']!= $_POST['pass2'] || !empty($reEmail)) {
			return $this->show();
		}else{
			unset($_POST['btnLogin']);
			unset($_POST['pass2']);
			$posts= $this->setupQuery()->createUser($_POST);

       		header('Location: /admin/user');
		}
	}

	//detail
	public function detail(){
		$users= $this->setupQuery()->find($this->arrId($_GET['ID']));
		if ($users[0]->gender==0) {
			$users[0]->gender='Nam';
		}else{
			$users[0]->gender='Nữ';
		}

		return $this->app()->view('/admin/user/detail' , ['users'=>$users]);
	}

	//update
	public function edit(){
		$users=$this->setupQuery()->find($this->arrId($_GET['ID']));
		return $this->app()->view('admin/user/update',['users'=>$users]);
	}

	public function update(){
		unset($_POST['btnUpdate']);
		$users=$this->setupQuery()->updateUser($_POST);

		header('Location: /admin/user');
	}

	//delete
	public function delete(){
		$users=$this->setupQuery()->delete($this->arrId($_GET['ID']));
		header('Location: /admin/user');
	}

	 //general
    private function arrId($id){
       return  $arr = explode(" ",$id);  //chuyển chuỗi thành mảng
    }

    private function setupQuery() {
        return $this->app()->database->on(User::class);
    }
}