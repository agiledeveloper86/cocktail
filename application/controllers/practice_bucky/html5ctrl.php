<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Html5ctrl extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    

    public function index()
    {   
        $this->load->view('core_views/head_main');
        $this->load->view('practice/bucky/4_html5/html5_index');
        $this->load->view('core_views/foot_main');


    }

}