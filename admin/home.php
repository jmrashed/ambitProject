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

                <!-- page content -->
                <?php
                if (isset($pages)) {
                    if ($pages == 'add_completed') {
                        include './pages/add_completed_content.php';
                    }  else if($pages == 'add_ongoing') {
                        include './pages/add_ongoing_content.php';
                    }else if($pages == 'add_upcoming') {
                        include './pages/add_upcoming_content.php';
                    }else if($pages == 'manage_completed') {
                        include './pages/manage_completed_content.php';
                    }else if($pages == 'edit_completed') {
                        include './pages/edit_completed_content.php';
                    }else if($pages == 'manage_ongoing') {
                        include './pages/manage_ongoing_content.php';
                    }else if($pages == 'edit_ongoing') {
                        include './pages/edit_ongoing_content.php';
                    }else if($pages == 'manage_upcoming') {
                        include './pages/manage_upcoming_content.php';
                    }else if($pages == 'edit_upcoming') {
                        include './pages/edit_upcoming_content.php';
                    }
                } else {
                    include './includes/main_body.php';
                }
                ?>
                <!-- /page content -->

                <!-- footer content -->
                <?php include './includes/footer.php'; ?>
