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
$quiry_result = $obj_application->select_all_social_link_info();
$social_link = mysqli_fetch_assoc($quiry_result);
 
if (isset($_POST['update'])) {
    $obj_application->update_social_link($_POST);
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
                            <h3>Social Media</h3>
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
                                    <h2>Social Media <small>All Information</small></h2>
                                
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="row"> 
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">
                                        <h3 class="text-center text-success"><?php
                                            if (isset($message)) {
                                                echo $message;
                                            }
                                            ?></h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Facebook <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="facebook" value="<?php echo $social_link['facebook']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Twitter <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="twitter" value="<?php echo $social_link['twitter']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Google Plus <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="googletalk" value="<?php echo $social_link['googletalk']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Youtube <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="youtube" value="<?php echo $social_link['youtube']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Instragram <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="instagram" value="<?php echo $social_link['instagram']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Linkedin <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="linkedin" value="<?php echo $social_link['linkedin']; ?>" required="required" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 " for="first-name">Website <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="website" value="<?php echo $social_link['website']; ?>" required="required" class="form-control">
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
