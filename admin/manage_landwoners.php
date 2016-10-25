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
$quiry_result = $obj_application->select_landwoners_info();
$landwoners_info = mysqli_fetch_assoc($quiry_result);

if (isset($_POST['update'])) {
    $obj_application->update_about_info($_POST);
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

            <?php
            if (isset($_GET['status'])) {
                $category_id = $_GET['id'];
                if ($_GET['status'] == 'delete') {
                    $message = $obj_application->delete_completed_project_by_id($category_id);
                }
            }
 
            ?>



            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Land Woners</h3>
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
                                    <h2>Landwoner <small>Custom design</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">

                                    

                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                        <input type="checkbox" id="check-all" class="flat">
                                                    </th>
                                                    <th class="column-title">  ID</th>
                                                    <th class="column-title"> Name</th>
                                                    <th class="column-title">Contact Name</th>
                                                    <th class="column-title">Contact Address</th>
                                                    <th class="column-title">Email</th>
                                                    <th class="column-title">Telephone</th>
                                                    <th class="column-title">Cellphone</th> 
                                                    <th class="column-title">Address</th>
                                                    <th class="column-title">Land Size</th>
                                                    <th class="column-title">Quantity</th> 
                                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                                    </th>
                                                    <th class="bulk-actions" colspan="7">
                                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php while ($landwoners_info = mysqli_fetch_assoc($quiry_result)) { ?>
                                                    <tr class="even pointer">
                                                        <td class="a-center ">
                                                            <input type="checkbox" class="flat" name="table_records">
                                                        </td> 
                                                        <td class=" "><?php echo $landwoners_info['landowner_id']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['name']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['contactname']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['contact_address']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['email']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['telephone']; ?></td>
                                                         <td class=" "><?php echo $landwoners_info['cellphone']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['address']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['land_size']; ?></td>
                                                        <td class=" "><?php echo $landwoners_info['quantity']; ?></td>
                                                        <td class=" ">
                                                            <a class="btn btn-info" href="edit_completed.php?id=<?php echo $landwoners_info['completed_project_id']; ?>" title="Edit">
                                                                <span class="glyphicon glyphicon-edit"></span>  
                                                            </a>
                                                            <a class="btn btn-danger" href="?status=delete&&id=<?php echo $landwoners_info['completed_project_id']; ?>" title="Delete" onclick="return check_delete();
                                                               ">
                                                                <span class="glyphicon glyphicon-trash"></span> 
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <?php include './includes/footer.php'; ?>
