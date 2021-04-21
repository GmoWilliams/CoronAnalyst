<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']." To Dashboard </h1>";
     ?>

    <h2><a href="logout.php">Logout</a></h2>
    
    <div>
    <button type="button" class="switch-btn" action="logout.php">Logout</button>
    </div>
    
    <head>
	<meta charset="utf-8">
	<title>Corona-Analyst</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/style.css"/>
    
</head>
<body>
	<div class="page-content" style="background-image: url('../images/mapa.png')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="guarda.php" method="post">
		        	<div id="form-total">
              <h1>DASHBOARD<h1>		            
							
          </div>
					
        </form>
    </div>
  </div>
</div>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="../js/jquery.steps.js"></script>
<script src="../js/main.js"></script>
</body>

</body>
</html>