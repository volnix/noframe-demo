<?php

namespace Simple\Demo\Controllers;

class Demo {

	private $template;

	public function __construct()
	{
		$this->template = new \League\Plates\Template(new \League\Plates\Engine(APP_PATH . "views"));
		$this->template->layout('layouts/template');
		$this->template->site_title = "Simple Framework Demo";
	}
	
	public function index()
	{
		$viewdata = [
			'page_title' => "Simple Demo"
		];
		
		if (!empty($_POST['name']))
		{
			$user = new \Simple\Demo\Models\Users;
			$user->name = $_POST['name'];
			$user->save();
			
			$viewdata['name'] = $_POST['name'];
		}
		
		echo $this->template->render("demo/index", $viewdata);
	}
}