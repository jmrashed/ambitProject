
<?php include("./includes/header.php"); 
if (isset($_POST['btn'])) {
    $message = $obj_application->save_landowner_info($_POST);
}
?>
<?php include("./includes/navbar.php"); ?>
<?php
if (isset($message)) {
    echo $message;
}
?>
<div class="main-login main-center margintop60">
    <div class="container aboutus ">
        <div class="row subaboutus">
            <h2 class="panel-heading headershadow">Landwoners</h2>


            <form class="form-horizontal" method="post" action="#">
                <div class="row shadow">
                    <div class="col-md-5 subshadows">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4 class="title">BASIC INFORMATION OF THE LAND</h4>
                                <hr />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-md-2 control-label">ADDRESS</label>
                            <div class="cols-md-12">
                                <div class="input-group">
                                    <textarea name="address" cols="70" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-12 control-label">LAND SIZE</label>
                            <div class="row">
                                <div class="col-sm-12"> 
                                    <div class="col-md-6 col-sm-6">
                                        <input type="number" name="land_size" class="form-control pull-left" placeholder="Land Size"/>

                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control pull-right" name="quantity">
                                            <option value="katha">KATHA</option>
                                            <option value="bigha">BIGHA</option>
                                        </select>


                                    </div> 
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2"></div>

                    <div class="col-md-5 subshadows">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4 class="title">CONTACT INFORMATION</h4>
                                <hr />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">LANDOWNER'S NAME</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Land Owners Name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">CONTACT PERSON'S NAME</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="contactname" id="name"  placeholder="Contact Person's Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">CONTACT ADDRESS</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="contact_address" id="name"  placeholder="Address"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">EMAIL</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="name"  placeholder="Email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">TELEPHONE</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="telephone" id="name"  placeholder="Telephone Number"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">CELL PHONE</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="cellphone" id="name"  placeholder="Cellphone Number"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row downsubshadows text-center">
                    <div class="">
                        <input type="submit" name="btn" class="btn btn-primary" style="width:80%" value="Submit">
                    </div> 
                </div>

            </form>

        </div>
    </div>
</div>

<?php include("./includes/footer.php"); ?>




