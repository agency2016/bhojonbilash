<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Languageswitcher extends CI_Controller
{
    public function __construct() {
        parent::__construct(); 
        
    }
 
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "bangla";
        $this->session->set_userdata('vb_site_lang', $language);
        
        redirect($_SERVER['HTTP_REFERER']);
        
    }
}