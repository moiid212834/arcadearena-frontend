<?php include "helper/functions.php"?>
<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-startup-image" href="../assets/logo/logo.svg">
	<link rel="icon" type="image/x-icon" href="..../assets/logo/logo.svg">
	<meta name="description"
		content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.." />
	<meta name="Keywords"
		content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
	<meta name="author" content="contain by Wepora team">
	<meta name="copyright" content="Copyright © 2020 Wepora" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/dashboard/app.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<title>Arcade Arena</title>
</head>

<body style="padding-top: 60px;">

	<div class="bs-canvas-overlay bs-canvas-anim bg-dark position-fixed w-100 h-100"></div>

	<nav class="navbar navbar-dark bg-black fixed-top px-3 flex-nowrap" style="height: 60px">
		<div class="d-flex w-100 align-items-center">
			<div class="text-white my-1 mx-3 d-block d-md-none" style="font-size: 30px" type="button"
				data-toggle="canvas" data-target="#bs-canvas-left" aria-expanded="false" aria-controls="bs-canvas-left">
				&#9776;
			</div>
			<div class="h3 text-light">Dashboard</div>
		</div>

		<div class="d-flex justify-content-end align-items-baseline" style="width: 35%;">
            <!-- Example single danger button -->
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle pl-5 mb-2 mt-3 pb-0" data-toggle="dropdown"  aria-expanded="false">
                  <span class="badge badge-pill badge-primary pink position-absolute" style="top: 0px;right:20px;">5</span>
                  <i class="fa fa-bell text-white" style="font-size: 25px;" aria-hidden="true"></i>
              </button>
              
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="messages.php">Messages <span class="text-pink">(13)</span></a></li>
                <li><a class="dropdown-item" href="stats.php">Stat Update <span class="text-pink">(3)</span></a></li>
                <li><a class="dropdown-item" href="competitions.php">Tournament <span class="text-pink">(4)</span></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="teams.php">Teams <span class="text-pink">(2)</span></a></li>
            </ul>
			</div>
			<div class="btn-group d-none d-md-block">
              <button type="button" class="btn dropdown-toggle px-2" data-toggle="dropdown"  aria-expanded="false">
                  <i class="fa fa-user-circle text-white" style="font-size: 25px;" aria-hidden="true"></i>
              </button>
              
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="messages.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
			</div>
      		<a href="../index.php" class="navbar-brand mx-0 mx-md-3"  href="/"><img src="../assets/logo/logo.svg" alt=""
              style="max-width: 80px;margin-top: -15px;"></a>
      </div>

	</nav>