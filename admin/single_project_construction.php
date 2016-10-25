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



if (isset($_POST['submit'])) {
    /*  echo '<pre>';
      print_r($_POST);
      echo '</pre>';
      echo '<pre>';
      print_r($_FILES);
      echo '</pre>';

     */

    $uploadDir = "../images/singleprojectconstruction/";


    if ($_FILES['file1']['tmp_name']) {
        move_uploaded_file($_FILES['file1']['tmp_name'], $uploadDir . $_FILES['file1']['name']);
        move_uploaded_file($_FILES['file1']['tmp_name'], $uploadDir . $_FILES['file1']['name']);
        $img = $_FILES['file1']['name'];
        $col = "img1";
        $obj_application->update_single_project_construction_info($_POST, $col, $img);
    }
    if ($_FILES['file2']['tmp_name']) {
        move_uploaded_file($_FILES['file2']['tmp_name'], $uploadDir . $_FILES['file2']['name']);
        move_uploaded_file($_FILES['file2']['tmp_name'], $uploadDir . $_FILES['file2']['name']);
        $img = $_FILES['file2']['name'];
        $col = "img2";
        $obj_application->update_single_project_construction_info($_POST, $col, $img);
    }
    if ($_FILES['file3']['tmp_name']) {
        move_uploaded_file($_FILES['file3']['tmp_name'], $uploadDir . $_FILES['file3']['name']);
        move_uploaded_file($_FILES['file3']['tmp_name'], $uploadDir . $_FILES['file3']['name']);
        $img = $_FILES['file3']['name'];
        $col = "img3";
        $obj_application->update_single_project_construction_info($_POST, $col, $img);
    }
    if ($_POST['status']) {
        $col = "status";
        $value = $_POST['status'];
        $obj_application->update_single_project_construction_info($_POST, $col, $value);
    }
    header("Location:single_project_construction.php?message=Save Successfully");
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
                            <h3>Construction</h3>
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
                                    <h2>Construction Slider <small>All Information</small></h2>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="row"> 
                                    <?php
                                    if (isset($_GET['message'])) {
                                        echo '<h2 class=text-danger>' . $_GET['message'] . '</h2>';
                                    }
                                    ?>
                                    <form class= "" enctype="multipart/form-data" method="get" action="single_project_construction.php" >
                                        <div class="col-md-2">
                                            <label>Category </label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control" name="category" >
                                                <option value="tbl_ongoing_project">Ongoing</option>
                                                <option value="tbl_upcoming_project">Upcoming</option>
                                                <option value="tbl_completed_project">Complete</option>
                                            </select>   
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" name="SearchCategory" value="Search" class="btn btn-success"> 
                                        </div>
                                    </form>




                                    <?php
                                    if (isset($_GET['category'])) {
                                        $category = $_GET['category'];

                                        $quiry_result = $obj_application->select_all_project_info($category);
                                        ?>
                                        <form class= "" enctype="multipart/form-data" method="get" action="single_project_construction.php" >
                                            <input type="hidden" name="category" value="<?= $category; ?>">
                                            <div class="col-md-2">
                                                <label>Project Name </label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-control" name="project_name" >
                                                    <?php while ($project_info = mysqli_fetch_assoc($quiry_result)) { ?>
                                                        <option value="<?= $project_info['project_name']; ?>"><?= $project_info['project_name']; ?></option>
                                                    <?php } ?>
                                                </select>   
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" name="SetSlider" value="Set Slider" class="btn btn-success"> 
                                            </div>
                                        </form>
                                    <?php } ?>
                                    <?php
                                    if (isset($_GET['SetSlider'])) {
                                        $project_category= $_GET['category'];
                                        $project_name = $_GET['project_name'];


                                        $quiry_result = $obj_application->select_single_project_construction($project_name, $project_category);
                                        $project_slider_info = mysqli_fetch_assoc($quiry_result);
                                        $status = $project_slider_info['status'];
                                        ?>
                                        <h2 class="page-header text-danger"><?= $project_name; ?></h2>
                                        <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="single_project_construction.php" method="post">
                                            <h3 class="text-center text-success"><?php
                                                if (isset($message)) {
                                                    echo $message;
                                                }
                                                ?></h3>

                                            <input type="hidden" name="category" value="<?= $category; ?>">
                                            <input type="hidden" name="project_name" value="<?= $project_name; ?>">
                                            <div class="form-group">
                                                <label class=" col-md-12 col-sm-12 col-xs-12" for="first-name">Construction Status <span class="required">*</span>
                                                </label>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <textarea name="status" class="form-control ckeditor" id="ckeditor">
                                                                        
                                                        <?= $status; ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class=" col-md-12 col-sm-12 col-xs-12" for="first-name">Upload Images <span class="required">*</span>
                                                </label>
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <label class="col-md-3">Image 1  </label>    <input type="file" id="last-name" name="file1"  class="form-control ">
                                                    <label class="col-md-3">Image 2    </label>   <input type="file" id="last-name" name="file2"  class="form-control">
                                                    <label class="col-md-3"> Image 3  </label>     <input type="file" id="last-name" name="file3"  class="form-control"> 
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>

                                        </form>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <?php include './includes/footer.php'; ?>
