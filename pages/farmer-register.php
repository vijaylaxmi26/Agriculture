<?php  require_once("./../includes/header.php"); ?>
<?php require('../includes/farmer-signup.php'); ?>
    <!-- Navbar-->
    <nav class="navbar py-4 navbar-expand-md navbar-light bg-light sticky-top bg-white">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../css/images/tractor.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Agriculture
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="../index.php" class="nav-link fw-bold">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">Farmers</a>
                    </li>
                    <li class="nav-item">
                        <a href="login-page.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
        if(isset($_GET['error'])){
            $error_given = $_GET['error'];
            if($error_given == "checkemail")
            {
                echo "<h3><span style='text-align:center;'>This email has already been registered</span></h3>";
            }
            else if($error_given == "passwrong")
            {
                echo "<h3><span style='text-align:center;'>Password does not match</span></h3>";
            }
            else if($error_given == "none")
            {
                echo "<h3><span style='text-align:center;'>Registration is succesful</span></h3>";
            }
        }
    ?>

    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="../includes/farmer-signup.php" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="farmer-firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="farmer-lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- landarea -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="land" type="number" name="farmer-land" placeholder="Land area in Acres" class="form-control bg-white border-left-0 border-md">
                        </div>
                        
                         <!-- land image-->
                         <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                                
                            </div>
                            <input id="land" type="file" name="land-image" value="upload" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!---Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="textarea" name="farmer-address" placeholder="Address" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="farmer-email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <input id="phoneNumber" type="tel" name="farmer-phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>


                        
                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="farmer-password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="cpassword" type="password" name="farmer-cpassword" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" name="farmer-submit" class="btn-primary btn submit-btn py-2 font-weight-bold">Create your account</button>
                        </div>

                        

                        

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>