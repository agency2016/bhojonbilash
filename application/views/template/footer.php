<!--footer-->
<div class="container vb-footer">

<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-md-4">
            <h4 class="adbd-uppercase text-center">BhojonBilash</h4>
            <p class="adbd-capitalize text-center" > <a href="#">About </a> </p>
            <p class="adbd-capitalize text-center" > <a href="#"> Careers </a></p>

        </div>
        <div class="col-md-4">
            <h4 class="adbd-uppercase text-center">Policies</h4>
            <p class="adbd-capitalize text-center"><a href="#"> Privacy</a> </p>
            <p class="adbd-capitalize text-center"><a href="#"> Terms</a> </p>
        </div>
        <div class="col-md-4">
            <h4 class="adbd-uppercase text-center">Other</h4>
            <p class="adbd-capitalize text-center"><a href="#"> Contact</a> </p>
            <p class="adbd-capitalize text-center"><a href="#"> sitemap</a> </p>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            <p class="text-center">&copy; BhojonBilash 2016</p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- Load stylesheet -->
<?php foreach ($vb_css_footer as $key => $css_file_name): ?>
    <link rel="stylesheet" href="<?php echo base_url('resources/css/' . $css_file_name . '.css'); ?>">
<?php endforeach; ?>

<!-- Load Javascript -->
<?php foreach ($vb_js_footer as $key => $js_file_name): ?>
    <script type="text/javascript" src="<?php echo base_url('resources/js/' . $js_file_name . '.js'); ?>"></script>
<?php endforeach; ?>
