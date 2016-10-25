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


$quiry_result = $obj_application->select_concern_info('tbl_sonargoan');
$concern_info = mysqli_fetch_assoc($quiry_result);

if (isset($_POST['update'])) {
    
    $uploadDir = "../images/sisterconcern/";
    move_uploaded_file($_FILES['file']['tmp_name'],$uploadDir. $_FILES['file']['name']);
    
    $obj_application->update_concern_info($_POST,'tbl_sonargoan',$_FILES['file']['name']);
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
                            <h3>SonarGoan</h3>
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
                                    <h2>SonarGoan <small>All Information</small></h2>
                                
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="row"> 
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="sonargoan.php" enctype="multipart/form-data" method="post">
                                        <h3 class="text-center text-success"><?php
                                            if (isset($message)) {
                                                echo $message;
                                            }
                                            ?></h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="title" value="<?php echo $concern_info['title']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea name="description" class="ckeditor" id="ckeditor"  rows="10" class="form-control"><?php echo $concern_info['description']; ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1 <span class="required">*</span>
                                            </label>
                                            
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <input type="file" id="last-name" name="file"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
 <img src="../images/sisterconcern/<?php echo $concern_info['image']; ?>" style="width:100px;height:100px;">
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
            <?php 
                                            
            include './includes/footer.php'; ?>
