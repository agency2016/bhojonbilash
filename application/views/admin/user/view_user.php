<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>

        <div class="col-md-8 add_user_shadow">

    
            <h2 class="custom_heading text-center"><?php echo get_string('user_information')?></h2>

            
            <table class="table table-striped">
                <tr>
                    <td><strong><?php echo get_string('full_name')?></strong></td>
                    <td>: <?php echo $user_data->full_name_bn ?></td>
                </tr>

                <tr>
                    <td><strong><?php echo get_string('emailaddress')?></strong></td>
                    <td>: <?php echo $user_data->email ?></td>
                </tr>
                <?php
                if (!empty($user_profile_data)) {
                    ?>

                   
                    <tr>
                        <td><strong><?php echo get_string('address')?></strong></td>
                        <td>: <?php echo ucfirst($user_profile_data->address_bn) ?></td>
                    </tr>
                    <tr>
                        <td><strong><?php echo get_string('thana')?></strong></td>
                        <td>: <?php echo $user_profile_data->thana ?></td>
                    </tr>
                    
                    <tr>
                        <td><strong><?php echo get_string('district')?></strong></td>
                        <?php $zillas = get_zilla();
                            array_unshift($zillas, 'Select a District');
                        ?>
                        <td>: <?php echo $zillas[$user_profile_data->district]?></td>
                    </tr>
                    
                    <?php
                }
                ?>
               
                <tr>
                   

                        <td><strong><?php echo get_string('phone')?></strong></td>
                        <td>: <?php echo reverse_number($user_data->mobile_number)  ?></td>
                </tr>
                <tr>
                    <td><strong><?php echo get_string('dtjoin_date')?></strong></td>
                    <td>: <?php echo reverse_date(date("d-M-Y", strtotime($user_data->signup_date))); ?></td>

                </tr>
                
            </table>
            <a class="" href="<?php echo base_url('dashboard/users')?>"> <i class="fa fa-arrow-circle-left fa-2x pull-right"></i></a>
        </div>
        <div class="col-md-1 preferences">
            <?php
            if ($this->agent->is_referral()) {
                echo '<a href="' . $this->agent->referrer() . '"><i class="fa fa-times-circle fa-2x pull-right"></i></a>';
            }
            ?>
        </div>
    </div>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//print_r($user_profile_data);
