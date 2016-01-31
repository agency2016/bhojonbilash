<style>

    /*end of upload image */
    .product_shadow {
        position: relative;
        box-shadow: 0 0 2px rgb(173, 173, 173), 0 4px 2px rgb(173, 173, 173);
        padding: 4px;
        margin-bottom: 20px;
        background-color: #FFF;
    }

    .cus_single_product_img_up {

        cursor: pointer;
    }

    .cus_product_submit {
        height: 38px;
        width: 97%;
    }
</style>
<section class="main-body-content">
    <div class="container drugbd_front_wrapper drugb_wrapper_margin">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 product_shadow tree tree-menu">
                <ul class="text-center">
                <li><a href="<?php echo base_url()?>"><?php echo get_string('home')?></a></li> 
                <li><a><?php echo get_string('products')?></a><ul>
                        <?php foreach($data as $url) { ?>
                                <li><a href="<?php echo base_url().'product/detail/'.$url['product_id']?>"><?php echo $url['title_bn'];?></a></li> 

                        <?php } ?>
                       </ul>
                  </li>
                  <li><a href="<?php echo base_url('cart')?>"><?php echo get_string('cart')?></a></li> 
                  <li><a href="<?php echo base_url('about')?>"><?php echo get_string('about')?></a></li> 
                  <li><a href="<?php echo base_url('contact')?>"><?php echo get_string('contact')?></a></li> 
                </ul>
                
            </div>
        </div>
        
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('.tree').ntm();
    });
</script>
