<?php

/**
 * Description of Application
 *
 * @author NAZMUS-SAKIB
 */
class Application {

    private $db_connect;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_realstate';
      //  $this->db_connect = mysqli_connect($host_name, $user_name, $password, $db_name);
          $this->db_connect= mysqli_connect("127.0.0.1", "ambitbd_root", "S]67U+c};-bR@mWB", "ambitbd_realstate");
        if (!$this->db_connect) {
            die('Connection Fail' . mysqli_error($this->db_connect));
        }
    }

    public function save_client_info($data) {
        $sql = "INSERT INTO tbl_clients (prefered_location, prefered_size, min_bedroom, min_bathroom, name, profession, email, telephone, cellphone,address,datetime) "
                . "VALUES ('$data[prefered_location]', '$data[prefered_size]', '$data[min_bedroom]' ,'$data[min_bathroom]', '$data[name]', '$data[profession]', '$data[email]', '$data[telephone]', '$data[cellphone]','$data[address]',now())";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Information Submitted Successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_landowner_info($data) {
        $sql = "INSERT INTO tbl_landowners (address,land_size,quantity,name,contactname,contact_address,email,telephone,cellphone,datetime)"
                . "VALUES ('$data[address]', '$data[land_size]', '$data[quantity]' ,'$data[name]', '$data[contactname]', '$data[contact_address]', '$data[email]', '$data[telephone]', '$data[cellphone]',now())";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Land Owner\'sInformation Submitted Successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function admin_login_check($data) {
        $admin_user = $data['admin_user'];
        $password = $data['admin_password'];
        $sql = "SELECT * FROM tbl_admin WHERE admin_user='$admin_user' AND admin_password='$password' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            $admin_info = mysqli_fetch_assoc($query_result);
            if ($admin_info) {
                session_start();
                $_SESSION['admin_name'] = $admin_info['admin_name'];
                $_SESSION['admin_id'] = $admin_info['admin_id'];
                header('Location: home.php');
            } else {
                $message = "Your email address or password invalid";
                return $message;
            }
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function admin_logout() {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        unset($_SESSION);
        session_destroy();

        header('Location: index.php');
    }

    public function is_logged_in() {
        if (empty($_SESSION)) {
            header('Location: index.php');
        }
    }

    public function send_and_save_mail($data) {
        $to = 'jmrashed@gmail.com';
        $text = $data['message'];
        $subject = 'Notification';
        $header = $data['email'];
        $sql = "INSERT INTO tbl_mail (first_name,last_name,phone_number,email,message,date_time)"
                . "VALUES ('$data[first_name]', '$data[last_name]', '$data[phone_number]' ,'$data[email]', '$data[message]',now())";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Mail sent successfully..!!';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }

        mail($to, $subject, $text, $header);
    }

    public function add_completed_project($data, $img) {
        $sql = "INSERT INTO tbl_completed_project (project_name, address, land_area, land_position, city, project_location, label, no_of_apertment, apertment_size, description, no_of_lift, lift_capacity, generator, started_date, ended_date, image, construction_status, viedo_link)"
                . "VALUES ('$data[project_name]', '$data[address]', '$data[land_area]' ,'$data[land_position]','$data[city]','$data[project_location]', '$data[label]', '$data[no_of_apertment]','$data[apertment_size]','$data[description]','$data[no_of_lift]','$data[lift_capacity]','$data[generator]','$data[started_date]','$data[ended_date]','$img','$data[construction_status]','$data[viedo_link]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'completed project successfully added';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function add_ongoing_project($data, $img) {
        $sql = "INSERT INTO tbl_ongoing_project (project_name, address, land_area, land_position, city, project_location, label, no_of_apertment, apertment_size, description, no_of_lift, lift_capacity, generator, started_date, ended_date, image, construction_status, viedo_link)"
                . "VALUES ('$data[project_name]', '$data[address]', '$data[land_area]' ,'$data[land_position]','$data[city]','$data[project_location]', '$data[label]', '$data[no_of_apertment]','$data[apertment_size]','$data[description]','$data[no_of_lift]','$data[lift_capacity]','$data[generator]','$data[started_date]','$data[ended_date]','$img','$data[construction_status]','$data[viedo_link]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'ongoing project successfully added';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function add_upcoming_project($data, $img) {
        $sql = "INSERT INTO tbl_upcoming_project (project_name, address, land_area, land_position, city, project_location, label, no_of_apertment, apertment_size, description, no_of_lift, lift_capacity, generator, started_date, ended_date, image, construction_status, viedo_link)"
                . "VALUES ('$data[project_name]', '$data[address]', '$data[land_area]' ,'$data[land_position]','$data[city]','$data[project_location]', '$data[label]', '$data[no_of_apertment]','$data[apertment_size]','$data[description]','$data[no_of_lift]','$data[lift_capacity]','$data[generator]','$data[started_date]','$data[ended_date]','$img','$data[construction_status]','$data[viedo_link]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Upcoming project successfully added';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_complete_project_info() {
        
    }

    public function select_all_completed_project_info() {
        $sql = "SELECT * FROM tbl_completed_project";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_clients_info() {
        $sql = "SELECT * FROM tbl_clients";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_landwoners_info() {
        $sql = "SELECT * FROM tbl_landowners";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_completed_project_by_id($id) {
        $sql = "SELECT * FROM tbl_completed_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_completed_project($data, $image) {
        $sql = "UPDATE tbl_completed_project SET project_name='$data[project_name]', address='$data[address]', land_area='$data[land_area]', land_position='$data[land_position]', city='$data[city]', project_location='$data[project_location]', label='$data[label]', no_of_apertment='$data[no_of_apertment]', apertment_size='$data[apertment_size]', description='$data[description]', no_of_lift='$data[no_of_lift]', lift_capacity='$data[lift_capacity]', generator='$data[generator]', started_date='$data[started_date]', ended_date='$data[ended_date]', image='$image', construction_status='$data[construction_status]', viedo_link='$data[viedo_link]' WHERE id='$data[id]' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Completed info update successfully';
            //header('Location: manage_completed.php');
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_completed_project_by_id($id) {
        $sql = "DELETE FROM tbl_completed_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Completed info deleted successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_ongoing_project_info() {
        $sql = "SELECT * FROM tbl_ongoing_project";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
    
    
        public function select_all_search($tbl,$search) {
        $sql = "SELECT * FROM $tbl where city LIKE '%$search%' or project_location LIKE '%$search%' or project_name LIKE '%$search%' ";
       // echo $sql;
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }
    
    
    

    public function select_ongoing_project_by_id($id) {
        $sql = "SELECT * FROM tbl_ongoing_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_project_by_id($id, $category) {
        if ($category == "tbl_ongoing_project") {
            $colmunName = "id";
        } else if ($category == "tbl_upcoming_project") {
            $colmunName = "id";
        } else if ($category == "tbl_completed_project") {
            $colmunName = "id";
        }
        $sql = "SELECT * FROM $category WHERE $colmunName='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_single_project_slider($project_name, $project_category) {
        $sql = "SELECT * FROM tbl_projects_slider WHERE project_name='$project_name' and project_category='$project_category'";
       // echo '<br><br><br><br><br><br><br><br><br><br><pre>'. $sql . '</pre>';
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_single_project_floorplan($project_name, $project_category) {
        $sql = "SELECT * FROM tbl_project_floorplans WHERE project_name='$project_name' and poject_category='$project_category'";
        // echo '<pre><br><br><br><br>'.$sql.'</pre>';
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_ongoing_project($data, $image) {
        $sql = "UPDATE tbl_ongoing_project SET project_name='$data[project_name]', address='$data[address]', land_area='$data[land_area]', land_position='$data[land_position]', city='$data[city]', project_location='$data[project_location]', label='$data[label]', no_of_apertment='$data[no_of_apertment]', apertment_size='$data[apertment_size]', description='$data[description]', no_of_lift='$data[no_of_lift]', lift_capacity='$data[lift_capacity]', generator='$data[generator]', started_date='$data[started_date]', ended_date='$data[ended_date]', image='$image', construction_status='$data[construction_status]', viedo_link='$data[viedo_link]' WHERE id='$data[id]' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Ongoing info update successfully';
            //header('Location: manage_completed.php');
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_ongoing_project_by_id($id) {
        $sql = "DELETE FROM tbl_ongoing_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Completed info delete successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_upcoming_project_info() {
        $sql = "SELECT * FROM tbl_upcoming_project";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_upcoming_project_by_id($id) {
        $sql = "SELECT * FROM tbl_upcoming_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_upcoming_project($data, $image) {
        $sql = "UPDATE tbl_upcoming_project SET project_name='$data[project_name]', address='$data[address]', land_area='$data[land_area]', land_position='$data[land_position]', city='$data[city]', project_location='$data[project_location]', label='$data[label]', no_of_apertment='$data[no_of_apertment]', apertment_size='$data[apertment_size]', description='$data[description]', no_of_lift='$data[no_of_lift]', lift_capacity='$data[lift_capacity]', generator='$data[generator]', started_date='$data[started_date]', ended_date='$data[ended_date]', image='$image', construction_status='$data[construction_status]', viedo_link='$data[viedo_link]' WHERE id='$data[id]' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Upcoming info update successfully';
            //header('Location: manage_completed.php');
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_upcoming_project_by_id($id) {
        $sql = "DELETE FROM tbl_upcoming_project WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Upcoming info delete successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_about_info() {
        $sql = "SELECT * FROM tbl_about_us";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_about_info($data, $image) {
        $sql = "UPDATE tbl_about_us SET about_title='$data[about_title]',about_description='$data[about_description]',image='$image'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'About info update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_contact_info() {
        $sql = "SELECT * FROM tbl_contact_us";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_contact_info($data) {
        $sql = "UPDATE tbl_contact_us SET head_office='$data[head_office]',h_address='$data[h_address]',local_office='$data[local_office]',l_address='$data[l_address]'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Contact info update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_social_link_info() {
        $sql = "SELECT * FROM tbl_social_links";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_social_link($data) {
        $sql = "UPDATE tbl_social_links SET facebook='$data[facebook]',twitter='$data[twitter]',youtube='$data[youtube]',googletalk='$data[googletalk]',linkedin='$data[linkedin]',instagram='$data[instagram]',website='$data[website]'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Link info update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_concern_info($table) {
        $sql = "SELECT * FROM $table";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_concern_info($data, $table, $img) {
        $sql = "UPDATE $table SET title='$data[title]',description='$data[description]',image='$img'";
        //echo $sql;
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Concern info update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function add_testimonial_info($data, $img) {
        $sql = "INSERT INTO tbl_testimonials (name,address,description,web,facebook,twitter,skype,image)"
                . "VALUES ('$data[name]', '$data[address]', '$data[description]' ,'$data[web]', '$data[facebook]','$data[twitter]','$data[skype]','$img')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Testimonial successfully added';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_testimonial_info() {
        $sql = "SELECT * FROM tbl_testimonials";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_testimonial_info($id) {
        $sql = "DELETE FROM tbl_testimonials WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Testimonial deleted successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_homeslider_info($col1, $vlue, $col2, $img) {


        $sql = "UPDATE tbl_homesliders SET $col1='$vlue',$col2='$img'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_homesliders_info() {
        $sql = "SELECT * FROM tbl_homesliders";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_qualityslider_info($col, $img) {


        $sql = "UPDATE tbl_qualitypolicys SET $col='$img'";
        if (mysqli_query($this->db_connect, $sql)) {
            $_SESSION['message'] = 'Quality image update successfully';
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_quality_info() {
        $sql = "SELECT * FROM tbl_qualitypolicys";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_project_info($category) {

        $sql = "SELECT * FROM $category";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function insert_single_project_slider_info($data, $im1, $im2, $im3) {
        $sql = "INSERT INTO tbl_projects_slider (project_category,project_name,img1,img2,img3) "
                . "VALUES ('$data[category]', '$data[project_name]', '$im1' ,'$im2', '$im3')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Image Uploaded Successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function insert_single_floorplan_info($data, $im1, $im2, $im3, $im4, $im5, $im6, $im7, $im8, $im9, $im10, $im11, $im12) {
        $sql = "INSERT INTO tbl_project_floorplans (poject_category,project_name,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,img11,img12) "
                . "VALUES ('$data[category]', '$data[project_name]', '$im1' ,'$im2', '$im3', '$im4', '$im5', '$im6', '$im7', '$im8', '$im9', '$im10', '$im11', '$im12')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Image Uploaded Successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function insert_team_info($data, $image) {
        $sql = "INSERT INTO tbl_team (name, designation, details, image)"
                . "VALUES ('$data[name]', '$data[designation]', '$data[details]', '$image')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Information Submitted Successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_team_info() {
        $sql = "SELECT * FROM tbl_team";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_team_info($id) {
        $sql = "DELETE FROM tbl_team WHERE id='$id' ";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Team info delete successfully';
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->db_connect));
        }
    }

}
