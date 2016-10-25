<?php
    
if(isset($_GET['status'])) {
    $completed_project_id=$_GET['id'];
    if($_GET['status'] == 'delete') {
        $message=$obj_application->delete_completed_project_by_id($completed_project_id);
    }
    
}


$quiry_result = $obj_application->select_all_completed_project_info();
?>


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tables <small>Some examples to get you started</small></h3>
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
                        <h2>Table design <small>Custom design</small></h2>
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
                                        <th class="column-title">Completed ID</th>
                                        <th class="column-title">Project Name</th>
                                        <th class="column-title">Project Address</th>
                                        <th class="column-title">Land Area</th>
                                        <th class="column-title">Land Position</th>
                                        <th class="column-title">Level</th>
                                        <th class="column-title">City</th>
                                        <th class="column-title">Project Location</th>
                                        <th class="column-title">No of Apartment</th>
                                        <th class="column-title">Apartment Size</th>
                                        <th class="column-title">Description</th>
                                        <th class="column-title">No of Lift</th>
                                        <th class="column-title">Lift Capacity</th>
                                        <th class="column-title">Generator</th>
                                        <th class="column-title">Start Date</th>
                                        <th class="column-title">Complete Date</th>
                                        <th class="column-title">Image</th>
                                        <th class="column-title">Construction Status</th>
                                        <th class="column-title">Video Link</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while ($completed_project_info = mysqli_fetch_assoc($quiry_result)) { ?>
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class=" "><?php echo $completed_project_info['id']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['project_name']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['address']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['land_area']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['land_position']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['label']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['city']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['project_location']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['no_of_apertment']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['apertment_size']; ?></td>
                                               <td class=" "><?php 
                                            $des=substr ($completed_project_info['description'],0,200)."... <span style=color:red>more</span>";
                                            echo $des;
                                            
                                             ?>
                                            </td>
                                            <td class=" "><?php echo $completed_project_info['no_of_lift']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['lift_capacity']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['generator']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['started_date']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['ended_date']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['image']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['construction_status']; ?></td>
                                            <td class=" "><?php echo $completed_project_info['viedo_link']; ?></td>
                                            <td class=" ">
                                                <a class="btn btn-info" href="edit_completed.php?id=<?php echo $completed_project_info['id']; ?>" title="Edit">
                                                    <span class="glyphicon glyphicon-edit"></span>  
                                                </a>
                                                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $completed_project_info['id']; ?>" title="Delete" onclick="return check_delete();
                                                        ">
                                                    <span class="glyphicon glyphicon-trash"></span> 
                                                </a>
                                            </td>
<?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>