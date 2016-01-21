<?php
//var_dump($this->lang->line('dashboard'));
?>

<!--<li class="switch">
    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>
    <label for="week" class="switch-label switch-label-off">বাংলা</label>
    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>
    <label for="month" class="switch-label switch-label-on">En</label>
    <span class="switch-selection"></span>
</li>-->


<!-- Page Content -->
<div class="container vb-body">

    <div class="row search-bar">
<!--            <img src="https://b.zmtcdn.com/images/homescreens/34-n.jpg">-->
        <form class="form-wrapper cf">
<!--            <button class="col-md-2 vb-search-btn test" type="submit" style="float: left">Search</button>-->

            <div class="col-md-2 col-sm-2 col-xs-12 vb-search-location dropdown toggle search-bar-space" style="float: left">
                <input id="t1" type="checkbox">
                <label for="t1"><i class="fa fa-map-marker"></i>
                    Location</label>
                <ul>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Text</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Thing</a></li>
                </ul>
            </div>

            <input class="col-md-8 col-sm-8 col-xs-12 search-bar-space" type="text" placeholder="Search here..." required>
            <button class="col-md-2 col-sm-2 col-xs-12 vb-search-btn" type="submit">Search</button>
        </form>

    </div>

    <div class="row">

        <!--            side bar-->
        <div class="col-md-2">
            <p class="lead">Shop Name</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

            <p class="lead">Popular Cuisines</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>

        <div class="col-md-8">

                <input type="checkbox" class="adbd-checkbox" />
                <span class="ck-span"></span> Public
<!---->
<!---->
<!--                <input type="radio" value="None" id="male" name="gender" checked/>-->
<!--                <label for="male" class="radio" chec>Male</label>-->
<!---->
<!--                <input type="radio" value="None" id="female" name="gender" />-->
<!--                <label for="female" class="radio">Female</label>-->


            <div class="row">
                <?php
                for($i=1;$i<=6;$i++){
                ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="">
                        <div class="caption">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="<?php echo base_url('single_product/single_view')?>">First Product</a>
                            </h4>
                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="col-md-2">
            <p class="lead">Top Coook</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

            <p class="lead">Popular Cuisines</p>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>

    </div>

</div>
<!-- /.container -->

<script>
    $(document).click(function(event) {
        if(
            $('.toggle > input').is(':checked') &&
            !$(event.target).parents('.toggle').is('.toggle')
        ) {
            $('.toggle > input').prop('checked', false);
        }
    })
</script>