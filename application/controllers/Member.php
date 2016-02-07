<?php

class Member extends Vb_Controller
{
    public function complete_profile()
    {
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
        $this->_render('user/wishlist',$data,$css_js);

    }
    public function followers() {
        $data = array();
        $css_js = array();
        $this->_render('user/followers',$data,$css_js);

    }



}