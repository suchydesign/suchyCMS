<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		echo "this is the web!";
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */