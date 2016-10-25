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


$quiry_result = $obj_application->select_all_homesliders_info();
$home_info = mysqli_fetch_assoc($quiry_result);

if (isset($_POST['update'])) {


    $uploadDir = "../images/homesliders/";

    if ($_FILES['file1']['tmp_name']) {
        move_uploaded_file($_FILES['file1']['tmp_name'], $uploadDir . $_FILES['file1']['name']);
        $img = $_FILES['file1']['name'];
        $t = "title1";
        $v = $_POST['title1'];
        $i = "img1";
        $obj_application->update_homeslider_info($t, $v, $i, $img);
    }
    if ($_FILES['file2']['tmp_name']) {
        move_uploaded_file($_FILES['file2']['tmp_name'], $uploadDir . $_FILES['file2']['name']);
        $img = $_FILES['file2']['name'];
        $t = "title2";
        $v = $_POST['title2'];
        $i = "img2";
        $obj_application->update_homeslider_info($t, $v, $i, $img);
    }
    if ($_FILES['file3']['tmp_name']) {
        move_uploaded_file($_FILES['file3']['tmp_name'], $uploadDir . $_FILES['file3']['name']);
        $img = $_FILES['file3']['name'];
        $t = "title3";
        $v = $_POST['title3'];
        $i = "img3";
        $obj_application->update_homeslider_info($t, $v, $i, $img);
    }
    if ($_FILES['file4']['tmp_name']) {
        move_uploaded_file($_FILES['file4']['tmp_name'], $uploadDir . $_FILES['file4']['name']);
        $img = $_FILES['file4']['name'];
        $t = "title4";
        $v = $_POST['title4'];
        $i = "img4";
        $obj_application->update_homeslider_info($t, $v, $i, $img);
    }
    if ($_FILES['file5']['tmp_name']) {
        move_uploaded_file($_FILES['file5']['tmp_name'], $uploadDir . $_FILES['file5']['name']);
        $img = $_FILES['file5']['name'];
        $t = "title5";
        $v = $_POST['title5'];
        $i = "img5";
        $obj_application->update_homeslider_info($t, $v, $i, $img);
    }
	header("Location:homeSlider.php");
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
                            <h3>Home</h3>
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
                                    <h2>Home Slider <small>All Information</small></h2>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="row"> 
                                    <h2 class="text-danger text-center page-header">Update Home Slider</h2>
                                    <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="homeSlider.php" method="post">
                                        <h3 class="text-center text-success"><?php
            if (isset($message)) {
                echo $message;
            }
            ?></h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 1 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title1" value="<?php echo $home_info['title1']; ?>" class="form-control">

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <input type="file" id="last-name" name="file1"  class="form-control">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <?php if ($home_info['img1']) { ?>
                                                    <img src="../images/homesliders/<?= $home_info['img1']; ?>" style="width: 100px; height: 70px;">
                                                <?php } ?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 2 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title2" value="<?php echo $home_info['title2']; ?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 2 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <input type="file" id="last-name" name="file2" class="form-control">
                                            </div>
                                              <div class="col-md-4 col-sm-4 col-xs-6">

                                                <?php if ($home_info['img2']) { ?>
                                                    <img src="../images/homesliders/<?= $home_info['img2']; ?>" style="width: 100px; height: 70px;">
                                                <?php } ?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 3 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title3" value="<?php echo $home_info['title3']; ?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 3 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <input type="file" id="last-name" name="file3" class="form-control">
                                            </div>
                                              <div class="col-md-4 col-sm-4 col-xs-6">

                                                <?php if ($home_info['img3']) { ?>
                                                    <img src="../images/homesliders/<?= $home_info['img3']; ?>" style="width: 100px; height: 70px;">
                                                <?php } ?>
                                            </div>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 4 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title4" value="<?php echo $home_info['title4']; ?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 4 <span class="required">*</span>
                                            </label>
                                           <div class="col-md-4 col-sm-4 col-xs-6">

                                                <input type="file" id="last-name" name="file4" class="form-control">
                                            </div>  
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <?php if ($home_info['img4']) { ?>
                                                    <img src="../images/homesliders/<?= $home_info['img4']; ?>" style="width: 100px; height: 70px;">
                                                <?php } ?>
                                            </div>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 5 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title5" value="<?php echo $home_info['title5']; ?>" class="form-control">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 5 <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-6">



                                                <input type="file" id="last-name" name="file5" class="form-control">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-6">

                                                <?php if ($home_info['img5']) { ?>
                                                    <img src="../images/homesliders/<?= $home_info['img5']; ?>" style="width: 100px; height: 70px;">
                                                <?php } ?>
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
