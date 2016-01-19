<!-- Navigation -->
<nav class="container navbar navbar-inverse navbar-fixed-top vb-navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">BB</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--                <ul class="nav navbar-nav">-->
            <!--                    <li>-->
            <!--                        <a href="#">About</a>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <a href="#">Services</a>-->
            <!--                    </li>-->
            <!--                    <li>-->
            <!--                        <a href="#">Contact</a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Order food online</a></li>
                <li><a href="#">Login with facebook</a></li>
                <li><a href="#">Login</a></li>
                <li class="switch">
                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>
                    <label for="week" class="switch-label switch-label-off">বাংলা</label>
                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>
                    <label for="month" class="switch-label switch-label-on">En</label>
                    <span class="switch-selection"></span>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>