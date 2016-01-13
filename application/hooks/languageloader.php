<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('vb_site_lang');
        
        if ($siteLang) {
            $ci->lang->load('vb',$siteLang);
            $ci->config->set_item('language', $siteLang);
        } else {
            $ci->session->set_userdata('vb_site_lang','bangla');
            $ci->lang->load('vb','bangla');
            $ci->config->set_item('language', 'bangla');
        }
    }
}