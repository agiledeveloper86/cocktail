<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jqctrl extends CI_Controller {

	function __construct()
    {
        
        parent::__construct();
    }
    

    public function index()
    {   
        $this->load->view('core_views/head_main');
        $this->load->view('practice/bucky/3_jq/jq_index');
        $this->load->view('core_views/foot_main');
    }

    
    public function vid1to4()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/001testingjq_vid1to4');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid5()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/002InlineExternalScripting_vid5');
        $this->load->view('core_views/foot_bucky');
    }

    
    public function vid6p1()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/003DocumentReadyEventvid6p1');
        $this->load->view('core_views/foot_bucky');
    }

    
    public function vid6p2()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/004DocumentReadyEventvid6p2');
        $this->load->view('core_views/foot_bucky');
    }

    public function vid7()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/005ready_vid7');
        $this->load->view('core_views/foot_bucky');
    }

    public function vid8()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/006load_vid8');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid9()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/007windowload_vid9');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid10()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/008windowunload_vid10');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid11()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/009selectors_vid11');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid12p1()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/010allselectors_vid12p1');
        $this->load->view('core_views/foot_bucky');
    }
    
    public function vid12p2()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/011selecting_particulr_area_vid12p2');
        $this->load->view('core_views/foot_bucky');
    }

    public function vid12p3()
    {   
        $this->load->view('core_views/head_bucky');
        $this->load->view('practice/bucky/3_jq/012selecting_particular_element_in_particular_area_vid12p3');
        $this->load->view('core_views/foot_bucky');
    }

}