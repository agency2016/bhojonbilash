<?php

class Home extends CI_Controller {

    public function index($lang = 1) {
        $this->lang->load('vb', $lang == 1 ? 'english' : 'bangla' );
        $data['text'] = $this->lang->line('add_user');
        $this->load->view('home', $data);
    }

}
