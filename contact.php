<?php



if (isset($_POST['btn'])) {
    $message = $obj_application->send_and_save_mail($_POST);
}
?>


<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); ?>


<div class="container aboutus margintop60">

    <div class="row subaboutus">
        <h2 class="panel-heading headershadow" id="contact">Contact Us</h2>
        <div class="col-md-3">
            <div class="list-group">
                <a href="#contact" class="list-group-item active">Contact Us</a>
                <a href="#location" class="list-group-item">Location Map</a>
                <a href="#time" class="list-group-item">Schedule Time</a>
            </div>


            <div class="panel panel-primary">
                <div class="panel-heading">      <?php echo $contact_info['head_office'];?></div>
                <div class="panel-body">
            <?php echo $contact_info['h_address'];?>
                </div>
            </div>  

            <div class="panel panel-primary">
                <div class="panel-heading">     <?php echo $contact_info['local_office'];?> </div>
                <div class="panel-body">
            <?php echo $contact_info['l_address'];?>
                </div>
            </div>  

            <div class="panel panel-primary" id="time">
                <div class="panel-heading"> Time Scdhules  </div>
                <div class="panel-body">
                    Saturday to Thrusday Open<br>
                    Friday Close
                </div>
            </div>  
  
        
        </div>
        <div class="col-md-9">
             

            <?php if (isset($message)) { ?>


                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>   <?= $message; ?>  </div>

            <?php } ?>
            <form id="contact-form" method="post" action="" role="form">


                <div class="row shadow">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Phone</label>
                            <input id="form_phone" type="tel" name="phone_number" class="form-control" placeholder="Please enter your phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 
                </div>
                <div class="row downsubshadows text-center">
                    <div class="">
                        <input type="submit" name="btn" class="btn btn-primary" style="width:80%" value="Send Message">
                    </div> 
                </div>

            </form>


            <h4 class="lead" id="location">Location Map</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.6701414034005!2d90.4156919146091!3d23.83032598455009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65c3a877bc3%3A0x5946ee1d0c93140a!2sKhilkhet+Nikunja-2+Masjid!5e0!3m2!1sen!2sbd!4v1475216169889" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>        





</div>




<?php include("./includes/footer.php"); ?>
