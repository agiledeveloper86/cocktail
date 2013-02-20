<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xhtmlctrl extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    

    public function index()
    {   
        $this->load->view('core_views/head_main');
        $this->load->view('practice/bucky/1_xhtml/xhtml_index');
        $this->load->view('core_views/foot_main');


    }

}