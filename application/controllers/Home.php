<?php
class Home extends Vb_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {
        $data = array();
        $css_js = array();
        $this->_render('home/home', $data, $css_js);
    }
    public function error_not_found() {
        $this->_render('home/error');
    }

    public function contact() {
        $data = array();
        $css_js = array('vb_css'=>array('vb_admin'));
        $this->_render('home/contact',$data,$css_js);
        //$this->_render('home/contact');
    }

    public function faq() {
        $data = array();
        $css_js = array('vb_css'=>array('vb_admin'));
        $this->_render('home/faq',$data,$css_js);
        //$this->_render('home/contact');
    }

    public function about() {
        $data = array();
        $css_js = array('vb_css'=>array('vb_admin'));
        $this->_render('home/about',$data,$css_js);
    }

    public function privacy() {
        $this->_render('home/privacy');
    }

    public function terms() {
        $this->_render('home/terms');
    }


}?>