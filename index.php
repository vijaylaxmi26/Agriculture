<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar py-4 navbar-expand-md navbar-light bg-light sticky-top bg-white">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="css/images/tractor.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Agriculture
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link fw-bold">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">About Us</a>
                    </li>
                    <?php 

                        if(isset($_SESSION['user'])) {
                            echo "<li class='nav-item'><a href='pages/user-show.php' class='nav-link fw-bold'>Farmers</a></li>";
                            echo "<li class='nav-item'><a href='includes/logout.php' class='nav-link'>Logout</a></li>";
                        }
                        else{
                            echo "<li class='nav-item'><a href='pages/farmer-register.php' class='nav-link fw-bold'>Farming</a></li>";
                            echo "<li class='nav-item'><a href='pages/login-page.php' class='nav-link'>Login</a></li>";
                        }
                    
                    
                    ?>
                    <!-- <li class="nav-item">
                        <a href="pages/farmer-register.php" class="nav-link fw-bold">Farming</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="pages/login-page.php" class="nav-link">Login</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Slider -->
    <div id="slides" class="carousel slide" data-riddle="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css/images/c-1.jpeg">   
                <div class="carousel-caption">
                    <h1 class="display-2">Sample</h1>
                    <h3>Lorem ipsum text</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Get Started</button>
                </div> 
            </div>
            <div class="carousel-item">
                <img src="css/images/c-1.jpeg">    
            </div>
            <div class="carousel-item">
                <img src="css/images/c-1.jpeg">    
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
    <div class="padding"></div>
    <!-- Welcome Section -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Our Services</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">We provide endless amount of services to the customer as well as to a company. lorem ipsum text blah balah</p>
            </div>
        </div>
    </div>

    <!-- Three coloumn section -->
    <div class="container-fluid padding padding-top">
        <div class="text-center row padding">
            <div class="col-xs-6 col-sm-6 col-md-4">
                <i class="fas fa-truck"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-gift"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-envelope"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!-- Two coloumn section -->
    <div class="about-us container-fluid padding padding-bottom">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>About US</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus sequi dolore qui laudantium sunt deleniti, id molestias eligendi magni ad excepturi sed nihil repellendus! Eveniet numquam quaerat dolor consequuntur molestias.</p>
            </div>
            <div class="col-lg-6">
                <img src="" alt="photo" class="img-fluid">
            </div>
        </div>
    </div>
    <hr class="my-4">

    <!-- Fixed Image Background -->
    <figure>
        <div class="fixed-wrap" id="fixed">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!-- Contact Us -->
    <!--Section: Contact v.2-->
    <section class="mb-4 contact-us">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope-open mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

    </section>
<!--Section: Contact v.2-->


    <!-- Footer -->
    <footer class="bg-dark text-center text-white padding-top">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    



    <!-- Bootstrap Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>