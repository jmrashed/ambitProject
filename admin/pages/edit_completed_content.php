<?php
if(isset($_POST['update'])) {
    $uploadDir = "../images/";
    move_uploaded_file($_FILES['image']['tmp_name'],$uploadDir. $_FILES['image']['name']);
    $obj_application->update_completed_project($_POST, $_FILES['image']['name']);
}
if(isset($_SESSION['message'])){
    $message=$_SESSION['message'];
}

$completed_project_id=$_GET['id'];
$query_result=$obj_application->select_completed_project_by_id($completed_project_id);
$completed_project_info=mysqli_fetch_assoc($query_result);



?>


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
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
                        <h2>Form Design <small>different form elements</small></h2>
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
                        <br />
                        <form id="demo-form2" enctype="multipart/form-data"  class="form-horizontal form-label-left" action="" method="post">

                            <div class="row">
                                <div class="col-md-6">         
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="first-name" name="project_name" value="<?php echo $completed_project_info['project_name'];?>"  class="form-control ">
                                            <input type="hidden" id="first-name" name="id" value="<?php echo $completed_project_info['id'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="address" value="<?php echo $completed_project_info['address'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Land Area <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="land_area" value="<?php echo $completed_project_info['land_area'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Land Position <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="land_position" value="<?php echo $completed_project_info['land_position'];?>"  class="form-control ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="middle-name" class="form-control " type="text" name="label" value="<?php echo $completed_project_info['label'];?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="city" value="<?php echo $completed_project_info['city'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Project Location <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="project_location" value="<?php echo $completed_project_info['project_location'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. of Apartment <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="no_of_apertment" value="<?php echo $completed_project_info['no_of_apertment'];?>"  class="form-control ">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apartment Size <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="apertment_size" value="<?php echo $completed_project_info['apertment_size'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. of Lift <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="no_of_lift" value="<?php echo $completed_project_info['no_of_lift'];?>"  class="form-control ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Lift Capacity <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="lift_capacity" value="<?php echo $completed_project_info['lift_capacity'];?>"  class="form-control ">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Generator <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="last-name" name="generator" value="<?php echo $completed_project_info['generator'];?>"  class="form-control ">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Started Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" id="last-name" name="started_date" value="<?php echo $completed_project_info['started_date'];?>"  class="form-control "> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Completion Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" id="last-name" name="ended_date" value="<?php echo $completed_project_info['ended_date'];?>"  class="form-control "> 
                                        </div>
                                    </div>  <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Image <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" id="last-name" name="image" value="<?php echo $completed_project_info['image'];?>"  class="form-control "> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="form-group">
                                    <label class="label label-info col-md-12" for="last-name"><h5>Description</h5>  </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea  id="ckeditor"  name="description"  class="ckeditor form-control "><?php echo $completed_project_info['description'];?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label label-info col-md-12" for="last-name"><h5>Construction Status</h5>  </label>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="ckeditor" name="construction_status" class="ckeditor form-control "><?php echo $completed_project_info['construction_status'];?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="label label-info col-md-12" for="last-name"><h5>Video Link</h5>  </label>     
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text"  id="last-name" name="viedo_link" value="<?php echo $completed_project_info['viedo_link'];?>"  placeholder="https://www.youtube.com/watch?v=2YKx8F_9zDA" class="form-control ">
                                    </div>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12"> 
                                    <input type="submit" name="update" class="btn btn-success col-md-12" value="Update">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


