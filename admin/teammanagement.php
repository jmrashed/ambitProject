<?php
$page_name = basename($_SERVER['PHP_SELF']);
$page_title = strtoupper(basename(__FILE__, '.php'));
$team_info['name'] = "";
$team_info['designation'] = "";
$team_info['details'] = "";
$team_info['image'] = "";

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


//$quiry_result = $obj_application->select_team_info('tbl_proparties');
//$team_info = mysqli_fetch_assoc($quiry_result);

if (isset($_POST['save'])) {
    $uploadDir = "../images/team/";
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $_FILES['file']['name']);

    $obj_application->insert_team_info($_POST, $_FILES['file']['name']);
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

$query_result = $obj_application->select_all_team_info();

if (isset($_GET['status'])) {
    $id = $_GET['id'];
    $msg = $obj_application->delete_team_info($id);
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
                            <h3><?= $page_title; ?></h3>
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
                                    <h2><?= $page_title; ?> <small>All Information</small></h2>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="row"> 
                                    <form id="demo-form2"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" action="teammanagement.php" method="post">
                                        <h3 class="text-center text-success"><?php
                                            if (isset($message)) {
                                                echo $message;
                                            }
                                            ?></h3>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="name" value="<?php echo $team_info['name']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>                    
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Designation  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="text" id="last-name" name="designation" value="<?php echo $team_info['designation']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Details <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea name="details"  class="form-control"><?php echo $team_info['details']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile Picture <span class="required">*</span>

                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">

                                                <input type="file" id="last-name" name="file"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" name="save" class="btn btn-success">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                    <h3 class="page-header">Team Members</h3>
                                    <table class="table table-bordered table-responsive">
                                        <tr><th>SI</th> <th>Name</th> <th>Designation</th><th>Details</th><th>Profile</th><th>Options</th></tr>                          
                                        <?php
                                        if (isset($msg)) {
                                            echo $msg;
                                        }
                                        ?>
                                        <?php while ($team_info = mysqli_fetch_assoc($query_result)) { ?>
                                            <tr>
                                                <td><?php echo $team_info['id']; ?></td>
                                                <td><?php echo $team_info['name']; ?></td>
                                                <td><?php echo $team_info['designation']; ?></td>
                                                <td><?php echo $team_info['details']; ?></td>
                                                <td><img src="../images/team/<?php echo $team_info['image']; ?>" style="width:50px; height: 50px;"></td>
                                                <td> 
                                                    
                                                    <a class="btn btn-danger" href="teammanagement.php?status=delete&id=<?php echo $team_info['id']; ?>"> 
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                    </a></td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <?php include './includes/footer.php'; ?>
