<?php

class User extends Vb_Controller{
    public function profile($product_id=''){
        $this->_render('user/user_profile');
    }
}
