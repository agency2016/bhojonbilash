<style>
    .three_image{
        height: 90px; 
        width: 100%;
        padding-bottom: 4px;
    }
    .arrow_position{
        margin-top: 26px;
    }
</style>
<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-9">
            <?php
            if ($order_record && $order_item) {
                $order_record = $order_record->row();
                $order_item = $order_item->result();
                ?>


                <div class="row" style="background-color: #FFF">
                    <div class="col-md-12">
                        <p><?php echo get_order_invoice_number($order_record->drug_order_id) ;?></p>
                        <p class="text-right"> <a href="<?php echo base_url('dashboard/order/all')?>" class=""><i class="fa fa-arrow-circle-o-left fa-2x"></i></a></p>

                        <div class="table-responsive">
                            <table class="table table-bordred table-striped table-responsives">
                                <thead>
                                <th><?php echo get_string('dtname')?></th>
                                <th><?php echo get_string('quantity')?></th>
                                <th><?php echo get_string('price')?></th>
                                <th><?php echo get_string('finish_date')?></th>
                                </thead>
                                <tbody>
                                    <?php
                                    $product_name = $product_name->result();
//                                    print_r($product_name);
                                    $i = 0;
                                    foreach ($order_item as $row) {
                                        ?>
                                        <tr>

                                            <td><a href="<?php echo base_url('product/detail/'.$product_name[$i]->product_id)?>"><?php echo $product_name[$i]->title_bn; ?></a></td>
                                            <td><?php echo reverse_number($row->item_qty); ?></td>
                                            <td><?php echo get_string('currency') .' ' .reverse_number($row->item_total); ?></td>
                                            <?php if($order_record->status == 1) {?>
                                             <td><?php echo reverse_date(date("d-M-Y", strtotime($row->finish_date)) );?></td>
                                            <?php }else{
                                                echo '<td>'.  get_string('not_calculated_yet').'</td>';
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "<h1>".get_string('no_data_found')."</h1>";
            }
            ?>



        </div>
    </div>
</div>