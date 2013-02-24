<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bootstrap_controller extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    
	public function index()
	{
		echo "<h3>"."Controller for Twitter-Bootstrap"."</h3>" ;
	}

	public function scaffolding()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/scaffolding.php');
		$this->load->view('core_views/foot_main.php');
	}
	public function typography()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/base_css/typography.php');
		$this->load->view('core_views/foot_main.php');
	}

	public function table()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/base_css/table.php');
		$this->load->view('core_views/foot_main.php');
	}
	public function form()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/base_css/form.php');
		$this->load->view('core_views/foot_main.php');
	}

	public function button()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/base_css/button.php');
		$this->load->view('core_views/foot_main.php');
	}
	
	public function img_icon()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/base_css/img_icon.php');
		$this->load->view('core_views/foot_main.php');
	}

	public function dropdowns()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/components/dropdowns_buttongroups_buttondropdowns.php');
		$this->load->view('core_views/foot_main.php');
	}
	public function navs()
	{
		$this->load->view('core_views/head_main.php');
		$this->load->view('practice/bootstrap/components/navs.php');
		$this->load->view('core_views/foot_main.php');
	}

	
}