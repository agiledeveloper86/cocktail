<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class phpctrl extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    

    public function index()
    {   
        $this->load->view('core_views/head_main');
        $this->load->view('practice/bucky/5_php/php_index');
        $this->load->view('core_views/foot_main');


    }

}