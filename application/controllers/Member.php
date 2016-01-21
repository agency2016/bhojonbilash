<?php

class Member extends Vb_Controller
{
    public function complete_profilr()
    {
        $data = array();
        $css_js = array();
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

        } else {
            $this->_render('user/edit_profile', $data, $css_js);
        }
    }
}