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
		
		if (!empty($_POST['text']))
		{
			$viewdata['message'] = $_POST['text'];
		}
		
		echo $this->template->render("demo/index", $viewdata);
	}
}