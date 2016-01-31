<div class="container-fluid drugbd_wrapper"> 
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-lg-9 col-md-7 col-sm-8">

            
        <form role="form" id="admin-dashboard-invoice" class='user-add-form' action="<?php echo base_url('order/deliver'); ?>" method="post">

            <div class="add_user_shadow">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                         <p class="text-right"> <a href="<?php echo base_url('dashboard/order/all')?>" class=""><i class="fa fa-arrow-circle-o-left fa-2x"></i></a></p>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required"><?php echo get_string('order_invoice_number') ?></label>
                            <input type="text" name="invoice" class="form-control" id="invoice" placeholder="<?php echo get_string('order_invoice_number') ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo get_string('delivered_by_me'); ?></label>
                            <input type="checkbox" name="byme" />
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo get_string('delivered_by');?></label>
                            <select class="form-control" name="delivered_by">
                                <?php 
                                  if($users){
                                    foreach ($users->result() as $key => $value) {
                                        echo '<option value="'.$value->user_id.'">'.$value->full_name_bn.'</option>';
                                    }
                                  }
                                ?>
                            </select>
                        </div>
                         <p class="text-center"><button type="submit" class="btn btn-drugbd"><?php echo get_string('submit') ?></button></p>


                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    }, "<?php echo get_string('jquery_select_box_error')?>");

    
    $('#admin-dashboard-invoice').validate({

        ignore: [],
        rules: {
            invoice: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>