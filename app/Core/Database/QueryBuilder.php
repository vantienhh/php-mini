<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    protected $connection;

    protected $model;

    protected $table;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function on($model)
    {
        $this->model = $model;

        $this->setTable();

        return $this;
    }

    protected function setTable()
    {
        $this->table = (new $this->model)->table;
    }

    public function selectAll()
    {
        // $statement = $this->connection->prepare("select * from {$this->table}");
        $statement = $this->connection->prepare(
            "SELECT users.ID, users.`name`,posts.title,posts.image,posts.content,posts.date_time
            FROM posts
            INNER JOIN users
            ON posts.user_id=users.ID;"
        );

        $statement->execute();

        return $statement->fetchAll( PDO::FETCH_CLASS, $this->model );
    }

    public function insert($parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $this->table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->connection->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
     //
        }
    }
        // login
    public function fetchOne($query, $params = []){
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll( PDO::FETCH_CLASS, $this->model );
    }

    public function create($params){
        $statement = $this->connection->prepare(
            "INSERT INTO {$this->table} (title,content,date_time,image) VALUES (:title,:content,:date_time,:image)",
            $params
        );
        $statement->execute($params);
    }

    public function createUser($params){
        $statement = $this->connection->prepare(
            "INSERT INTO {$this->table} (name,gender,email,password) VALUES (:name,:gender,:email,:pass1)",
            $params
        );
        $statement->execute($params);
    }

    public function delete($id){
        $statement=$this->connection->prepare(
            "DELETE FROM {$this->table} WHERE ID = ?",
            $id
        );
        $statement->execute($id);
    }

    public function findEmail($email){
        $statement=$this->connection->prepare(
            "SELECT * FROM {$this->table} WHERE email = '$email'"
        );
        $statement->execute();
        return $statement->fetchAll( PDO::FETCH_CLASS, $this->model );
     }

    public function find($id){
         $statement=$this->connection->prepare(
            "SELECT * FROM {$this->table} WHERE ID = ?",
            $id
        );
        $statement->execute($id);
        return $statement->fetchAll( PDO::FETCH_CLASS, $this->model );
    }

    public function update($data){
        $statement=$this->connection->prepare(
            "UPDATE {$this->table} SET title= :title, content=:content WHERE ID=:ID",
            $data
        );
        $statement->execute($data);
    }

    public function updateUser($data){
        // var_dump($data);
        // die();
        $statement=$this->connection->prepare(
            "UPDATE {$this->table} SET name= :name, email= :email, password= :password, gender= :gender WHERE ID=:ID",
            $data
        );
        $statement->execute($data);
    }

    public function page(){
        if (isset($_GET['p'])) {
            $page=$_GET['p'];
        }else{
            $page=1;
        }

        $num=5;  // Số bản ghi trên 1 trang
        $start=$num*($page-1);  //bản ghi bắt đầu

        //tính số trang
        $statement=$this->connection->prepare(
            "SELECT count(*) as num_row FROM {$this->table}"
        );
        $statement->execute();
        //tổng số bản ghi
        $num_row=$statement->fetchObject()->num_row;
        //tổng số page
        $this->num_page=ceil($num_row/$num);

        $query=$this->connection->prepare(
            "SELECT * FROM {$this->table} LIMIT $start,$num"
        );

        $query->execute();

        return $query->fetchAll( PDO::FETCH_CLASS, $this->model );
    }

}
