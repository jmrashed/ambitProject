<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); 

$quiry_result = $obj_application->select_concern_info('tbl_welfare');
$concern_info = mysqli_fetch_assoc($quiry_result);





?> 

<div class="container margintop60 aboutus">
    <div class="row subaboutus">
        <h2 class="page-header"><?php echo $concern_info['title']; ?></h2> <br>
        <img src="images/sisterconcern/<?php echo $concern_info['image']; ?>" class="img img-responsive img-fluid" width="100%" style="height: 350px;">
        
        <div class="col-md-12"> 
            <h4 class="page-title"> Description</h4>
            <p class=" text-justify">

       <?php echo $concern_info['description']; ?> </p>

        </div>
    </div>

</div>

<?php include("./includes/footer.php"); ?>



