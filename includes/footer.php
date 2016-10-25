<?php
if (isset($page)) {
    if ($page != "index.php") {
        ?> 


        <footer> 
            <div class="container back">
                <div class="col-md-3">
                    <h4 class="page-header">SISTER CONCERN</h4>
                    <div class="list-group">
                        <a href="../sisterConcernBuilders.php" class="list-group-item ">AMBIT BUILDERS</a> 
                        <a href="../sisterConcernColorGraphics.php" class="list-group-item ">AMBIT COLOR GRAPHICS</a> 
                        <a href="../sisterConcernFisheries.php" class="list-group-item ">AMBIT FISHERIES</a>  
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="page-header">PROPERTY/PROJECTS</h4>
                    <div class="list-group">
                        <a href="upcoming.php" class="list-group-item ">UPCOMING</a>
                        <a href="ongoing.php" class="list-group-item " >ONGOING</a>
                        <a href="complete.php" class="list-group-item">COMPLETED</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="page-header">ABOUT US</h4>
                    <div class="list-group">
                        <a href="./aboutus.php" class="list-group-item ">ABOUT US</a>
                        <a href="./qualitypolicy.php" class="list-group-item " >QUALITY POLICY</a>
                        <a href="./testimonial.php" class="list-group-item">TESTIMONIAL</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="page-header">Head office Address</h4>
                    <p class="text-left"> 
                        <?php echo $contact_info['h_address']; ?>
                    </p>
                </div>  
                <hr class="hr">
                <div class="text-center">
                    <p>© 2016 Ambit-bd.com. All Rights Reserved.</p>
                    <ul class="list-inline">
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>

        </footer>


        <?php
    }
}
?>


<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.11.1.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
   
    $(function () {
  $('[data-toggle="popover"]').popover()
})
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>

</html>
