<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_controller extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    
	public function index()
	{
		$this->view1();
	}
	public function view1()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('core_views/body_main.php');
		$this->load->view('core_views/foot_main.php');
	}
	public function min()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('core_views/body_min.php');
		$this->load->view('core_views/foot_main.php');
	}
}