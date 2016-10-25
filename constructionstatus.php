<?php
include("./includes/header.php");
$project_id = $_GET['id'];
$project_category = $_GET['category'];

$quiry_result = $obj_application->select_project_by_id($project_id, $project_category);

$ongoing_info = mysqli_fetch_assoc($quiry_result);
$project_name = $ongoing_info['project_name'];


$quiry_result2 = $obj_application->select_single_project_construction($project_name, $project_category);
$project_slider_info=  mysqli_fetch_assoc($quiry_result2);

 



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
                                <img class=" slide-image img img-responsive" src="images/singleprojectconstruction/<?= $project_slider_info['img1']; ?>" style="width:100%; height: 450px;" alt="">
                            </div>
                            <div class="item">
                                <img class=" slide-image img img-responsive" src="images/singleprojectconstruction/<?= $project_slider_info['img2']; ?>"  style="width:100%; height: 450px;"  alt="">
                            </div> 
                            <div class="item">
                                <img class=" slide-image img img-responsive" src="images/singleprojectconstruction/<?= $project_slider_info['img3']; ?>"  style="width:100%; height: 450px;"  alt="">
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

            <div class="panel panel-primary  panelsingle panelscroll">
                <div class="panel-heading"><span class="glyphicon glyphicon-home"></span> Construction Status</div>
                <div class="panel-body">
                    <p class="text-success text-justify">
                        <?php echo $project_slider_info['status']; ?> 
                    </p>


                </div>
            </div>  
        </div>


    </div>
   
    <br>
    <br> 

</div>




<?php include("./includes/footer.php"); ?>
