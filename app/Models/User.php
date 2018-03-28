<?php

namespace App\Models;
use PDO;
use App\Models\Model;
use App\Core\Database\QueryBuilder;

class User extends Model
{
	public $table = 'users';
}
