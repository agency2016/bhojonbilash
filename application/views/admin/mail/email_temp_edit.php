<style>
    .trumbowyg-box, .trumbowyg-editor {
        margin: 0!important;
    }
</style>
<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-8 add_user_shadow">
            <div class="hero-unit" style="margin-top: 40px;">
              <a class="pull-right" href="<?php echo base_url('dashboard/templates') ?>"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
                <?php
                $row = $record->row();
                ?>
              <h2 class="custom_heading editor_header"><?php echo get_string('edit_email_temp')?></h2>
                <form id="frm" method = 'post' action="<?php echo base_url('email_template/update_templat') ?>" >
                    <input type="hidden" name="email_template_id" value="<?php echo $row->template_id; ?>">
                    <input type="text" name="mail_header" value="<?php echo $row->template_head; ?>" placeholder="Header" class="editor_header" style="width: 100%;  height: 35px; font-size: 20px; font-weight: bold; margin-bottom: 20px; margin-top: 20px;">
                    <textarea id="mail_body" name="mail_body">
                        <?php echo $row->template_body; ?>
                    </textarea>
                    
                    <button type='submit' class="btn btn-drugbd editor_header "> <?php echo get_string('submit')?></button>
                </form>
               
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
      $('#mail_body').trumbowyg();
  });
    
                
 </script>

