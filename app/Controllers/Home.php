<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
	{
		$this->session = session();
	}

	public function index()
	{
		$data = [
			'title' => 'Fantastic Store',
			'home' => true
		];

		return view('home', $data);
	}
}