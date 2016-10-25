<?php
session_start();
require '../class/Application.php';
$obj_application = new Application();
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'logout') {
        $obj_application->admin_logout();
        header('Location:index.php');
    }
}
if (empty($_SESSION)) {
    header('Location:index.php');
}
$quiry_result = $obj_application->select_all_quality_info();
$quality_info = mysqli_fetch_assoc($quiry_result);

//$quiry_result = $obj_application->select_all_homesliders_info();
//$home_info = mysqli_fetch_assoc($quiry_result);

if (isset($_POST['update'])) {


    $uploadDir = "../images/qualitypolicy/";

    if ($_FILES['file1']['tmp_name']) {
        move_uploaded_file($_FILES['file1']['tmp_name'], $uploadDir . $_FILES['file1']['name']);
        $im1 = $_FILES['file1']['name'];
        $obj_application->update_qualityslider_info("img1", $im1);
    }
    if ($_FILES['file2']['tmp_name']) {
        move_uploaded_file($_FILES['file2']['tmp_name'], $uploadDir . $_FILES['file2']['name']);
        $im2 = $_FILES['file2']['name'];
        $obj_application->update_qualityslider_info("img2", $im2);
    }
    if ($_FILES['file3']['tmp_name']) {
        move_uploaded_file($_FILES['file3']['tmp_name'], $uploadDir . $_FILES['file3']['name']);
        $im3 = $_FILES['file3']['name'];
        $obj_application->update_qualityslider_info("img3", $im3);
    }
    if ($_FILES['file4']['tmp_name']) {
        move_uploaded_file($_FILES['file4']['tmp_name'], $uploadDir . $_FILES['file4']['name']);
        $im4 = $_FILES['file4']['name'];
        $obj_application->update_qualityslider_info("img4", $im4);
    }
    if ($_FILES['file5']['tmp_name']) {
        move_uploaded_file($_FILES['file5']['tmp_name'], $uploadDir . $_FILES['file5']['name']);
        $im5 = $_FILES['file5']['name'];
        $obj_application->update_qualityslider_info("img5", $im5);
    }
    if ($_FILES['file6']['tmp_name']) {
        move_uploaded_file($_FILES['file6']['tmp_name'], $uploadDir . $_FILES['file6']['name']);
        $im6 = $_FILES['file6']['name'];
        $obj_application->update_qualityslider_info("img6", $im6);
    }
    if ($_FILES['file7']['tmp_name']) {
        move_uploaded_file($_FILES['file7']['tmp_name'], $uploadDir . $_FILES['file7']['name']);
        $im7 = $_FILES['file7']['name'];
        $obj_application->update_qualityslider_info("img7", $im7);
    }
    if ($_FILES['file8']['tmp_name']) {
        move_uploaded_file($_FILES['file8']['tmp_name'], $uploadDir . $_FILES['file8']['name']);
        $im8 = $_FILES['file8']['name'];
        $obj_application->update_qualityslider_info("img8", $im8);
    }
    if ($_FILES['file9']['tmp_name']) {
        move_uploaded_file($_FILES['file9']['tmp_name'], $uploadDir . $_FILES['file9']['name']);
        $im9 = $_FILES['file9']['name'];
        $obj_application->update_qualityslider_info("img9", $im9);
    }
}




if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>
<?php include("./includes/header.php"); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <?php include './includes/left_bar.php'; ?>
            </div>

            <!-- top navigation -->
            <?php include './includes/top_navbar.php'; ?>
            <!-- /top navigation -->


            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Quality</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Quality Slider <small>All Information</small></h2>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="row"> 
                                    <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="qualityPolicy.php" method="post">
                                        <h3 class="text-center text-success"><?php
                                            if (isset($message)) {
                                                echo $message;
                                            }
                                            ?></h3>
                                        <h3 class="text-danger text-center">Quality Slider</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1 <span class="required">*</span>
                                            </label>
                                         <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file1"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img1']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 2 <span class="required">*</span>
                                            </label>
                                           <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file2"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img2']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 3 <span class="required">*</span>
                                            </label>
                                         <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file3"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img3']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <h3 class="text-danger text-center">Certification Slider</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1 <span class="required">*</span>
                                            </label>
                                        <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file4"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img4']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 2 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file5"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img5']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 3 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file6"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img6']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>

                                        <h3 class="text-danger text-center">Brands Slider</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file7"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img7']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 2 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file8"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img8']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 3 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-xs-12">
                                                <input type="file" id="last-name" name="file9"  class="form-control col-md-7 col-xs-12">
                                            </div> 
                                            <div class="col-md-4 col-xs-12">
                                                <img src="../images/qualitypolicy/<?= $quality_info['img9']; ?>" style="width:150px; height:100px;">
                                            </div>
                                        </div>



                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" name="update" class="btn btn-success">Update</button>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <?php include './includes/footer.php'; ?>
