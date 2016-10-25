<?php
$page_title = "Search";
?>

<?php include("./includes/header.php"); 
//require 'class/Application.php';
$obj_application = new Application();

$search=$_POST['location'];

$quiry_result1=$obj_application->select_all_search("tbl_ongoing_project",$search); 
$quiry_result2=$obj_application->select_all_search("tbl_upcoming_project",$search); 
$quiry_result3=$obj_application->select_all_search("tbl_completed_project",$search); 

?>
<?php include("./includes/navbar.php"); ?> 

<div class="container margintop60 aboutus">
  
    <div class="row  subaboutus">
       <h2 class="page-header">Ongoing Project</h2>
       <?php
        while($about_info= mysqli_fetch_assoc($quiry_result1)){
        ?>
 
      <div class="col-md-3 col-sm-6 col-xs-12">
      <a href="singleproject.php?id=<?=$about_info['id'];?>&category=tbl_ongoing_project">
      <img src="images/<?=$about_info['image'];?>" style="width:100%; height:100px"><br>
      <p class="text-danger"><?=$about_info['project_name'];?></a></p>
         <p class="text-info"><?=$about_info['address'];?></p>
      </div>
      
      <?php
       }
   ?>
         
    </div>
    
    <br><br>
    <div class="row  subaboutus">
       <h2 class="page-header">Upcoming Project</h2>
       <?php
        while($about_info= mysqli_fetch_assoc($quiry_result2)){
       ?>
     
      <div class="col-md-3 col-sm-6 col-xs-12">
      <a href="singleproject.php?id=<?=$about_info['id'];?>&category=tbl_ongoing_project">
      <img src="images/<?=$about_info['image'];?>" style="width:100%; height:100px"><br>
      <p class="text-danger"><?=$about_info['project_name'];?></a></p>
         <p class="text-info"><?=$about_info['address'];?></p>
      </div>
      
      <?php
       }
   ?>
         
    </div>
    
    
    <br><br>
    
    <div class="row  subaboutus">
       <h2 class="page-header">Completed Project</h2>
       <?php
        while($about_info= mysqli_fetch_assoc($quiry_result3)){
     ?>
     
      <div class="col-md-3 col-sm-6 col-xs-12">
      <a href="singleproject.php?id=<?=$about_info['id'];?>&category=tbl_ongoing_project">
      <img src="images/<?=$about_info['image'];?>" style="width:100%; height:100px"><br>
      <p class="text-danger"><?=$about_info['project_name'];?></a></p>
         <p class="text-info"><?=$about_info['address'];?></p>
      </div>
      
     <?php
       }
   ?>
         
    </div>
    
    

</div>

<?php include("./includes/footer.php"); ?>



