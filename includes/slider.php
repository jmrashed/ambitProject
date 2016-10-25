<?php
$quiry_result = $obj_application->select_all_homesliders_info();
$home_info = mysqli_fetch_assoc($quiry_result);
$quiry_result = $obj_application->select_all_social_link_info();
$social_link = mysqli_fetch_assoc($quiry_result);
?>

<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">

    <div class="carousel-caption" >

        <ul class="nav nav-pills"> 
            <li> <a href="https://www.facebook.com/<?php echo $social_link['facebook']; ?> " class="linkshadow" target="_blank"> <i class="fa fa-facebook-square"></i></a> </li> 
           <!-- <li> <a href="https://www.linkedin.com/<?php echo $social_link['linkedin']; ?> " class="linkshadow"> <i class="fa fa-linkedin"></i></a>  </li>-->
            <li> <a href="https://www.twitter.com/<?php echo $social_link['twitter']; ?> " class="linkshadow" target="_blank"> <i class="fa fa-twitter"></i></a>  </li>
            <li> <a href="https://www.youtube.com/<?php echo $social_link['youtube']; ?> " class="linkshadow" target="_blank"> <i class="fa fa-youtube"></i></a>  </li>
            <li> <a href="https://plus.google.com/<?php echo $social_link['googletalk']; ?> " class="linkshadow" target="_blank"> <i class="fa fa-google-plus"></i></a>  </li>
            <li>  
              <a href="#" class="linkshadow" data-toggle="tooltip" data-placement="top" title="HOTLINE 01780014080"><i class="fa fa-phone"></i></a> 
              
        
            </li>
        </ul>


        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Contact Address</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row"> 
                            <?php echo $contact_info['h_address']; ?>
                        </div> 

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>


    <!-- Wrapper for Slides -->
    <div class="carousel-inner">

        <?php
        $i = 0;
        if ($home_info['img1']) {
            ?>
            <div class="item <?php
            if ($i == 0) {
                echo 'active';
                $i = 1;
            }
            ?>">
                <div class="carousel-caption carousel-heading col-xs-12" >
                    <h2 class=" text-left"><?php echo $home_info['title1']; ?></h2>
                </div>
                <div class="fill">
                    <img src="images/homesliders/<?php echo $home_info['img1']; ?>" class="img img-responsive fullimg" />
                </div>
            </div>
            <?php
        }
        if ($home_info['img2']) {
            ?>
            <div class="item <?php
            if ($i == 0) {
                echo 'active';
                $i = 1;
            }
            ?>">

                <div class="carousel-caption carousel-heading col-xs-12" >
                    <h2 class=" text-left"><?php echo $home_info['title2']; ?></h2>

                </div>


                <div class="fill"><img src="images/homesliders/<?php echo $home_info['img2']; ?>" class="img img-responsive fullimg" /></div> 
            </div>

            <?php
        }
        if ($home_info['img3']) {
            ?>
            <div class="item <?php
            if ($i == 0) {
                echo 'active';
                $i = 1;
            }
            ?>">

                <div class="carousel-caption carousel-heading col-xs-12" >
                    <h2 class=" text-left"><?php echo $home_info['title3']; ?></h2>

                </div>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill"><img src="images/homesliders/<?php echo $home_info['img3']; ?>" class="img img-responsive fullimg" /></div> 

            </div>

            <?php
        }
        if ($home_info['img4']) {
            ?>
            <div class="item <?php
            if ($i == 0) {
                echo 'active';
                $i = 1;
            }
            ?>">

                <div class="carousel-caption carousel-heading col-xs-12" >
                    <h2 class=" text-left"><?php echo $home_info['title4']; ?></h2>

                </div>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill"><img src="images/homesliders/<?php echo $home_info['img4']; ?>" class="img img-responsive fullimg" /></div> 

            </div>
            <?php
        }
        if ($home_info['img5']) {
            ?>
            <div class="item <?php
            if ($i == 0) {
                echo 'active';
                $i = 1;
            }
            ?>">

                <div class="carousel-caption carousel-heading col-xs-12" >
                    <h2 class=" text-left"><?php echo $home_info['title5']; ?></h2>

                </div>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill"><img src="images/homesliders/<?php echo $home_info['img5']; ?>" class="img img-responsive fullimg" /></div> 

            </div>
        <?php } ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>
