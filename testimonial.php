<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); 
error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
$quiry_result=$obj_application->select_all_testimonial_info();

?> 
<div class="container margintop60 aboutus">
 


    <div class="row subaboutus  "> 
           <h3 class="page-header">Testimonials </h3> 
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!-- Indicators --> 
            <ol class="carousel-indicators"> 
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li> 
                <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
            </ol> <!-- Wrapper for slides --> 
            <div class="carousel-inner"> 
                <?php 
                $i=0;
                while ($testimonial_info= mysqli_fetch_assoc($quiry_result)){
                    
                    ?>
                
                <div class="item <?php if($i==0){echo 'active';} ?> whiteshadow">
                    <div class="row"> 
                        <div class="col-xs-12"> 
                            <div class="  adjust1">
                                <div class="col-md-6 col-sm-6 col-xs-12"> <br>
                                    <img class="media-object img-rounded img-responsive" src="images/testimonial/<?php 
                                    if(empty($testimonial_info['image'])){
                                        echo 'ambit-logo.png';
                                    }  else {
                                          echo $testimonial_info['image'];
                                    }
                                  
                                    
                                    ?>" style="width:100%;height:400px"> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <div class="caption"> 
                                        <div class="text-center">
                                            <h2 class="text-info  adjust2"><?php echo $testimonial_info['name'];?></h2> 
                                            <p class="lead"><?php echo $testimonial_info['address'];?></p> 
                                        </div>
                                        <blockquote class="adjust2"> 
                                            <p class="text-justify"> <?php echo $testimonial_info['description'];?></p> <small>
                                                <cite title="Source Title">
                                                    <a href="<?php echo $testimonial_info['web'];?>"> <i class="glyphicon glyphicon-globe"></i> <?php echo $testimonial_info['web'];?></a>
                                                </cite>
                                            </small> 
                                            <div class="text-center">
                                                <a href="<?php echo $testimonial_info['facebook'];?>" class="btn btn-default"><i class="fa fa-facebook-f" style="font-size: 22px"></i></a>
                                                <a href="<?php echo $testimonial_info['skype'];?>"  class="btn btn-default"><i class="fa fa-skype" style="font-size: 22px"></i></a>
                                                <a href="<?php echo $testimonial_info['twitter'];?>"  class="btn btn-default"><i class="fa fa-twitter" style="font-size: 22px"></i></a>
                                                
                                            </div>
                                        </blockquote> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div> 
                 <?php $i++; } ?>
                     
            </div> 
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
                <span class="glyphicon glyphicon-chevron-left"></span> </a> 
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
                <span class="glyphicon glyphicon-chevron-right"></span> </a> 
        </div>
    </div>


</div>

<?php include("./includes/footer.php"); ?>



