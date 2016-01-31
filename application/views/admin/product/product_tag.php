<div class="container-fluid drugbd_wrapper">
   
        <div class="row">
            <?php $this->view('admin/dashboard/dashboard_menu'); ?>
            <div class="col-md-9">

                <h1 class="text-center custom_heading"><?php echo get_string('tag_list')?></h1>
                <button class="btn btn-drugbd" data-title="Add" data-toggle="modal" data-target="#addCategory" ><span class="glyphicon glyphicon-plus"></span><?php echo get_string('add_new_tag')?></button>

                <div class="table-responsive">
                    <table id="categoryListtable" class="table table-bordred table-striped table-responsives">
                        <thead>
                        
                        <th><strong><?php echo get_string('dtname')?></strong></th>
                       
                        <th><?php echo get_string('edit')?></th>
                        <th><?php echo get_string('dtstatus')?></th>
                        </thead>
                        <tbody>
                            
                            <?php 
                            if(!empty($c_list)){
                              foreach ($c_list as $result) { ?>
                                <tr>
                                    <td><?php echo $result->category_name_bn; ?></td>
                                    <td><button onclick="update_category(<?php echo "'" . $result->category_id . "','" . $result->category_name_bn . "'"; ?>)" class="btn btn-info btn-xs" data-title="Edit"><span class="fa fa-edit"></span></button></td>
                                    <td>
                                        <?php
                                            if($result->publish_status == 1){
                                                $msg = get_string('sure_unpublish');
                                                ?>
                                               <button onclick="delete_item('<?php echo $result->category_id;?>' , 0,'<?php echo $msg;?>')" value="<?php echo $result->category_id;?>" class="btn btn-success btn-xs"><span class="fa fa-unlock"></span></button>
                                           <?php }else{
                                                $msg = get_string('sure_publish');?>
                                                <button onclick="delete_item('<?php echo $result->category_id;?>' , 1,'<?php echo $msg;?>')" value="<?php echo $result->category_id;?>" class="btn btn-danger btn-xs"><span class="fa fa-lock"></span></button>
                                          <?php  }
                                        ?>
                                        
                                    </td>
                                </tr>
                            <?php }} ?>
                        </tbody>

                    </table>

                    <div class="clearfix"></div>  

                </div>
               
            </div>
        </div>
   
    <!--end container fluid-->


    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading"><?php echo get_string('edit_tag')?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input id="categoty_name_edit" value="" name="category_name_bn" class="form-control " type="text" placeholder="">
                    </div>
                   
                <div class="text-center">
                
                    <button type="button" id="update_confirm_click" class="btn btn-drugbd" ><span class="glyphicon glyphicon-ok-sign"></span> <?php echo get_string('submit')?></button>
                </div>
                
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

   
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align custom_heading" id="Heading"><?php echo get_string('add_new_tag')?></h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <input name="category_name_bn" id="category_name" class="form-control " type="text" placeholder="">
                    </div>
                   
                    <div class="text-center">
                        <button name="submit" onclick="add_category()" type="button" class="btn btn-drugbd"><span class="glyphicon glyphicon-ok-sign"></span> <?php echo get_string('submit')?></button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
     <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading"><?php echo get_string('change_status')?></h4>
                </div>
                <div class="modal-body delete-modal-body">

                   

                </div>
                <div class="modal-footer ">
                    <button id="delet_confirm" value="1" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> <?php echo get_string('yes')?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <?php echo get_string('no')?></button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        //$('#categoryListtable').dataTable();
        var lang = "<?php echo site_language();?>";
        if(lang == 'bangla'){
            var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/Bangla.json';
        }
        else{
             var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/English.json';
        }
        $('#categoryListtable').dataTable({
                "language": {
                    "url": url
                }
            });
    });
    function add_category() {
        var cat_data = {
            name: $("#category_name").val(),
            type:2
           
        };
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/category/category_add',
            data: cat_data,
            dataTpye: JSON,
            success: function (result) {
                result =JSON.parse(result);
                if (result.error == "") {
                    
                    $("#addCategory").modal('hide');
                    swal({title:'',html:true,text:result.success,'timed':2000});
                    location.reload();
                }
                else {
                    $("#addCategory").modal('hide');
                    swal({title:'',html:true,text:result.error,'timed':2000});
                }
            }
        });
    }

    function delete_item(pid,status,msg) {
        
        
        $('.delete-modal-body').html(msg)
        
        $('#delete').modal('show');
        $('#delet_confirm').on('click', function (e) {
            e.preventDefault();
            var sure = $("#delet_confirm").val();
            if (sure == 1) {
                
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>index.php/category/delete_categoty',
                    data: {cat_id: pid,status:status},
                    dataTpye: JSON,
                    success: function (result) {
                        $("#delete").modal('hide');
                        console.log(result);
                        location.reload();
                    }
                });

            }
        });
    }

    function update_category(pid, category_name) {
        $('#editCategory').modal('show');
        $("#categoty_name_edit").val(category_name);
        

        $('#update_confirm_click').click(function () {
            var _data = {
                edit_id: pid,
                name:  $("#categoty_name_edit").val(),
                
            };
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>index.php/category/edit_category',
                data: _data,
                dataTpye: JSON,
                success: function (result) {
                    console.log(result);
                    result =JSON.parse(result);
                    if (result.error == "") {

                        $("#editCategory").modal('hide');
                        swal({title:'',html:true,text:result.success,'timed':2000});
                        location.reload();
                    }
                    else {
                        $("#editCategory").modal('hide');
                        swal({title:'',html:true,text:result.error,'timed':2000});
                    }
                }
            });
        });

    }


</script>