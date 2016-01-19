<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['site_title'] = 'Drug BD';
$config['site_description'] = 'Description';
$config['site_author'] = 'Agency Delta';
$config['site_keywords'] = 'Drugbd prescription';

$config['googleplus']['application_name'] = 'drugbd';
$config['googleplus']['client_id']        = '767006765182-0rcrii6bu4cjtfrmcsb4e65keuj6ot8f.apps.googleusercontent.com';
$config['googleplus']['client_secret']    = '4MFCufi_hx5jeupy60yjqtGu';
$config['googleplus']['redirect_uri']     = 'http://localhost/agencydelta/drugbd';
$config['googleplus']['api_key']          = 'AIzaSyC0AKCcp7DiBbUNPv2nwZrzF48ZyAtApBU';
$config['googleplus']['scopes']           = array('email');

//localhost email settings
$config['to_email'] = 'maria@agencydelta.com';


$config['local_email'] = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'adbd.test1@gmail.com', // change it to yours
            'smtp_pass' => 'agencydelta123', // change it to yours
            'mailtype' => 'html',
            'charset' => 'UTF-8',
            'wordwrap' => TRUE
          );


/* End of file custom.php */
/* Location: ./application/config/development/custom.php */