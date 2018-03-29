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
        $statement = $this->connection->prepare("select * from {$this->table}");

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
        // var_dump($params);
        // die();
        $statement = $this->connection->prepare(
            "INSERT INTO {$this->table} (title,content,date_time) VALUES (:title,:content,:date_time)",
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

    public function page(){

    }
}
