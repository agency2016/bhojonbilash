<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-10">
            <h2 class="custom_heading text-center"><?php echo get_string('order_list') ?></h2>


            <?php
            if ($record) {
                $record = $record->result();
                ?>
                <div class="table-responsive">
                    <table id="orderTable" class="table table-bordred table-striped table-responsives">
                        <thead>
                        <th><?php echo get_string('order_invoice_number') ?></th>
                        <th><?php echo get_string('dtname') ?></th>
                        <th><?php echo get_string('address') ?></th>
                        <th><?php echo get_string('phone') ?></th>
                        <th><?php echo get_string('order_date') ?> </th>
                        <th><?php echo get_string('price') ?></th>
                        <th><?php echo get_string('delivery_date') ?> </th>
                        <th><?php echo get_string('delivered_by') ?></th>
                        <th><?php echo get_string('details') ?></th>

                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($record as $row) {
                                ?>
                                <tr>

                                    <td><?php echo get_order_invoice_number($row->drug_order_id); ?></td>


                                    <?php
                                    if ($all_order_user[$i] === 0) {
                                        ?>
                                        <td>Guest</td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><a href="<?php echo base_url('dashboard/user/view/' . $row->user_id) ?>"><?php echo $all_order_user[$i] ?></a></td>
                                        <?php
                                    }
                                    ?>

                                    <td><?php 
                                    
                                    
                                        $addrss_a = explode(',', $row->address_bn );
                                        $count = count($addrss_a);
                                        $zillas = get_zilla();
                                        $addrss_a[$count-1] = $zillas[(int)($addrss_a[$count-1]-1)];
                                        $addrss_a = implode(',', $addrss_a);
                                        echo ($addrss_a); 
                                                
                                    ?></td>
                                    <td><?php echo reverse_number($row->mobile_number) ?></td>
                                    <td><?php echo reverse_date($row->date) ?></td>
                                    <td><?php echo get_string('currency') .reverse_number($row->total) ?></td>
                                    <td><?php echo reverse_date($row->delivery_date) ?></td>
                                    <?php
                                    if ($all_volentire_name[$i] === 0) {
                                        ?>
                                        <td><?php echo get_string('dsply_status') ?></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><a href="<?php echo base_url('dashboard/user/view/' . $row->delivered_by) ?>"><?php echo $all_volentire_name[$i] ?></a></td>
                                        <?php
                                    }
                                    ?>
                                    <td><a href="<?php echo base_url('dashboard/order/single/' . $row->drug_order_id) ?>"><i class="fa fa-newspaper-o"></i></a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
            } else {
                ?>
                <h1>No order found</h1>
                <?php
            }
            ?>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        
        var lang = "<?php echo site_language();?>";
        if(lang == 'bangla'){
            var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/Bangla.json';
        }
        else{
             var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/English.json';
        }
        $('#orderTable').dataTable({
        "language": {
            "url": url
        }
    } );
        
        //$('#userListtable_filter').append('<br><input type="text"/><input type="text"/>');
    });
</script>