<!-- Page Content -->
<div class="container vb-body">
    <div class="row search-bar-single">
        <form class="form-wrapper cf single">
            <div class="col-md-2 col-sm-2 col-xs-12 vb-search-location dropdown toggle search-bar-space"
                 style="float: left">
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
            <input class="col-md-8 col-sm-8 col-xs-12 search-bar-space" type="text" placeholder="Search here..."
                   required>
            <button class="col-md-2 col-sm-2 col-xs-12 vb-search-btn" type="submit">Search</button>
        </form>

    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?php echo base_url('resources/images/user_default.png') ?>" class="img-responsive" alt="">
                    <span class="name" style="color: blue;">Change Photo</span>
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Yasir Taher
                    </div>
                    <div class="profile-usertitle-job">
                        <i class="fa fa-map-marker"></i> Farmgate
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!--START STICKER-->
                <div class="profile-sticker">
                    <img
                        src="https://a1.muscache.com/airbnb/static/badges/super_host_50-49a8ac11a8d0ff4f439e8087dcd164cc.png">
                    <img
                        src="https://a1.muscache.com/airbnb/static/badges/super_host_50-49a8ac11a8d0ff4f439e8087dcd164cc.png">
                </div>
                <!--END STICKER-->

                <!-- START FOLLOWER-->
                <div class="profile-follow-wrapper">
                    <div class="profile-followers">
                        <span class="fol-num">101</span> Followers
                    </div>
                    <div class="profile-following">
                        <span class="fol-num">258</span> Following
                    </div>
                </div>
                <!-- END FOLLOWER-->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                My profile </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Edit profile </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Change password </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Delete my account </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>


        <div class="col-md-6">

            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <h4 class="adbd-uppercase">General information
                        <small class="pull-right"><input type="checkbox" class="adbd-checkbox"><span
                                class="ck-span"></span> public
                        </small>
                    </h4>
                    <div class="form-group">
                        <label for="exampleInput">Phone </label>
                        <input type="text" class="form-control adbd-input" id="" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">Occupation</label>
                        <input type="text" class="form-control adbd-input" id="" placeholder="Occupation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInput">A little bit about yourself</label>
                        <textarea class="form-control adbd-input" rows="5"></textarea>
                    </div>


                    <h4 class="adbd-uppercase" style="margin-top: 50px;">Address
                        <small class="pull-right"><input type="checkbox" class="adbd-checkbox"><span
                                class="ck-span"></span> public
                        </small>
                    </h4>
                    <div class="form-group">
                        <div style="display: inline-block;width:calc(50% - 2px);">
                            <label for="">District</label>
                            <select class="form-control adbd-input">
                                <option>Dhaka</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select> 
                        </div>
                        <div style="display: inline-block;width:calc(50% - 2px)">
                            <label for="">Thana</label>
                            <select class="form-control adbd-input">
                                <option>hello </option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInput">Street / Village </label>
                        <input type="text" class="form-control adbd-input" id="" placeholder="Street / Village">
                    </div>

                    <h4 class="adbd-uppercase" style="margin-top: 50px;">User type </h4>
                    <label class="checkbox-inline">
                        <input type="checkbox" class="adbd-checkbox" id="buyer"><span class="ck-span"></span> Buyer
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" class="adbd-checkbox" id="seller"><span class="ck-span"></span> Seller
                    </label>

                    <div id="seller_info" style="display: none;margin-top: 10px;">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Delevery start time</label>
                                    <select class="form-control adbd-input">
                                        <option>--</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Delevery end time</label>
                                    <select class="form-control adbd-input">
                                        <option>--</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInput">&nbsp;</label>
                                        <p class="btn bg-info btn-block" type="submit">+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Delevery type</label>
                            <select class="form-control adbd-input">
                                <option>--</option>
                                <option>Home</option>
                                <option>Spacific location</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="exampleInput">Location name</label>
                                    <input type="text" class="form-control adbd-input" id=""
                                           placeholder="Spacific location">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInput">&nbsp;</label>
                                        <p class="btn bg-info btn-block" type="submit">+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
//                            $("#seller").click(function () {
//                                $("div#seller_info").show(100);
//                            });
                            $('#seller').click(function () {
                                $("#seller_info").toggle(this.checked);
                            });


                        });

                    </script>


                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img
                        src="https://lh3.googleusercontent.com/-bSNE-_iWMao/AAAAAAAAAAI/AAAAAAAAAlQ/k_TPiq1-9qU/s60-p-no/photo.jpg"
                        class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Yasir Taher
                    </div>
                    <div class="profile-usertitle-job">
                        <i class="fa fa-map-marker"></i> Farmgate
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
    </div>

</div>
<!-- /.container -->