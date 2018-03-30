<?php

namespace App\Controllers;

use App\Core\App;

abstract class Controller
{
	private $app;

	private $view;

	public function __construct(App $app)
	{

        date_default_timezone_set('Asia/Ho_Chi_Minh');
		$this->app = $app;
	}

	protected function app()
	{
		return $this->app;
	}
}
