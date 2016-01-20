<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">

                 <h1 class="text-center custom_heading"><?php echo get_string('product_list')?></h1>
                 <a href="<?php echo base_url('dashboard/product/new')?>" class="btn btn-drugbd" ><span class="glyphicon glyphicon-plus"></span> <?php echo get_string('add_product')?></a>
                </div>
            </div>

            <div class="table-responsive">
                <table id="pListtable" class="table table-bordred table-striped table-responsives">
                    <thead>
                    <th><?php echo get_string('dtname')?></th>
                    <th><?php echo get_string('price') . "-".get_string('currency')?></th>
                    <th><?php echo get_string('dtjoin_date')?></th>
                    <th><?php echo get_string('edit')?></th>
                    <th><?php echo get_string('dtstatus')?></th>

                    </thead>
                    <tbody>
                        <?php foreach ($c_list as $row): ?>
                            <tr>

                                <td><a href="<?php echo base_url('product/detail/' . $row->product_id); ?>"><?php echo $row->title_bn; ?></a></td>

                                <td><?php echo get_price_html($row->product_id); ?></td>
                                <td><?php echo reverse_date(date("d-M-Y", strtotime($row->create_date))); ?></td>


                                <td class="action-btn"><a href="<?php echo base_url('dashboard/product/edit/' . $row->product_id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
                                <td class="action-btn"><a href="<?php echo base_url('product/delete_product/' . $row->product_id); ?>" 
                                 <?php 
                                 if($row->is_published == 1) {
                                     $msg = get_string('sure_unpublish');
                                 }
                                 else{
                                     $msg = get_string('sure_publish');
                                 }
                                    
                                 ?>
                                 <?php echo ($row->is_published == 1) ? 'onclick="return confirm(\''.$msg.'\')"><button title="Published" class="btn btn-success btn-xs"><i class="fa fa-unlock"></i>' : 'onclick="return confirm(\''.$msg.'\')"><button title="Unpublished" class="btn btn-danger btn-xs"><i class="fa fa-lock"></i>' ?></button></a></td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>

                <div class="clearfix"></div>

            </div><!-- end of table  div -->

        </div> <!-- end of col-9 div -->
    </div><!-- end of row div -->

</div><!-- end of container div -->
<script>
    $(document).ready(function () {
        //$('#pListtable').dataTable();
        //$('#userListtable_filter').append('<br><input type="text"/><input type="text"/>');
        var lang = "<?php echo site_language();?>";
        if(lang == 'bangla'){
            var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/Bangla.json';
        }
        else{
             var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/English.json';
        }
        $('#pListtable').dataTable({
                "language": {
                    "url": url
                }
            });
        
    });
</script>