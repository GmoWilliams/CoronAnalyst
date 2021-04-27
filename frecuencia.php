<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "pruebas";

    $db = mysqli_connect ("localhost", "root", "", "pruebas");

    // Crear conexión

    $query1 = mysqli_query($db, "SELECT count(*) FROM respuestas WHERE respuesta = 'linea' ");
    $result1 = mysqli_num_rows($query1);

    $query2 = mysqli_query($db, "SELECT count(*) FROM respuestas WHERE respuesta = 'fisico' ");
    $result2 = mysqli_num_rows($query2);
    


    $stats = array("linea" => $result1, "fisico" => $result2);
    


    $myJSON = json_encode($stats);
    
    echo $myJSON;
?>