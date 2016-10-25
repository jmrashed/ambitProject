<?php
$page_title = "Team Management";
?>

<?php
include("./includes/header.php");
$quiry_result = $obj_application->select_all_team_info();

?>
<?php include("./includes/navbar.php"); ?> 

<div class="container margintop60 aboutus">

    <div class="row  subaboutus">

        <div class=" col-md-12 text-center">
            <h2 class="page-header"> Head of Team Management</h2><br>
            <?php while ($team_info = mysqli_fetch_assoc($quiry_result)) {?>
            <div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 15px;">
                <img src="images/team/<?php echo $team_info['image'];?>" class="img img-responsive img-thumbnail" style="width:100%;"><br>
                <h4 class="text-center"><?php echo $team_info['name'];?></h4>
                <p class="text-center text-info"><b><?php echo $team_info['designation'];?></b></p>
                <p class="text-justify"><?php echo $team_info['details'];?></p>
            </div>
            <?php }?>
        </div>
    </div>
    <br> 
</div>

<?php include("./includes/footer.php"); ?>



