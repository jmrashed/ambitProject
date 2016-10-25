<?php
$admin_name = $_SESSION['admin_name'];
?>




<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">

            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Manage Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="homeSlider.php">Home Slider</a></li>
                        <li><a href="social_link.php">Manage Social Link</a></li> 
                    </ul>
                </li>

                <li><a><i class="fa fa-briefcase"></i> Manage About <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="aboutus.php">Manage About Us</a></li>
                        <li><a href="qualityPolicy.php">Quality Policy</a></li>
                        <li><a href="testimonial.php">Manage Testimonial</a></li> 
                        <li><a href="teammanagement.php">Manage Team</a></li> 
                    </ul>
                </li>
                <li><a><i class="fa fa-won"></i> Manage Sister Concern<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="builders.php">Manage Builders</a></li>
                        <li><a href="graphics.php">Manage Color Graphics</a></li>
                        <li><a href="fisheries.php">Manage Fisheries</a></li>
                        <li><a href="welfare.php">Manage Welfare Foundation</a></li>
                        <li><a href="properties.php">Manage Properties</a></li>
                        <li><a href="sonargoan.php">Manage Sonargoan City</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-tasks"></i> All Projects <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a><i class="fa fa-tasks"></i> Add Projects <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="add_completed.php">Add Completed</a></li>
                                <li><a href="add_ongoing.php">Add Ongoing</a></li>
                                <li><a href="add_upcoming.php">Add Upcoming</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-pencil-square-o"></i> Manage Projects <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="manage_completed.php">Manage Completed</a></li>
                                <li><a href="manage_ongoing.php">Manage Ongoing</a></li>
                                <li><a href="manage_upcoming.php">Manage Upcoming</a></li>
                            </ul>
                        </li>
                         <li><a href="single_project_slider.php">Manage Single Project Slider</a></li>
                         <li><a href="single_project_floorplan.php">Manage Single Project Floor Plan</a></li>
                         <li><a href="single_project_construction.php">Manage Construction Status</a></li>
                    </ul>
                </li>
                <li><a href="manage_clients.php"><i class="fa fa-users"></i> Clients <span class="fa fa-chevron-down"></span></a></li>
                <li><a href="manage_landwoners.php"><i class="fa fa-users"></i> Landowners <span class="fa fa-chevron-down"></span></a></li>
                <li><a><i class="fa fa-edit"></i> Others <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                        <li><a href="contactus.php">Manage Contact Us</a></li>
                        <li><a href="message.php">Message</a></li>
                    </ul>
                </li>


            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

</div>