<?php

//controller for all functions related to admin 
class Dashboard extends Vb_Controller {

   private  $js_css_array = array('vb_css'=>array('vb_admin'),'vb_js'=>array('admin_user'));

    public function __construct() {
       
        parent::__construct($this->js_css_array);
   
    }
    /**
     * dashboard home
     */
    public function index() {
        $data = array();
        $this->_render_admin('dashboard/dashboard_home',$data);
    }// end of func dashboard
    
    
}
// end of class
?>
