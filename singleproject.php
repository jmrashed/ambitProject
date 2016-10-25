<?php
include("./includes/header.php");
$project_id = $_GET['id'];
$project_category = $_GET['category'];

$quiry_result = $obj_application->select_project_by_id($project_id, $project_category);

$ongoing_info = mysqli_fetch_assoc($quiry_result);
$project_name = $ongoing_info['project_name'];


$quiry_result2 = $obj_application->select_single_project_slider($project_name, $project_category);
$project_slider_info = mysqli_fetch_assoc($quiry_result2);


$quiry_result3 = $obj_application->select_single_project_floorplan($project_name, $project_category);
//$project_slider_info=  mysqli_fetch_assoc($quiry_result3);




if (isset($_POST['btn'])) {
    $message = $obj_application->send_and_save_mail($_POST);
}
?>
<?php include("./includes/navbar.php"); ?>


<div class="container margintop60 aboutus">

    <div class="row subaboutus">
        <h3 class="page-header text-danger text-uppercase"><?php echo $ongoing_info['project_name']; ?> </h3> 
        <div class="col-md-8"> 
            <div class="row carousel-holder">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class=" slide-image img img-responsive" src="images/singleprojectslider/<?= $project_slider_info['img1']; ?>" style="width:100%; height: 450px;" alt="">
                            </div>
                            <div class="item">
                                <img class=" slide-image img img-responsive" src="images/singleprojectslider/<?= $project_slider_info['img2']; ?>"  style="width:100%; height: 450px;"  alt="">
                            </div> 
                            <div class="item">
                                <img class=" slide-image img img-responsive" src="images/singleprojectslider/<?= $project_slider_info['img3']; ?>"  style="width:100%; height: 450px;"  alt="">
                            </div> 
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="panel panel-primary panelsingle ">
                <div class="panel-heading"> Basic Information</div>
                <div class="panel-body">
                    <table class="table table-responsive  ">
                        <tr><th>Project Name </th><td><h4 class="text-danger"><?php echo $ongoing_info['project_name']; ?></h4></td></tr>
                        <tr><th>Address </th><td><?php echo $ongoing_info['address']; ?></td></tr>
                        <tr><th>Land Area </th><td><?php echo $ongoing_info['land_area']; ?></td></tr>
                        <tr><th>Land Position </th><td><?php echo $ongoing_info['land_position']; ?></td></tr>
                        <tr><th>Level </th><td><?php echo $ongoing_info['label']; ?></td></tr>
                        <tr><th> No. of Apartment</th><td><?php echo $ongoing_info['no_of_apertment']; ?></td></tr>

                    </table>


                </div>
            </div>  
        </div>


    </div>
    <br> 
    <?php
    if ($_GET['category'] != "tbl_completed_project") {
        ?>
        <div class="row subaboutus">
            <h3 class="page-header text-danger text-uppercase"><?php echo $ongoing_info['project_name']; ?></h3>
            <div class="col-md-8">   

                <div class="panel panel-primary panelsingle panelscroll">
                    <div class="panel-heading"> Description</div>
                    <div class="panel-body">

                        <?php echo $ongoing_info['description']; ?>

                    </div>
                </div>  
            </div>

            <div class="col-md-4">  
                <div class="panel panel-primary panelsingle panelscroll">
                    <div class="panel-heading"> More Details </div>
                    <div class="panel-body">
                        <table class="table ">
                            <tr><th>Apartment Size </th><td><?php
                                    $len = strlen($ongoing_info['apertment_size']);
                                    for ($i = 0; $i < $len; $i++) {
                                        echo $ongoing_info['apertment_size'][$i];
                                        if ($ongoing_info['apertment_size'][$i] == ';') {

                                            echo '<br>';
                                        }
                                    }
                                    ?></td></tr>
                            <tr><th>No. of Lift </th><td><?php echo $ongoing_info['no_of_lift']; ?> Lift</td></tr>
                            <tr><th>Lift Capacity</th><td><?php echo $ongoing_info['lift_capacity']; ?> Persons</td></tr>
                            <tr><th>Generator </th><td><?php echo $ongoing_info['generator']; ?></td></tr>
                            <tr><th> Started of Work </th><td> <?php echo $ongoing_info['started_date']; ?></td></tr> 
                            <tr><th> Completion of Work </th><td> <?php echo $ongoing_info['ended_date']; ?></td></tr> 

                        </table>

                    </div>
                </div>  

            </div>

        </div>

        <br><br>


        <div class="row subaboutus"> 
            <a class="btn  btn-danger col-md-offset-1 col-md-4" href="constructionstatus.php?id=<?= $project_id; ?>&category=<?= $project_category; ?>">Construction Status</a>


            <button type="button" class="btn btn-primary  col-md-offset-1 col-md-4" data-toggle="modal" data-target=".bs-example-modal-sm">Video</button>

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Project Video</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row"> 
                                <?php echo $ongoing_info['viedo_link']; ?>
                            </div> 

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>

        <br><br>

        <div class="row subaboutus">
            <h3 class="page-header text-danger text-uppercase"> Floor Plans</h3>
            <?php //include("./floorplansSlider.php");  ?>


            <div class="col-md-12 col-xs-12">


                <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    jssor_1_slider_init = function () {

                        var jssor_1_SlideshowTransitions = [
                            {$Duration: 1200, $Zoom: 1, $Easing: {$Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad}, $Opacity: 2},
                            {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                            {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: {$Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                            {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                            {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                            {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                            {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                            {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                            {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                            {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                            {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                            {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                            {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Row: 28}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                            {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 19}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.8}}
                        ];

                        var jssor_1_options = {
                            $AutoPlay: true,
                            $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $ThumbnailNavigatorOptions: {
                                $Class: $JssorThumbnailNavigator$,
                                $Rows: 2,
                                $Cols: 6,
                                $SpacingX: 14,
                                $SpacingY: 12,
                                $Orientation: 2,
                                $Align: 156
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        //responsive code begin
                        //you can remove responsive code if you don't want the slider scales while window resizing
                        function ScaleSlider() {
                            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                            if (refSize) {
                                refSize = Math.min(refSize, 960);
                                refSize = Math.max(refSize, 300);
                                jssor_1_slider.$ScaleWidth(refSize);
                            } else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }
                        ScaleSlider();
                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        //responsive code end
                    };

                </script>

                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
                        <?php
                        $floorplan_info = mysqli_fetch_assoc($quiry_result3);

                        if ($floorplan_info['img1']) {
                            $img = $floorplan_info['img1'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img2']) {
                            $img = $floorplan_info['img2'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img3']) {
                            $img = $floorplan_info['img3'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img4']) {
                            $img = $floorplan_info['img4'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img5']) {
                            $img = $floorplan_info['img5'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img6']) {
                            $img = $floorplan_info['img6'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img7']) {
                            $img = $floorplan_info['img7'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img8']) {
                            $img = $floorplan_info['img8'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img9']) {
                            $img = $floorplan_info['img9'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img10']) {
                            $img = $floorplan_info['img10'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img11']) {
                            $img = $floorplan_info['img11'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        if ($floorplan_info['img12']) {
                            $img = $floorplan_info['img12'];
                            ?>
                            <div data-p="150.00" style="display: none;">
                                <a href="./images/singleprojectfloorplan/<?= $img; ?>">
                                    <img data-u="image" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />  </a>
                                <img data-u="thumb" class="img img-responsive" src="images/singleprojectfloorplan/<?= $img; ?>" />   

                            </div> 
                            <?php
                        }
                        ?>




                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                        <!-- Thumbnail Item Skin Begin -->
                        <div data-u="slides" style="cursor: default;">
                            <div data-u="prototype" class="p">
                                <div class="w">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
                </div>
                <script type="text/javascript">jssor_1_slider_init();</script>





            </div>


        </div>

        <?php
    }
    if ($ongoing_info['map']) {
        ?>
        <br><br>
        <div class="row subaboutus">
            <h3 class="page-header text-danger ">Location Map</h3>

            <?php echo $ongoing_info['map']; ?> 

        </div>
    <?php } ?>
    <br>
    <br>
    <div class="row subaboutus">
        <h3 class="page-header">    Contact Information</h3>
        <div class="col-md-6">
            <?php if (isset($message)) { ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>   <?= $message; ?>  
                </div>
            <?php } ?>

            <form id="contact-form" method="post" action="" role="form">


                <div class="row shadow">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="first_name" class="form-control" placeholder="firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Phone</label>
                            <input id="form_phone" type="tel" name="phone_number" class="form-control" placeholder="phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                </div>
                <div class="row downsubshadows text-center">
                    <div class="">
                        <input type="submit" name="btn" class="btn btn-primary" style="width:80%" value="Send Message">
                    </div> 
                </div>

            </form>

            <br>
        </div>

        <div class="col-md-offset-1 col-md-5 subshadows" style="color:white">

            <br>
            <br>
            <img src="images/ambit-logo.png" class="img img-responsive img-thumbnail"><br>
            <h4 class="page-header">Head office Address</h4> 
            <?php echo $contact_info['h_address']; ?>


        </div>

    </div> 
    <br>
    <br> 

</div>




<?php include("./includes/footer.php"); ?>
