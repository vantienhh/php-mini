<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $postPage=$this->setupQuery()->page();

        $num_page=$this->setupQuery()->num_page;

        // $posts = $this->setupQuery()->selectAll();

        return $this->app()->view('admin/post/index', ['posts' => $postPage, 'num_page'=>$num_page]);
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

        header('Location: /admin/post');
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

         header('Location: /admin/post');
    }

    //delete
    public function delete(){
        $posts= $this->setupQuery()->delete($this->arrId($_GET['ID']));

         header('Location: /admin/post');
    }

    //general
    private function arrId($id){
       return  $arr = explode(" ",$id);  //chuyển chuỗi thành mảng
    }

    private function setupQuery() {
        return $this->app()->database->on(Post::class);
    }
}
