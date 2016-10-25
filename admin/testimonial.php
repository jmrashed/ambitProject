<?php
session_start();
$testimonial_info['name'] = "";
$testimonial_info['address'] = "";
$testimonial_info['description'] = "";
$testimonial_info['web'] = "";
$testimonial_info['facebook'] = "";
$testimonial_info['twitter'] = "";
$testimonial_info['skype'] = "";

//require './includes/connection.php';
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

$quiry_result = $obj_application->select_all_testimonial_info();
if (isset($_POST['submit'])) {
    $uploadDir = "../images/testimonial/";
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $_FILES['file']['name']);
    $message = $obj_application->add_testimonial_info($_POST, $_FILES['file']['name']);
    header("Location:testimonial.php?message=$message");
}

if (isset($_POST['update'])) {
    $obj_application->update_testimonial_info($_POST);
}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

if (isset($_GET['message'])) {
    $message = $_GET['message'];
}


if (isset($_GET['status'])) {
    $id = $_GET['id'];
    $message = $obj_application->delete_testimonial_info($id);
    header("Location:testimonial.php?message=$message");
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
                            <h3>Testimonial</h3>
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
                                    <h2>Testimonial Details<small>All Information</small></h2>
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

                                    <?php
                                    if (isset($message)) {
                                        echo '<h3 class="text-danger">' . $message . '</h3>';
                                    }
                                    ?>
                                    <?php if (isset($_GET['add_testimonial'])) { ?>
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="testimonial.php"  enctype="multipart/form-data"  method="post">

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" id="last-name" name="name" value="<?php echo $testimonial_info['name']; ?>"   class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea name="address" rows="3" class="form-control"><?php echo $testimonial_info['address']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <textarea name="description" id="ckeditor" rows="5" class=" ckeditor form-control"><?php echo $testimonial_info['description']; ?></textarea>
                                                </div>
                                            </div>
                                            <p class="lead text-center">Social Links</p>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Web <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="web" value="<?php echo $testimonial_info['web']; ?>"   class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Skype <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="skype" value="<?php echo $testimonial_info['skype']; ?>"   class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="facebook" value="<?php echo $testimonial_info['facebook']; ?>"   class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="last-name" name="twitter" value="<?php echo $testimonial_info['twitter']; ?>"   class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="file" id="last-name" name="file"  class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <?php if (isset($_GET['edit'])) { ?>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                                        <button type="submit" name="update" class="btn btn-success">Update</button>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </form>

                                    <?php } ?>

                                    <h3 class="">All Testimonials</h3>
                                    <hr>
                                    <div class="pull-right"> 
                                        <a href="testimonial.php?add_testimonial=yes" class="btn btn-success">
                                               <i class="fa fa-user-plus"> </i> 
                                            Add Testimonial</a>
                                  
                                    </div>
                                    <table class="table table-responsive table-bordered">
                                        <tr>
                                            <th>SI</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Description</th>
                                            <th>Web</th>
                                            <th>Facebook</th>
                                            <th>Twitter</th>
                                            <th>Skype</th>
                                            <th>Image</th>
                                            <th>Action</th>

                                        </tr>
                                        <?php
                                        if ($quiry_result->num_rows > 0) {
                                            while ($testimonial_info = mysqli_fetch_assoc($quiry_result)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $testimonial_info['id']; ?></td>
                                                    <td><?php echo $testimonial_info['name']; ?></td>
                                                    <td><?php echo $testimonial_info['address']; ?></td>
                                                    <td><?php echo $testimonial_info['description']; ?></td>
                                                    <td><?php echo $testimonial_info['web']; ?></td>
                                                    <td><?php echo $testimonial_info['facebook']; ?></td>
                                                    <td><?php echo $testimonial_info['twitter']; ?></td>
                                                    <td><?php echo $testimonial_info['skype']; ?></td>
                                                    <td><img src="../images/testimonial/<?php echo $testimonial_info['image']; ?>" style="width:100px; height:50px;"></td>
                                                    <td>
                                                        <a class="btn btn-danger" href="testimonial.php?status=delete&id=<?php echo $testimonial_info['id']; ?>"> 
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- footer content -->
            <?php include './includes/footer.php'; ?>
