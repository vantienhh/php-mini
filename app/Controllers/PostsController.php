<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController extends Controller
{

    private function noLogin(){
        if (!isset($_COOKIE['userLogin'])) {
           return header('Location:/');
        }
    }

    public function index()
    {
        $this->noLogin();
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
        $this->noLogin();
        include __DIR__ . "/../Views/admin/post/create.view.php";
    }

    public function create(){
        $this->noLogin();
        // Nếu người dùng click Upload
        if (isset($_POST['uploadclick']))
        {
            // Nếu người dùng có chọn file để upload
            if (isset($_FILES['avatar']))
            {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if ($_FILES['avatar']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    // Upload file
                   $test = move_uploaded_file($_FILES['avatar']['tmp_name'], './../public/images/'.$_FILES['avatar']['name']);
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
            }
        }

        unset($_POST['uploadclick']);  //Xóa uploadclick trong mảng
        $_POST['date_time']=date('Y-m-d H:i:s'); //Thêm date vào mảng
        $url='/../images/'.$_FILES['avatar']['name'];   //Lấy URL của ảnh
        $_POST['image']=$url;

        $posts= $this->setupQuery()->create($_POST);
        header('Location: /admin/post');
    }

     //detail
    public function detail(){
        $this->noLogin();
        $posts = $this->setupQuery()->find($this->arrId($_GET['ID']));

        return $this->app()->view('admin/post/detail', ['posts' => $posts]);
    }

    // update
    public function edit(){
        $this->noLogin();
        $posts = $this->setupQuery()->find($this->arrId($_GET['ID']));

        return $this->app()->view('admin/post/update', ['posts' => $posts]);
    }

    public function update(){
        $this->noLogin();
        unset($_POST['btnUpdate']);

        $posts = $this->setupQuery()->update($_POST);

         header('Location: /admin/post');
    }

    //delete
    public function delete(){
        $this->noLogin();
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
