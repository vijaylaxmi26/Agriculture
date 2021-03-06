
<?php  require_once("./../includes/db1.php"); ?>

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
	<style type="text/css">
		.titleText{
			color: #111;
			font-size: 2em;
			font-weight: 300;
		}
		.titleText span{
			color: #37b859;
			font-size: 1.5em;
			font-weight: 700;
		}
		.title{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;

		}
		
		.menu .content{
			display: flex;
			justify-content: center;
			flex-direction: row-reverse;
			flex-wrap: wrap;
			margin-top: 40px;
		} 

		.menu .content .box{
			width: 340px;
			margin: 20px;
			border: 15px solid #fff;
			box-shadow: 0 5px 35px rgba(0,0,0,0.08);
		}
		.menu .content .box .imgBx{
			position: relative;
			width: 100%;
			height: 300px;
		}
		.menu .content .box .imgBx img{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.menu .content .box .text{
			padding: 15px 0 5px;
		}
		.menu .content .box .text h3{
			font-weight: 400;
			color: #111;
		}

	</style>
</head>
<body>

	<!-- Navigation -->
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
						<a href="contruct.php" class="nav-link fw-bold">Create a Contract</a>
					</li>
					<li class="nav-item">
						<a href="user-show.php" class="nav-link fw-bold">Farmers</a>
					</li>
					<li class="nav-item">
						<a href="../includes/logout.php" class="nav-link">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<section class="menu" id="menu">
		<div class="title">
			<h2 class="titleText">Our <span>F</span>armers</h2>
			<p>he latest tech news about the world's best (and sometimes worst) hardware, apps, and much more.</p>
		</div>
		<div class="content">
			<?php

			$sql ="select * from farmer";
			$stmt =$pdo->prepare($sql);
			$stmt->execute();

			while($posts=$stmt->fetch(PDO::FETCH_ASSOC)){
				$farmer_id=$posts['farid'];
				$farmer_fname =$posts['farfirname'];
                $farmer_lname =$posts['farlasname'];
				$farmer_photo = $posts['farimgland'];
                $farmer_land=$posts['farland'];		
                $farmer_addr=$posts['faraddr'];	
				$farmer_phone=$posts['farphone'];
				$farmer_email=$posts['faremail'];		
				//$imageURL1 = $posts['farimland'];	
					
				//$imageURL = $imageURL1;
				?>
				
				<div class="box">
					<div class="imgBx">
						<img src="../includes/images/<?php echo $farmer_photo; ?>" alt="<?php echo $farmer_photo ?>">
					</div>
					<div class="text">
						<h3><?php echo "$farmer_fname $farmer_lname"?></h3>
						<p class="card-text" style="font-size:12px;">Farming id: <?php echo $farmer_id ?><br>
						Farming land: <?php echo $farmer_land ?><br>
						Farmer phone number: <?php echo $farmer_phone ?><br>
                        Farmer email: <?php echo $farmer_email ?> </br>
						Address: <?php echo $farmer_addr ?></br>
                       </p>

					</div>
				</div>

            <?php
            }
            ?>               
			</div>

		</section>




		<!-- Bootstrap Js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	</body>
	</html>