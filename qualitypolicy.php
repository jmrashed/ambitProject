<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); ?> 
<?php
$quiry_result = $obj_application->select_all_quality_info();
$quality_info = mysqli_fetch_assoc($quiry_result);
?>
<div class="container margintop60 aboutus">

    <div class="row subaboutus"> 
        <h3 class="page-header">Quality Policy</h3>
        <div class="row carousel-holder">
            <div class="col-md-5">
                <div class="panel panel-primary panelscroll-quality">
                    <div class="panel-heading">Certification</div>
                    <div class="panel-body">
                              <?php  if($quality_info['img4']){ ?>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#myModal1">   
                        <img class="img img-responsive img-thumbnail" src="images/qualitypolicy/<?php echo $quality_info['img4']; ?>" style="width:100%">
                        </a>

                        <!-- Modal -->
                        <div id="myModal1" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-danger text-uppercase">Certification from Rajuk</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class=" img-thumbnail " src="images/qualitypolicy/<?php echo $quality_info['img4']; ?>" style="width:100%; height: 100%">;
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>  
                        <?php } if($quality_info['img5']){ ?>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#myModal2">   
                            <img class="img img-responsive img-thumbnail" src="images/qualitypolicy/<?php echo $quality_info['img5']; ?>" style="width:100%">
                        </a>

                        <!-- Modal -->
                        <div id="myModal2" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-danger text-uppercase">Trade License   </h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class=" img-thumbnail " src="images/qualitypolicy/<?php echo $quality_info['img5']; ?>" style="width:100%; height: 100%">;
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>   
                        <?php } if($quality_info['img6']){ ?>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#myModal3">  
                            <img class="img img-responsive img-thumbnail" src="images/qualitypolicy/<?php echo $quality_info['img6']; ?>" style="width:100%">
                        </a>

                        <!-- Modal -->
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-danger text-uppercase">Certification </h4>
                                    </div>
                                    <div class="modal-body">
                                        <img class=" img-thumbnail " src="images/qualitypolicy/<?php echo $quality_info['img6']; ?>" style="width:100%; height: 100%">;
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div> 
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7"> 
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image img img-responsive" src="images/qualitypolicy/<?php echo $quality_info['img1']; ?>" style="margin-top:2px;width:100%; height: 350px;" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image img img-responsive " src="images/qualitypolicy/<?php echo $quality_info['img2']; ?>"  style="margin-top:2px;width:100%; height: 350px;"  alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image img img-responsive" src="images/qualitypolicy/<?php echo $quality_info['img3']; ?>"  style="margin-top:2px;width:100%; height: 350px;"  alt="">
                        </div> 
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

                <div class="row">
                    <h3 class="page-header">ACCREDITATIONS & ASSOCIATIONS </h3>
                    <br>
                    <div class="col-md-4 col-xs-12">   
                        <div class="certifiedshadow"><br>
                            <img src="images/qualitypolicy/<?php echo $quality_info['img7']; ?>" class="img img-responsive img-rounded img-thumbnail"> 
             
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">   
                        <div class="certifiedshadow"><br>
                            <img src="images/qualitypolicy/<?php echo $quality_info['img8']; ?>" class="img img-responsive img-rounded img-thumbnail"> 
                   
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">    
                        <div class="certifiedshadow"><br>
                            <img src="images/qualitypolicy/<?php echo $quality_info['img9']; ?>" class="img img-responsive img-rounded img-thumbnail"> 
                           
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php include("./includes/footer.php"); ?>



