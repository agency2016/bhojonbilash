<div class="container-fluid drugbd_wrapper">
   
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-9">

            <h1 class="text-center custom_heading"><?php echo get_string('email_temp_list')?></h1>
            <a href="<?php echo base_url(); ?>template/create" class="btn btn-drugbd" data-title="Add"><span class="glyphicon glyphicon-plus"></span><?php echo get_string('add_new_temp')?></a>
            
            <?php
            if($record){
            foreach ($record->result() as $row) {
                ?>
                <div class="row">
                    <div class="col-md-11 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="text-center template_header custom_heading" data-id="<?php echo $row->template_id; ?>"><?php echo $row->template_head; ?></h4>
                            </div>
                            <div class="panel-body template_body" data-show="0" style="display:none;" data-id="body_<?php echo $row->template_id; ?>" style="text-align: justify;">
                                <?php echo $row->template_body; ?>
                            </div>
                            <div class="panel-footer pull-right">
                                <td><a href="<?php echo base_url(); ?>template/edit/<?php echo $row->template_id; ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> <?php echo get_string('edit')?></a></td>
                                <td><button onclick="delete_email(<?php echo $row->template_id; ?>)" class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span> <?php echo get_string('remove')?></button></td>
                            </div>
                        </div>
                    </div>               
                </div>
                
                <?php
                }// end of foreach
            }
            ?>

        </div>
    </div>
</div>
<!--end container fluid-->



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading"><?php echo get_string('delete_email_temp')?></h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> <?php echo get_string('con_temp_delete')?></div>

            </div>
            <div class="modal-footer ">
                <button id="delet_confirm" value="1" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> <?php echo get_string('yes')?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <?php echo get_string('no')?></button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<script>

    function delete_email(email_id) {
        $('#delete').modal('show');
        $('#delet_confirm').on('click', function (e) {
            e.preventDefault();
            var sure = $("#delet_confirm").val();
            if (sure == 1) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>index.php/email_template/email_temp_delete',
                    data: {email_id: email_id},
                    async: false,
                    success: function (result) {
                        $("#delete").modal('hide');
                        swal('',result);
                        location.reload();
                    }
                });

            }
        });
    }
    
    $('.template_header').click(function(){
        $('.template_body[data-id !=body_'+id+']').slideUp();
        var id = $(this).attr('data-id');
        var show = $('.template_body[data-id=body_'+id+']').attr('data-show');
        if(show == '0'){
            $('.template_body[data-id=body_'+id+']').attr('data-show','1');
            $('.template_body[data-id=body_'+id+']').slideDown();
        }
        else{
            $('.template_body[data-id=body_'+id+']').attr('data-show','0');
            $('.template_body[data-id=body_'+id+']').slideUp();
        }
         
    });

</script>


