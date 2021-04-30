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

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawDona);
      google.charts.setOnLoadCallback(drawBarChart);
      google.charts.setOnLoadCallback(drawBarCat);
      google.charts.setOnLoadCallback(drawBarCat2);

      // Llama el servicio web de forma síncrona
      function llamarws() {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "http://localhost/codigosRorros/cogidosRorros_/frecuencia.php", false);
            xmlhttp.send();
            if (xmlhttp.status === 200) {
                let myObj = JSON.parse(xmlhttp.responseText);
                return myObj;
            } else {
                return "error";
            }
      }

      function drawChart() {

        var stats = llamarws();
        console.log("Regresa:");
        console.log(stats);
        
        var data = null;
        if (stats != "error") {
            data = google.visualization.arrayToDataTable([
            ['Episodio', 'Cantidad de storm troopers'],
            ['Fisico', stats.fisico],
            ['En Linea', stats.linea]
            ]);
        }

        var options = {
          title: 'Preferencia sobre compras en linea o presenciales',
		  colors: ['#24C2C2', '#FCB306'],
		  
    	  
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);

      }


      function drawChart2() {
      var stats = llamarws();
      console.log("Regresa:");
      console.log(stats);
        var data2 = null;
        if (stats != "error") {
            data2 = google.visualization.arrayToDataTable([
            ['Plataforma', 'Frecuencia'],
            ['Amazon', stats.amazon],
            ['Mercado Libre', stats.mercado],
            ['Facebook Marketplace', stats.fb],
            ['Alibaba', stats.alibaba],
            ['eBay', stats.ebay],
            ['eShop', stats.eshop],
            ['Otros', stats.otros],
            ['No usan plataformas en linea', stats.noPlataforma]
            ]);
        }

        var options = {
          title: 'Plataformas más usadas para comprar en línea',
		  colors: ['#24C2C2', '#FCB306', '#6ABBBB', '#4ED6D6', '#D6A93D', '00C2CB', '#03949B', '#FFD269']

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data2, options);
      }


      function drawChart3() {
      var stats = llamarws();
      console.log("Regresa:");
      console.log(stats);
        var data2 = null;
        if (stats != "error") {
            data2 = google.visualization.arrayToDataTable([
            ['Plataforma', 'Frecuencia'],
            ['Menos de $1,000', stats.gasto1],
            ['Entre $1,000 y $2,500', stats.gasto2],
            ['Entre $2,500 y $5,000', stats.gasto3],
            ['Entre $5,000 y $7,500', stats.gasto4],
            ['Entre $7,500 y $10,000', stats.gasto5],
            ['Más de $10,000', stats.gasto6]
            ]);
        }

        var options = {
          title: 'Gasto en compras en línea al mes',
          colors: ['#24C2C2', '#FCB306', '#6ABBBB', '#4ED6D6', '#D6A93D', '00C2CB']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data2, options);
      }

      function drawDona() {
        var stats = llamarws();
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ha presentado',     stats.sintomas],
          ['No ha presentado',      stats.noSintomas]
        ]);

        var options = {
          title: 'Usuarios que han presentado síntomas de COVID-19',
		  colors: ['#24C2C2', '#FCB306'],
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }


      function drawBarChart() {
        var stats = llamarws();
        var data = google.visualization.arrayToDataTable([
          ['Frecuencia', '2020', '2021'],
          ['No compro en línea', stats.freq520, stats.freq521],
          ['1 vez cada varios meses ', stats.freq420, stats.freq421],
          ['1 - 5 veces al mes', stats.freq120, stats.freq121],
          ['6 - 10 veces al mes', stats.freq220, stats.freq221],
          ['+10 veces al mes', stats.freq320, stats.freq321]
        ]);

        var options = {
          chart: {
            title: 'Frecuencia de compras en linea',
            subtitle: 'Antes de la pandemia vs. durante la pandemia',
			colors: ['#e0440e', '#e6693e']
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawBarCat() {
        var stats = llamarws();
        var data = google.visualization.arrayToDataTable([
          ['Categoría', '2020', '2021'],
          ['Ropa', stats.ropa20, stats.ropa21],
          ['Comida', stats.comida20, stats.comida21],
          ['Super', stats.super20, stats.super21],
          ['Muebles', stats.muebles20, stats.muebles21],
          ['Coleccionables', stats.colec20, stats.colec21],
          ['Libros', stats.libros20, stats.libros21],
          ['Computadoras', stats.compu20, stats.compu21],
          ['Herramientas', stats.herra20, stats.herra21],
          ['Entretenimiento', stats.entret20, stats.entret21],
          ['Apps', stats.progra20, stats.progra21],
          ['Boletos', stats.boletos20, stats.boletos21],
          ['Higiene', stats.higiene20, stats.higiene21],
          ['Deportivos', stats.deportivos20, stats.deportivos21],
          ['Otros', stats.otros20, stats.otros21]
        ]);

        var options = {
          chart: {
            title: 'Frecuencia de compras en linea',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawBarCat2() {
        var stats = llamarws();
        var data = google.visualization.arrayToDataTable([
          ['Método de pago', '2020', '2021'],
          ['Tarjeta de crédito', stats.credito20, stats.credito21],
          ['Tarjeta de débito', stats.debito20, stats.debito21],
          ['Paypal', stats.paypal20, stats.paypal21],
          ['Mercado Pago', stats.mercado20, stats.mercado21],
          ['Efectivo', stats.efectivo20, stats.efectivo21],
          ['Transferencia', stats.transfer20, stats.transfer21],
          ['Deposito', stats.deposito20, stats.deposito21],
          ['No uso ningún método', stats.noMetodo20, stats.noMetodo21]
        ]);

        var options = {
          chart: {
            title: 'Plataformas de pago más usadas',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


      
    </script>



	

</head>
	
<?php echo "<h2 > Bienvenido al dashboard, ".$_SESSION['username']." </h2>";
     ?>
<body>
	<!-- --NavBar -->
	<nav class="navbar">
		<div class="brand-title" >CoronaAnalyst</div>
		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
		<div class="navbar-links">
			<ul>
				<!--<li><a href="#">Home</a></li>-->
				<li><a href="AboutUs.php" >About Us</a></li>
				<li><a href="loginNuevo/logout.php" >Log Out</a></li>
			</ul>
		</div>
	</nav>
</body>
<body>
	<!-- --NavBar -->
	<div class="page-content" style="background-image: url('images/mapa.png')">

      <div class="containerCool">		
        
        <table>
          <tr>
            <td><div id="piechart" style="width: 610px; height: 450px;"></div></td>
            <td><div id="columnchart_material" style="width: 800px; height: 400px;"></div></td>
          </tr>
        </table>
        <br>
          <div id="columnchart_material2" style="width: 1400px; height: 400px; position: center;"></div>
          <br>
          <br>
        <table>
          <tr>
            <td><div id="piechart2" style="width: 460px; height: 530px;"></div></td>
            <td><div id="donutchart" style="width: 460px; height: 530px;"></div></td>
            <td><div id="piechart3" style="width: 460px; height: 530px;"></div></td>
          </tr>
        </table>
        <div id="columnchart_material3" style="width: 1400px; height: 520px; position: center;"></div>
        <div>
    </div>
    
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
</body>
</html>