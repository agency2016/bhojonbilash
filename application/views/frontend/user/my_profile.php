<!-- Page Content -->
<div class="container vb-body">
    <div class="row search-bar-single">
        <form class="form-wrapper cf single">
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
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="">
                    <img src="<?php echo base_url('resources/images/user_default.png') ?>" class="img-responsive" alt="">
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
              
                <!--START STICKER-->
                <div class="profile-sticker">
                    <img src="https://a1.muscache.com/airbnb/static/badges/super_host_50-49a8ac11a8d0ff4f439e8087dcd164cc.png">
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
                                Overview </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Member/prifile_info')?>">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-list"></i>
                                Food Item List </a>
                        </li>

                    </ul>
                </div>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>

        <div class="col-md-9">  
            
            <?php
            for ($i = 1; $i <= 9; $i++) {
                ?>
                <div class="col-md-6 thumbnail">
                    <div class="food-item-img" style="background-image:url('https://c.zmtcdn.com/data/reviews_photos/cd9/72473df2b9a350eff8caba9a28609cd9_1451843318.jpg')">
                        <h4 class="pull-right info-tag rat">$24.99</h4>
                        <h4 class="info-tag"><a href="#" style="color: #FFF">Product Name</a>
                        </h4>
                    </div>
                    <div class="caption-full"></div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>  
                <?php
            }
            ?>

        </div>
    </div>

</div>
<!-- /.container -->


