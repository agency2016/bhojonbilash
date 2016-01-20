
<style>

    /*end of upload image */
    .product_shadow {
        position: relative;
        box-shadow: 0 0 2px rgb(173, 173, 173), 0 4px 2px rgb(173, 173, 173);
        padding: 4px;
        margin-bottom: 20px;
        background-color: #FFF;
    }
    .cus_single_product_img_up{
        
        cursor: pointer;
    }

    .cus_product_submit{
        height: 38px;
        width: 97%;
    }
</style>

<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
<div class="col-md-9">
    <form id="admin-dashboard-product" class='product-form' action="<?php echo base_url('dashboard/product/new/'); ?>" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="row product_shadow">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <div class="grid">
                                <figure class="effect-winston">
                                    <img id="click_to_upload" src="http://youvebeenshamed.co.uk/wp-content/uploads/2013/06/product-placeholder-gallery-300x300.jpg" class="img-responsive cus_single_product_img_up" alt="Responsive image">
                                    <p class="help-block">Size 450x450 preferable</p>
                                </figure>
                                <input type="file" name="product_photo" id="product_photo" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title" class="required"><?php echo get_string('trade_name') ?></label>
                            <input type="text" class="form-control" name="title_bn" id="title" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="title" class="required"><?php echo get_string('generic_name') ?></label>
                            <input type="text" class="form-control" value="" name="generic_name" id="generic_name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="title" class="required"><?php echo get_string('company_name') ?></label>
                            <input type="text" class="form-control" value="" name="company" id="company" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="required"><?php echo get_string('category') ?></label>
                            
                            <?php  
                               
                                echo form_multiselect('categories[]', $categories, 0,'class="form-control chosen-select" id="district"');
                            ?>
                            <a class="addCategory" data-type="1" ><span class="glyphicon glyphicon-plus"></span><?php echo get_string('add_category') ?></a>
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo get_string('tags') ?></label>
                            <?php  
                               
                                echo form_multiselect('tags[]', $tags, 0,'class="form-control chosen-select" id="district"');
                            ?>
                            <a class="addCategory" data-type="2" ><span class="glyphicon glyphicon-plus"></span><?php echo get_string('add_tag') ?></a>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('in_stock') ?></label>
                                    <input type="checkbox" checked  id="in_stock" name="in_stock" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('feature_product') ?></label>
                                    <input type="checkbox"  id="featured" name="featured" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName2">Seasonal<?php //echo get_string('feature_product') ?></label>
                                    <input type="checkbox"  id="is_seasonal" name="is_seasonal" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('order_always') ?></label>
                                    <input type="checkbox"  id="allow_order_out_stock" name="order_always" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <label for="exampleInputName2" class="required"><?php echo get_string('take_times') ?></label>

                                    <input type="number"  id="take_times" name="take_times" class="form-control"  placeholder="">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('manage_stock') ?></label>
                                    <input type="checkbox"  id="manage_stock" name="manage_stock" placeholder="">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('quantity') ?></label>
                                    <input type="number"  class="form-control" id="quantity" name="quantity" placeholder="">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2" class="required"><?php echo get_string('regular_price') ?></label>
                                    <input type="number"  class="form-control" id="regular_price" name="regular_price" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('sale_price') ?></label>
                                    <input type="number"  class="form-control" id="sale_price" name="sale_price" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('sale_start') ?></label>
                                    <input type="text"  class="form-control" id="sale_start" name="sale_start" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName2"><?php echo get_string('sale_end') ?></label>
                                    <input type="text"  class="form-control" id="sale_end" name="sale_end" placeholder="">
                                </div>
                            </div>
                        </div>
                        


                    </div>
                </div>
            </div>
            <div class="col-md-7">
                 <a class="pull-right" title="Back to List" href="<?php echo base_url('dashboard/products')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                <div class="form-group">
                    <h4 class="text-center"><label class="required" for="exampleInputEmail1"><?php echo get_string('product_desc') ?></label></h4>
                    <textarea id="product_desc" name="product_desc">

                    </textarea>
                </div>
                 <div class="form-group">
                    <h4 class="text-center"><label for="exampleInputEmail1"><?php echo get_string('small_desc') ?></label></h4>
                    <textarea id="small_desc" name="small_desc">

                    </textarea>
                </div>

                <button type="submit" class="btn btn-drug btn-block cus_product_submit"><?php echo get_string('submit') ?></button>

            </div>
        </div>
    </form>
</div>
</div>
</div>
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align modal-custom-head custom_heading" id="Heading"><?php echo get_string('add_new') ?></h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <input type="hidden" name="categoryType" id="categoryType"/>
                        <input name="category_name_bn" id="category_name" class="form-control " type="text" placeholder="Category Name">
                    </div>
                   
                    <div class="text-center">
                        <button name="submit" onclick="add_category()" type="button" class="btn btn-drugbd"><span class="glyphicon glyphicon-ok-sign"></span> <?php echo get_string('submit') ?></button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
</div>
<?php $this->load->view('admin/product/product_common_js');?>