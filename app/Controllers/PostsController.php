<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = $this->setupQuery()->selectAll();

        return $this->app()->view('admin/post/index', ['posts' => $posts]);
    }

    public function store()
    {
        return 'storing the user..';
    }

    // create
    public function createFrom(){
        include __DIR__ . "/../Views/admin/post/create.view.php";
    }

    public function create(){
        unset($_POST['btnLogin']);  //Xóa btnLogin trong mảng
        $_POST['date_time']=date('Y-m-d H:i:s'); //Thêm date vào mảng

        $posts= $this->setupQuery()->create($_POST);

        header('Location: /post');
    }

    //delete
    public function delete(){
        $posts= $this->setupQuery()->delete($this->arrId($_GET['ID']));

         header('Location: /post');
    }

    //detail
    public function detail(){

        $posts = $this->setupQuery()->find($this->arrId($_GET['ID']));

        return $this->app()->view('admin/post/detail', ['posts' => $posts]);
    }

    // update
    public function edit(){
        $posts = $this->setupQuery()->find($this->arrId($_GET['ID']));

        return $this->app()->view('admin/post/update', ['posts' => $posts]);
    }

    public function update(){
        unset($_POST['btnUpdate']);

        $posts = $this->setupQuery()->update($_POST);

         header('Location: /post');
    }

    //general
    private function arrId($id){
       return  $arr = explode(" ",$id);  //chuyển chuỗi thành mảng
    }

    private function setupQuery() {
        return $this->app()->database->on(Post::class);
    }
}
