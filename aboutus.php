<?php
$page_title = "About Us";
?>

<?php include("./includes/header.php"); 
$quiry_result=$obj_application->select_all_about_info();
$about_info= mysqli_fetch_assoc($quiry_result);
?>
<?php include("./includes/navbar.php"); ?> 

<div class="container margintop60 aboutus">
  
    <div class="row  subaboutus">
       
        
        
        <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12 pull-center">
          
             <h2 class="page-header "> <?php echo $about_info['about_title'];?></h2>
             <?php if($about_info['image']){?>
             <img src="images/<?=$about_info['image'];?>" style="width: 100%; height: 350px;" class="img img-responsive img-thumbnail">
             <?php } ?>
             <p class="text-justify"><?php echo $about_info['about_description'];?></p> 
        </div>
        <div class="col-md-offset-2"></div>
    </div>

</div>

<?php include("./includes/footer.php"); ?>



