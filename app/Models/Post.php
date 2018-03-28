<?php

namespace App\Models;
use PDO;
use App\Models\Model;
use App\Core\Database\QueryBuilder;

class Post extends Model
{
    public $table = 'posts';
}
