<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vb_Controller extends CI_Controller {

    public $default_load_list = array(
        'vb_css' => array('bootstrap.min', 'sweetalert', 'bhojonbilash', 'adbd_common'),
        'vb_js' => array('jquery','bootstrap.min'),
        'vb_font' => array('Raleway', 'Dancing Script', 'Georgia', 'Times'),
        'vb_css_footer' => array(),
        'vb_js_footer' => array()
    );
    private $page_data = array();
    private $template_data = array();
    private $title = false;
    private $description = false;
    private $keywords = false;
    private $author = false;
    protected $vb_login_user = array();

    public function __construct($extend_css_js = array()) {

        parent::__construct();
        $this->config->load('development/custom');
        $this->merging_extend_css_js($extend_css_js);
        $this->title = $this->config->item('site_title');
        $this->description = $this->config->item('site_description');
        $this->keywords = $this->config->item('site_keywords');
        $this->author = $this->config->item('site_author');
        $this->template_data['home_url'] = base_url();
        $session = ($this->session->userdata('vb_login_user'));

        if (is_array($session) && !empty($session)) {

            $this->vb_login_user = $this->session->userdata('vb_login_user');
            $this->template_data['vb_login_user'] = $this->vb_login_user;
        } else {
            $this->template_data['vb_login_user'] = array();
        }

//        $this->load->library('facebook', array(
//            'appId' => '1719088028313115',
//            'secret' => 'dcb815797e43b6e8e8d8c32b5de0953a',
//        ));
//
//        $this->template_data['fblogin_url'] = $this->facebook->getLoginUrl(array('redirect_uri' => site_url('fb/login'),
//            'scope' => array("email")));
//
//        $this->load->library('googleplus');
//
//        $this->template_data['glogin_url'] = $this->googleplus->loginURL();
    }

    /**
     * @param $extended_load_list
     */
    private function merging_extend_css_js($extended_load_list) {

        if (!empty($extended_load_list)) {
            foreach ($extended_load_list as $index => $list) {
                foreach ($list as $sort_list) {
                    if (!in_array($sort_list, $this->default_load_list[$index])) {
                        array_push($this->default_load_list[$index], $sort_list);
                    }
                }
            }
        }

        foreach ($this->default_load_list as $index => $list) {
            $this->template_data[$index] = $list;
        }
    }

    /**
     * @param $view
     * @param array $page_data
     * @param array $extend_css_js
     */
    public function _render($view, $page_data = array(), $extend_css_js = array()) {


        if (!is_array($page_data)) {
            $page_data = array();
        }
//        $page_data['all_categories_for_header'] = $this->vb_model->get_by('categories', array('type' => 1, 'publish_status' => 1));
        
        $only_content_view = false;

        if (array_key_exists('content_only', $page_data) && $page_data['content_only'] === 1) {
            $only_content_view = true;
        }
        $this->merging_extend_css_js($extend_css_js);

        $this->template_data['title'] = $this->title;
        $this->template_data['description'] = $this->description;
        $this->template_data['keywords'] = $this->keywords;
        $this->template_data['author'] = $this->author;
        $this->template_data['custom_meta'] = ' ';

        if (!$only_content_view) {
            $this->template_data['vb_header'] = $this->load->view('template/header', array_merge($this->template_data, $page_data), true);
            $this->template_data['vb_footer'] = $this->load->view('template/footer', array_merge($this->template_data, $page_data), true);
        }
        if (array_key_exists('user_only', $page_data) && $page_data['user_only'] === 1 && empty($this->vb_login_user)) {

            redirect(base_url());
        }
        $this->template_data['vb_page_content'] = $this->load->view('frontend/' . $view, $page_data, true);

        $this->template_data['vb_main_body'] = $this->load->view('template/main_body', $this->template_data, true);

        $this->load->view('template/skeleton', array_merge($this->template_data, $page_data));
    }

    public function _render_admin($view, $page_data = array(), $extend_css_js = array()) {

        // render any page
        if (!is_array($page_data)) {
            $page_data = array();
        }
//        $page_data['all_categories_for_header'] = $this->vb_model->get_by('categories', array('type' => 1, 'publish_status' => 1));
        $only_content_view = false;

        if (array_key_exists('content_only', $page_data) && $page_data['content_only'] === 1) {
            $only_content_view = true;
        }
        $this->merging_extend_css_js($extend_css_js);

        $this->template_data['title'] = $this->title;
        $this->template_data['description'] = $this->description;
        $this->template_data['keywords'] = $this->keywords;
        $this->template_data['author'] = $this->author;


        if (!$only_content_view) {
            $this->template_data['vb_header'] = $this->load->view('template/header', array_merge($this->template_data, $page_data), true);
            $this->template_data['vb_footer'] = $this->load->view('template/footer', array_merge($this->template_data, $page_data), true);
        }
        if (!empty($this->vb_login_user) && ($this->vb_login_user['vb_user_role'] == 3 || ($this->vb_login_user['vb_user_role'] == 2 && array_key_exists('permit_volunteer', $page_data) && $page_data['permit_volunteer'] === 1))) {
            $this->template_data['vb_page_content'] = $this->load->view('admin/' . $view, $page_data, true);
            $this->template_data['vb_main_body'] = $this->load->view('template/main_body', $this->template_data, true);
            $this->load->view('template/skeleton', array_merge($this->template_data, $page_data));
        } else {
            redirect(base_url('home/'));
        }
    }

    /**
     * 
     * @param type $page
     * @param type $data
     * @param type $print
     * @return type
     */
    public function view($page, $data = array(), $print = true) {
        if ($print) {
            $this->load->view($page, $data, $print);
        } else {
            return $this->load->view($page, $data, false);
        }
    }

    /**
     * Simple function for debugging
     * Just pass the argument & it'll return the print_r value
     * @param $debugArray
     */
    public function debug($debugArray) {
        echo "<pre>";
        print_r($debugArray);
        echo "</pre>";
    }

    /**
     * Get the error strings given separatedly by validation errors
     * @param $errorString
     * @return array
     */
    function getErrors($errorString) {
        $return = array();
        $errors = explode('</p>', $errorString);
        foreach ($errors as $key => $value) {
            $error = substr($value, strpos($value, '<p>') + 3);
            if ($error == '') {
                continue;
            }
            $return[] = $error;
        }
        return $return;
    }

// end of function
}
