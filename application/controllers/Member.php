<?php

class Member extends Vb_Controller {
    
    function __construct($extend_css_js = array()) {
        parent::__construct($extend_css_js);
        if(!$this->vb_login_user)
            redirect ('home');
    }
    
    public function my_profile(){
        $data=array();
        $css_js=array();
        $this->_render('user/my_profile',$data, $css_js);
    }
    
    public function prifile_info(){
        $data = array();
        $css_js = array();
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            
        } else {
            $this->_render('user/profile_info', $data, $css_js);
        }
    }

    public function edit_profile() {
        $data = array();
        $css_js = array();
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            
        } else {
            $this->_render('user/edit_profile', $data, $css_js);
        }
    }
    
    
    public function wishlist() {
        $data = array();
        $css_js = array();
        $this->_render('user/wishlist', $data, $css_js);
    }

    public function followers() {
        $data = array();
        $css_js = array();
        $this->_render('user/followers', $data, $css_js);
    }
    
    public function log_out(){
        $this->session->unset_userdata('vb_login_user');
        session_destroy();
        redirect('home');
    }

}
