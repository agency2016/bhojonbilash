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

}
