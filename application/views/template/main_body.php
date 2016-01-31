
<?php echo isset( $vb_header ) ? $vb_header : ''; ?>
 <?php if( $this->session->flashdata('success') ){
            ?>
            <script>
                swal({title:'',text:'<?php echo $this->session->flashdata('success');?>',html:true,type:'success',timer: 2000,
  showConfirmButton: false});
            </script>
        <?php
        }
        if( $this->session->flashdata('error') ){
            
        ?>
            <script>
                  swal({title:'',text:'<?php echo $this->session->flashdata('error');?>',html:true,type:'error',timer: 4000,
  showConfirmButton: false});
            </script>
        <?php

        }

        ?>
<?php echo $vb_page_content; ?>  

<?php echo isset( $vb_footer ) ? $vb_footer : ''; ?>