
<?php include("./includes/header.php"); 
if (isset($_POST['btn'])) {
    $message = $obj_application->save_client_info($_POST);
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
            <h2 class="panel-heading headershadow">Clients</h2>

            <form class="form-horizontal " method="post" action="" >
                <div class="row shadow">   

                    <div class="col-md-5 subshadows">
                        <div class="panel-heading">
                            <div class="panel-title text-center ">
                                <h4 class="title">Your Preference</h4>
                                <hr />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Prefered Location</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="prefered_location" id="name"  placeholder="Prefered locatiom"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Prefered Size</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-indent-right" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="prefered_size" id="email"  placeholder="Prefered size"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Minimum number of bed room</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-bed" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="min_bedroom" id="username"  placeholder="Minimum number of bed room"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Minimum number of Bathroom</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-filter" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="min_bathroom" id="username"  placeholder="Minimum number of bathroom"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                    <div class="col-md-5 subshadows">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h4 class="title">Contact information</h4>
                                <hr />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Profession</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="profession" id="name"  placeholder="Enter your Profession"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="name"  placeholder="Enter your email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Telephone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="telephone" id="name"  placeholder="Enter your telephone no"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Cell Phone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="cellphone" id="name"  placeholder="Enter your cellphone no"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="address" id="name"  placeholder="Enter your address"/>
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




