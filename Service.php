<?php

class Service extends CI_Controller
{
	public function index()
	{
		$this->load->view('service');
	}
	
	public function get_skills()
	{
		$array = ['PHP','MySql','JavaScript','AngularJs','ExpressJs','NodeJs','Android'];
		
		/* $data = array();		
		foreach ($array as $value)
			$data[] = array('cityname'=>$value); */		
		
		echo json_encode($array);
	}
}