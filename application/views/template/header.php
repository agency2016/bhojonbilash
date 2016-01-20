<style>
    #sliderLabel {

        cursor: pointer;
        display: block;
        height: 30px;
        margin: 10px auto;
        overflow: hidden;
        position: relative;
        width: 80px;
        margin-right: 10px;
    }
    #sliderLabel input {
        display: none;
    }
    #sliderLabel input:checked + #slider {
        left: 36px;
    }
    #slider {
        background: #c0c6c3;
        -moz-border-radius: 7px;
        display: block;
        height: 30px;
        left: -4px;
        position: absolute;
        top: 0px;
        -moz-transition: left .25s ease-out;
        -webkit-transition: left .25s ease-out;
        transition: left .25s ease-out;
        width: 48px;
        z-index: 1;
    }
    #sliderOn, #sliderOff {
        color: white;
        display: block;
        font-family: verdana, arial, sans-serif;
        font-size: 14px;
        font-weight: bold;
        line-height: 30px;
        position: absolute;
        text-align: center;
        top: 0px;
        width: 40px;
    }
    #sliderOn {
        background: #002400;
        background: -moz-linear-gradient(top,  #002400 0%, #008a00 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#002400), color-stop(100%,#008a00));
        background: -webkit-linear-gradient(top,  #002400 0%,#008a00 100%);
        background: -o-linear-gradient(top,  #002400 0%,#008a00 100%);
        background: -ms-linear-gradient(top,  #002400 0%,#008a00 100%);
        background: linear-gradient(top,  #002400 0%,#008a00 100%);
        left: 0px;
    }
    #sliderOff {
        background: #870000;
        background: -moz-linear-gradient(top,  #870000 0%, #ff0000 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#870000), color-stop(100%,#ff0000));
        background: -webkit-linear-gradient(top,  #870000 0%,#ff0000 100%);
        background: -o-linear-gradient(top,  #870000 0%,#ff0000 100%);
        background: -ms-linear-gradient(top,  #870000 0%,#ff0000 100%);
        background: linear-gradient(top,  #870000 0%,#ff0000 100%);
        right: 0px;
    }

</style>
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
                <li>
<!--                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>
                    <label for="week" class="switch-label switch-label-off">বাংলা</label>
                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>
                    <label for="month" class="switch-label switch-label-on">En</label>
                    <span class="switch-selection"></span>-->
                    
                    <label id="sliderLabel">
                        <input type="checkbox" />
                        <span id="slider"></span>
                        <span id="sliderOn" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>BN</span>
                        <span id="sliderOff" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>EN</span>
                    </label>

                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>