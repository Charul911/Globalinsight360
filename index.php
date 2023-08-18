<!DOCTYPE html>
<html>
<head>
<title>Project</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'navbar.php' ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Politics.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Politics</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Sports.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Sports and Games</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Forest.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Forest and Widlife</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Business.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Business</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Films.jpg" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Entertainment</h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Food.jpg" alt="Sixth slide">
      <div class="carousel-caption d-none d-md-block">
    <h1>Food and Lifestyle</h1>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<Section class="my-3">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img class="img-fluid resize" src="images/logo.png">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2>About our website</h2>
				<p class="py-3">With 15 years of dedicated journalism experience, we have proudly delivered 10,000+ breaking stories, 2,500+ in-depth analyses, and 1,000+ thought-provoking opinion pieces to our global readership of over 5 million individuals. Committed to journalistic integrity, we strive to provide a comprehensive view of the world's events, ensuring that you stay informed and empowered to make sense of the complex issues shaping our society today.</p>
				<a class="btn btn-primary" href="about.php">Read More</a>
			</div>
		</div>
	</div>
</Section>

<?php include 'News.php' ?>

<?php include 'ContactUs.php' ?>

<?php include 'footer.php' ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>