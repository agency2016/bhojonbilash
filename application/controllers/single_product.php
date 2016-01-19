<?php

class Single_product extends Vb_Controller{
    public function single_view($product_id=''){
        $this->_render('food/single_food_v');
    }
}
