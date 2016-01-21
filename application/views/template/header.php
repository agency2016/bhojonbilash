<style>

    .login-box {
        position: relative;
        margin: 10px auto;
        width: 100%;
        height: 360px;
        background-color: #fff;
        padding: 10px;
        border-radius: 3px;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.33);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.33);
        box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.33);
    }

    .lb-header {
        position: relative;
        color: #00415d;
        margin: 5px 5px 10px 5px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        text-align: center;
        height: 28px;
    }

    .lb-header a {
        margin: 0 25px;
        padding: 0 20px;
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }

    .lb-header .active {
        color: #CB202F;
        font-size: 18px;
    }

    .social-login {
        position: relative;
        /*float: left;*/
        width: 100%;
        height: 72px;
        padding: 10px 0 15px 0;
        border-bottom: 1px solid #eee;
    }

    .social-login a {
        position: relative;
        /*float: left;*/
        width: calc(65% - 22px);
        text-decoration: none;
        color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.05);
        padding: 12px;
        text-transform: uppercase;
        margin: 0 3%;
        text-align: center;
        margin-bottom: 10px;
    }

    .social-login a i {
        position: relative;
        float: left;
        width: 20px;
        top: 2px;
    }

    .social-login a:first-child {
        background-color: #49639F;
    }

    .social-login a:last-child {
        background-color: #DF4A32;
    }

    .email-login, .email-signup, .forgotPassword {
        position: relative;
        float: left;
        width: 100%;
        height: auto;
        margin-top: 20px;
        text-align: center;
    }

    .u-form-group {
        width: 100%;
        margin-bottom: 10px;

    }

    .u-form-group input[type="text"],
    .u-form-group input[type="email"],
    .u-form-group input[type="password"] {
        width: calc(65% - 22px);
        height: 41px;
        outline: none;
        border: 1px solid #ddd;
        padding: 0 10px;
        color: #333;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }

    .u-form-group input:focus {
        border-color: #CB202F;
    }

    .u-form-group button {
        width: 50%;
        background-color: #1CB94E;
        border: none;
        outline: none;
        color: #fff;
        font-size: 14px;
        font-weight: normal;
        padding: 14px 0;
        border-radius: 2px;
        text-transform: uppercase;
    }

    .forgot-password {
        width: 50%;
        text-align: left;
        text-decoration: underline;
        color: #888;
    }


</style>
<!-- Navigation -->
<nav class="container navbar navbar-inverse navbar-fixed-top vb-navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
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
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li>
                    <!--                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>" name="view" value="bangla" id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>
                    <label for="week" class="switch-label switch-label-off">বাংলা</label>
                    <input type="radio" onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;" class="switch-input" data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>" name="view" value="english" id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>
                    <label for="month" class="switch-label switch-label-on">En</label>
                    <span class="switch-selection"></span>-->

                    <label id="sliderLabel">
                        <input type="checkbox"/>
                        <span id="slider"></span>
                        <span id="sliderOn"
                              onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;"
                              data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'bangla') ? 1 : 0; ?>"
                              name="view" value="bangla"
                              id="week" <?php if ($this->session->userdata('vb_site_lang') == 'bangla') echo 'checked="checked"'; ?>>BN</span>
                        <span id="sliderOff"
                              onchange="javascript:window.location.href = '<?php echo base_url(); ?>languageswitcher/switchLang/' + this.value;"
                              class="switch-input"
                              data-check="<?php echo ($this->session->userdata('vb_site_lang') == 'english') ? 1 : 0; ?>"
                              name="view" value="english"
                              id="month" <?php if ($this->session->userdata('vb_site_lang') == 'english') echo 'checked="checked"'; ?>>EN</span>
                    </label>

                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!--LOGIN-->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">

    <div class="modal-dialog">
        <div class="loginmodal-container">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


            <div class="login-box">
                <div class="lb-header">
                    <a href="#" class="active" id="login-box-link">Login</a>
                    <a href="#" id="signup-box-link">Sign Up</a>
                </div>

                <div class="social-login">

                    <a href="#" class="text-center">
                        <i class="fa fa-facebook fa-lg"></i>
                        Login in with facebook
                    </a>
                    <br>
                    <a href="#" class="text-center">
                        <i class="fa fa-google-plus fa-lg"></i>
                        log in with Google
                    </a>
                </div>

                <p id="error" class="text-center" style="color: red"></p>

                <form class="email-login">
                    <div class="u-form-group">
                        <input type="email" placeholder="Email"/>
                    </div>
                    <div class="u-form-group">
                        <input type="password" placeholder="Password"/>
                    </div>
                    <div class="u-form-group">
                        <button class="btn adbd-btn-1" style="">Log in</button>
                    </div>
                    <div class="u-form-group">
                        <a href="#" class="forgot-password" id="forgot_pass_link">Forgot password?</a>
                    </div>
                </form>

                <form role="form" id="registerfrm" onsubmit="return false;" action="" method="POST"
                      class="email-signup">
                    <div class="u-form-group">
                        <input type="text" name="full_name" id="inputName" placeholder="Full Name"/>
                    </div>
                    <div class="u-form-group">
                        <input type="email" name="email" placeholder="Email"/>
                    </div>
                    <div class="u-form-group">
                        <input type="password" name="regpassword" id="regpassword" placeholder="Password"/>
                    </div>
                    <div class="u-form-group">
                        <input type="password" name="passconf" placeholder="Confirm Password"/>
                    </div>
                    <div class="u-form-group">
                        <button class="btn adbd-btn-1">Sign Up</button>
                    </div>
                </form>

                <form class="forgotPassword" id="forgot_password">
                    <div class="u-form-group">
                        <input type="email" placeholder="Email"/>
                    </div>
                    <div class="u-form-group">
                        <button class="btn adbd-btn-1">Submit</button>
                    </div>
                </form>

            </div>


        </div>
    </div>

</div>

<script>
    $(".email-signup").hide();
    $("#forgot_password").hide();
    $("#signup-box-link").click(function () {
        $(".email-login").fadeOut(100);
        $("#forgot_password").fadeOut(100);
        $(".email-signup").delay(100).fadeIn(100);
        $("#login-box-link").removeClass("active");
        $("#forgot_pass_link").removeClass("forgot-password");
        $("#signup-box-link").addClass("active");
        $(".login-box").height(415);
    });
    $("#login-box-link").click(function () {
        $(".email-signup").fadeOut(100);
        $("#forgot_password").fadeOut(100);
        $(".email-login").delay(100).fadeIn(100);
        $("#login-box-link").addClass("active");
        $("#signup-box-link").removeClass("active");
        $("#forgot_pass_link").removeClass("active");
    });
    $("#forgot_pass_link").click(function () {
        $(".email-login").fadeOut(100);
        $(".email-signup").fadeOut(100);
        $(".forgotPassword").delay(100).fadeIn(100);
        $("#login-box-link").removeClass("active");
        $("#signup-box-link").removeClass("active");
    });

</script>

<script type="text/javascript">

    $(document).ready(function () {

        $('#registerfrm').submit(function (e) {

            if (!($('#regpassword').val().match("[0-9]"))) {
                $('#error').html("Password must contain at least one digit");
            }
            else if (!($('#regpassword').val().match("[a-z]"))) {
                $('#error').html("Password must contain at least one small letter");
            }
            else if (!($('#regpassword').val().match("[A-Z]"))) {
                $('#error').html("Password must contain at least one capital letter");
            }
            else if (($('#regpassword').val().length < 6)) {
                $('#error').html("Password must be at least 6 digits long");
            }
            else {
                var url = "<?php echo base_url('User/register')?>";
                console.log(url);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#registerfrm').serialize(),
                    dataType: "JSON",
                    success: function (data) {
                        if (data.errors == '') {
                            $('#registerfrm').modal('hide');
                            window.location.href = "<?php echo base_url('Member/complete_profilr')?>";
                        } else {

                            var val = data.errors;
                            val = val.replace("The Email field must contain a unique value", "email address already exists");
                            document.getElementById('error').innerHTML = val;
                            setTimeout(function () {
                                $('#error').html('')
                            }, 5000);

                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('Error adding data');
                    }
                });
                // end of ajax
            }
        });

        $('#loginfrm').submit(function (e) {
            var url = "http://localhost/agencyDelta/rideshare/home/login";
            $.ajax({
                url: url,
                type: "POST",
                data: $('#loginfrm').serialize(),
                dataType: "JSON",
                success: function (data) {
                    if (data.errors == '') {
                        $('#loginfrm').modal('hide');
                        location.reload();
                    } else {
                        document.getElementById('error_login').innerHTML = data.errors;
                        setTimeout(function () {
                            $('#error_login').html('')
                        }, 5000);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Error adding data');
                }
            });
            // end of ajax
        });

        $('#forgotPassword_mail_request').submit(function (e) {
            var url = "http://localhost/agencyDelta/rideshare/home/password_reset_request";
            $.ajax({
                url: url,
                type: "POST",
                data: $('#forgotPassword_mail_request').serialize(),
                dataType: "JSON",
                success: function (data) {
                    if (data.errors == '') {
                        $('#forgotPassword').modal('hide');
                        swal('', data.success, 'success');
                    } else {
                        document.getElementById('error_forgot_password').innerHTML = data.errors;
                        setTimeout(function () {
                            $('#error_forgot_password').html('')
                        }, 5000);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Error adding data');
                }
            });
            // end of ajax
        });


    });
</script>

