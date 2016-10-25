<?php
$page_name = basename($_SERVER['PHP_SELF']);
$page_title = strtoupper(basename(__FILE__, '.php'));
?>

<?php include("./includes/header.php"); ?>
<?php
include("./includes/navbar.php");
$quiry_result = $obj_application->select_all_ongoing_project_info();
?>

<div class="container aboutus margintop60" >

    <div class="row subaboutus">
        <h3 class="page-header"><?php echo $page_title; ?> PROJECT</h3>
        <div class="col-md-3">
            <div class="list-group">
                <a href="upcoming.php" class="list-group-item ">UPCOMING</a>
                <a href="ongoing.php" class="list-group-item active" >ONGOING</a>
                <a href="complete.php" class="list-group-item">COMPLETED</a>
            </div>
        </div>

        <div class="col-md-9">  
     
            <?php //include 'projectslider.php';  ?>


            <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_1_slider_init = function () {

                    var jssor_1_SlideshowTransitions = [
                        {$Duration: 1200, $Zoom: 1, $Easing: {$Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad}, $Opacity: 2},
                        {$Duration: 1000, $Zoom: 11, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                        {$Duration: 1200, $Zoom: 1, $Rotate: 1, $During: {$Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                        {$Duration: 1000, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                        {$Duration: 1200, x: 0.5, $Cols: 2, $Zoom: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                        {$Duration: 1200, x: 4, $Cols: 2, $Zoom: 11, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear}, $Opacity: 2},
                        {$Duration: 1200, x: 0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                        {$Duration: 1000, x: -4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                        {$Duration: 1200, x: -0.6, $Zoom: 1, $Rotate: 1, $During: {$Left: [0.2, 0.8], $Zoom: [0.2, 0.8], $Rotate: [0.2, 0.8]}, $Easing: {$Left: $Jease$.$Swing, $Zoom: $Jease$.$Swing, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$Swing}, $Opacity: 2, $Round: {$Rotate: 0.5}},
                        {$Duration: 1000, x: 4, $Zoom: 11, $Rotate: 1, $SlideOut: true, $Easing: {$Left: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.8}},
                        {$Duration: 1200, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                        {$Duration: 1000, x: 0.5, y: 0.3, $Cols: 2, $Zoom: 1, $Rotate: 1, $SlideOut: true, $Assembly: 2049, $ChessMode: {$Column: 15}, $Easing: {$Left: $Jease$.$InExpo, $Top: $Jease$.$InExpo, $Zoom: $Jease$.$InExpo, $Opacity: $Jease$.$Linear, $Rotate: $Jease$.$InExpo}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                        {$Duration: 1200, x: -4, y: 2, $Rows: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Row: 28}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.7}},
                        {$Duration: 1200, x: 1, y: 2, $Cols: 2, $Zoom: 11, $Rotate: 1, $Assembly: 2049, $ChessMode: {$Column: 19}, $Easing: {$Left: $Jease$.$InCubic, $Top: $Jease$.$InCubic, $Zoom: $Jease$.$InCubic, $Opacity: $Jease$.$OutQuad, $Rotate: $Jease$.$InCubic}, $Opacity: 2, $Round: {$Rotate: 0.8}}
                    ];

                    var jssor_1_options = {
                        $AutoPlay: true,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $Rows: 2,
                            $Cols: 6,
                            $SpacingX: 14,
                            $SpacingY: 12,
                            $Orientation: 2,
                            $Align: 156
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 960);
                            refSize = Math.max(refSize, 300);
                            jssor_1_slider.$ScaleWidth(refSize);
                        } else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    //responsive code end
                };

            </script>

            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
                    <?php while ($upcoming_info = mysqli_fetch_assoc($quiry_result)) { ?>
                        <div data-p="150.00" style="display: none;">

                            <a href="singleproject.php?id=<?= $upcoming_info['id']; ?>&category=tbl_ongoing_project"> <img data-u="image" src="images/<?= $upcoming_info['image']; ?>" />  </a>
                            <img data-u="thumb" src="images/<?= $upcoming_info['image']; ?>" />   

                        </div> 
                    <?php } ?>

                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div class="w">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                            <div class="c"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>


        </div>
    </div>        
    <br>
    <div class="row subaboutus">
     

        <div class="text-center aboutus">
            <form class="form-inline" action="ongoing.php" method="post">

                <label for="exampleInputName2" >City </label>  

                <select name="city" class="form-control" >
                    <?php
                    $conn = new mysqli("localhost", "root", "", "db_realstate");
                 //     $conn= mysqli_connect("127.0.0.1", "ambitbd_root", "S]67U+c};-bR@mWB", "ambitbd_realstate");
                    $sql = "SELECT DISTINCT  city FROM tbl_ongoing_project";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?= $row['city']; ?>"><?= $row['city']; ?></option> 
                            <?php
                        }
                    }
                    ?>
                </select>

                <label for="exampleInputEmail2">Location </label>
                <select name="location" class="form-control">
                    <?php
                    $sql = "SELECT DISTINCT  project_location FROM tbl_ongoing_project";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?= $row['project_location']; ?>"><?= $row['project_location']; ?></option> 
                            <?php
                        }
                    }
                    ?>
                </select>

                <input type="submit" name="Search" value="Search" class="btn btn-primary">

            </form>

        </div>
        <?php
        if (isset($_POST['Search'])) {
            $city = $_POST['city'];
            $location = $_POST['location'];
            $sql = "SELECT * FROM tbl_ongoing_project where city='$city' and project_location='$location'";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                ?>
        <div class="row">
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?> 
                    <div class="col-md-4">
                        <br>
                        <img src="images/<?= $row['image']; ?>" style="width:250px; height: 250px">
                        <a href="singleproject.php?id=<?= $row['id']; ?>&category=tbl_ongoing_project"> 
                            <h4 class="text-danger"> <?= $row['project_name']; ?></h4></a>
                    </div>
                    
                    <?php
                }
                ?>  
        </div> 
                <?php
            }
        }
        ?> 
   <h3 class="page-header">Latest Project</h3>

        <?php
        $quiry_result = $obj_application->select_all_ongoing_project_info();
        while ($ongoing_info = mysqli_fetch_assoc($quiry_result)) {
            ?>
                    
            <div class="col-md-3">
                <h4><?php echo $ongoing_info['project_name']; ?></h4><br>
                <a href="singleproject.php?id=<?= $ongoing_info['id']; ?>&category=tbl_ongoing_project"> 
                    <img class="img img-responsive img-thumbnail" src="images/<?php echo $ongoing_info['image']; ?>"></a>
            </div> 
        <?php } ?>

    </div>    
</div>



<?php include("./includes/footer.php"); ?>
