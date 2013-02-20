<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class practice_indexctrl extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    

    public function index()
    {   
        $this->load->view('core_views/head_practice');
    	$this->load->view('practice/practice_indexvw');
        $this->load->view('core_views/foot_practice');
    }




}