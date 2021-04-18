<?php require_once("./../includes/header.php"); ?>

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
                        <a href="#" class="nav-link fw-bold">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="login-page.php" class="nav-link">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container">
        <div><h1 style="color: red; text-align:center;">Contract of intructor and farmer for contruct farming</h1></div>
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="../css/images/contract.png" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1 style=" text-align:center;" >Contract</h1>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="../includes/datacontract.php" method="post" name="form-submit">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="number" name="investerid" placeholder="invester id" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="number" name="farmerid" placeholder="farmer id" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="text" name="crop" placeholder="Which crop" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Quantity -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="text" name="quantity" placeholder="quantity" class="form-control bg-white border-left-0 border-md">
                        </div>
                        <!-- Duration -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="text" name="year" placeholder="Duration in year" class="form-control bg-white border-left-0 border-md">
                        </div>
                         

                        <!-- Duration -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="number" name="invest" placeholder="investment" class="form-control bg-white border-left-0 border-md">
                        </div>
                         
                        <!-- Job -->
                        <div class="input-group col-lg-12 mb-4">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-black-tie text-muted"></i>
                                </span>
                            </div>
                            <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Choose your job</option>
                                <option value="">Designer</option>
                                <option value="">Developer</option>
                                <option value="">Manager</option>
                                <option value="">Accountant</option>
                            </select> -->
                        </div>

                        

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <button type="submit" name="ssubmit" class="btn-primary btn submit-btn py-2 font-weight-bold">verify details with farmer</button>
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