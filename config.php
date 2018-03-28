<?php

return [

	'database' => [
		'driver'   => 'mysql',
		'host'     => 'localhost',
		'database' => 'php-mini',
		'username' => 'root',
		'password' => 'root',
		'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
	],

];
