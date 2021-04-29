<?php

include_once 'loginNuevo/source/session.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="navbar/background_styles.css">
	<link rel="stylesheet" href="navbar/styles.css">
	<script src="navbar/script.js" defer></script>
	
	<meta charset="utf-8">
	<title>Dashboard</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="icon" href="loginNuevo/img/icon.png">

</head>
<?php echo "<h1> Bienvenido ".$_SESSION['username']." al Dashboard </h1>";
     ?>
<body>
	<!-- --NavBar -->
	<nav class="navbar">
		<div class="brand-title" style="font-size:40px;">CoronaAnalyst</div>
		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
		<div class="navbar-links">
			<ul>
				<!--<li><a href="#">Home</a></li>-->
				<li><a href="AboutUs.php" style="font-size:30px;">About Us</a></li>
				<li><a href="loginNuevo/logout.php" style="font-size:30px;">Log Out</a></li>
			</ul>
		</div>
	</nav>
	<!-- --NavBar -->
</body>
	
<body>
	<div class="page-content" style="background-image: url('images/mapa.png')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register">
		        	<div id="form-total">
              <h1>DASHBOARD<h1>		            
							
          </div>
					
        </form>
    </div>
  </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
</body>
</html>