<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

	public function index()
	{
		$data['navigation']='navigation';
		$data['body']='body';
		$this->load->view('main', $data);
	}
}
