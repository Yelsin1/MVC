<?php

class Home extends Controller
{
	public function index($name = '')
	{
		$user = $this->models('User');
		$user->name = $name;


		$this->views('home/index', ['name' => $user->name]);
	}
}