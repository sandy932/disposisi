<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat extends CI_Controller {

	
	public function index()
	{
		$data = array(
			'content' => 'template_user/index'
		);

		$this->load->view('template_user/main', $data);
	}
}