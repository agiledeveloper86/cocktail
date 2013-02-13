
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Gcrud_sitectrl extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        
        /* ------------------ */ 
        $this->load->library('grocery_CRUD');
    }
 
    

    public function index()
    {
       $this->offices();
    }
    
    
    
    public function offices()
    {
        $this->grocery_crud->set_table('gcrud_offices');
        $output = $this->grocery_crud->render();
 
        $this->_offices_output($output);        
    }
 
    function _offices_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }

    

    public function employees()
    {
        $this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();
 
        $this->_employees_output($output);        
    }
 
    function _employees_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }

    

    public function customers()
    {
        $this->grocery_crud->set_table('customers');
        $output = $this->grocery_crud->render();
 
        $this->_customers_output($output);        
    }
 
    function _customers_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }
    


    public function orders()
    {
        $this->grocery_crud->set_table('orders');
        $output = $this->grocery_crud->render();
 
        $this->_orders_output($output);        
    }
 
    function _orders_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }
    

    public function products()
    {
        $this->grocery_crud->set_table('products');
        $output = $this->grocery_crud->render();
 
        $this->_products_output($output);        
    }
 
    function _products_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }


    public function films()
    {
        $this->grocery_crud->set_table('film');
        $output = $this->grocery_crud->render();
 
        $this->_films_output($output);        
    }
 
    function _films_output($output = null)
 
    {
        $this->load->view('assets_views/gcrud/gcrud_sitevw.php',$output);    
    }
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */