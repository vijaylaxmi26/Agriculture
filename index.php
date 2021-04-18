<?php 
    session_start();
?>


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
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/login-page.php" class="nav-link">LOGIN</a>
                    </li>
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
    <div class="container-fluid padding">
        <div class="text-center row padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-tractor"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-code"></i>
                <h3>Htmls</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore vitae eius sequi asperiores eveniet ad voluptatibus earum nulla quas voluptas ab veniam, reiciendis omnis veritatis nostrum tempora aut architecto delectus.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!-- Two coloumn section -->
    <div class="container-fluid padding">
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
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!-- Contact Us -->
    <div class="container contact-us">
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Contact US</h2>
            <p class="text-center w-responsive mx-auto mb-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis deleniti optio! Sit, nemo. Ipsum necessitatibus ut doloremque explicabo maxime exercitationem omnis, quam, sed nihil fugit aliquam ipsam vero aperiam?
            </p>
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="fullName" class="form-control">
                                    <label for="fullName">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="email" class="form-control" required>
                                    <label for="emal">Your Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" name="subject" class="form-control">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <textarea name="message" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="messgae">Your Message</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 text-center text-primary">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <p class="text-dark">Karachi, xx 455, xx</p>
                        </li>
                        <li>
                            <i class="fas fa-phont mt-4fa-2x"></i>
                            <p class="text-dark">Karachi, xx 455, xx</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p class="text-dark">Karachi, xx 455, xx</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>


    <!-- Footer -->
    



    <!-- Bootstrap Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>