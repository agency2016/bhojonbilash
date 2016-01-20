<script>
    $(document).ready(function () {
        $('#quantity').parent().hide();
        if($('#manage_stock').prop('checked')){
            $('#quantity').parent().show();
        }
        $('#manage_stock').click(function(){
            if($(this).prop('checked')){
                $('#quantity').parent().show();
            }
            else{
                $('#quantity').parent().hide();
            }
        });
        $('#product_desc').trumbowyg();
        $('#small_desc').trumbowyg();
        $('#sale_start').datepicker({ dateFormat: 'yy-mm-dd' });
        $('#sale_end').datepicker({ dateFormat: 'yy-mm-dd' });
        
            var config = {
         '.chosen-select'           : {},
         '.chosen-select-deselect'  : {allow_single_deselect:true},
         '.chosen-select-no-single' : {disable_search_threshold:10},
         '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
         '.chosen-select-width'     : {width:"95%"}
       }
       for (var selector in config) {
         $(selector).chosen(config[selector]);
       }
    });
    $('.addCategory').click(function(e){
       e.preventDefault();
       $('#categoryType').val($(this).attr('data-type'));
       $("#category_name").val('');
       $('#addCategory').modal('show');
    });
    

    $("#click_to_upload").click(function () {
        $('#product_photo').trigger('click');
    });

    function add_category() {
        var cat_data = {
            name: $("#category_name").val(),
            type: $("#categoryType").val(),
           
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
                    if(result.type== 1){
                        
                        $('select[name="categories[]"]').append('<option selected value="'+result.get_insert_id+'">'+result.category_name_bn+'</option>');
                       
                        $('select[name="categories[]"]').trigger("chosen:updated");
                    }
                    else{
                        $('select[name="tags[]"]').append('<option selected value="'+result.get_insert_id+'">'+result.category_name_bn+'</option>');
                       
                        $('select[name="tags[]"]').trigger("chosen:updated");
                    }
                }
                else {
                    $("#addCategory").modal('hide');
                    
                }
            }
        });
    } 
    document.getElementById("product_photo").onchange = function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("click_to_upload").src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    };
</script>
<script>
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    }, "<?php echo get_string('jquery_select_box_error')?>");
   
    $('#admin-dashboard-product').validate({
        ignore: [],
        rules: {
            title_bn: {
                required: true
            },
            take_times: {
                required: true
            },
             generic_name: {
                required: true
            },
            categories: {
                required: true,
                valueNotEquals: "0"

            },
           product_desc: {
                required: true

            },
            regular_price: {
                required: true,
                range: [1, 2000000]

            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>
