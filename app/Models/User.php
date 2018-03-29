<?php

namespace App\Models;

use App\Models\Model;


class User extends Model
{
	public $table = 'users';

    public function login($db, $data) {
        return $db->on(__CLASS__)->fetchOne(
            'SElECT * FROM users WHERE email = ? AND password = ?',
            $data
        );
    }
}
