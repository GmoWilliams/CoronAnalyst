<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "pruebas";

    $db = mysqli_connect ("localhost", "root", "", "pruebas");

    // Crear conexión
    //en linea o fisico
    $query1 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'linea' ");
    $result1 = mysqli_num_rows($query1);

    $query2 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'fisico' ");
    $result2 = mysqli_num_rows($query2);

    //plataforma
    $query3 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'amazon' and id_pregunta = 14");
    $result3 = mysqli_num_rows($query3);
    $query4 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'mercadoLibre' and id_pregunta = 14");
    $result4 = mysqli_num_rows($query4);
    $query5 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'fb' and id_pregunta = 14");
    $result5 = mysqli_num_rows($query5);
    $query6 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'alibaba' and id_pregunta = 14");
    $result6 = mysqli_num_rows($query6);
    $query7 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'ebay' and id_pregunta = 14");
    $result7 = mysqli_num_rows($query7);
    $query8 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'eshop' and id_pregunta = 14");
    $result8 = mysqli_num_rows($query8);
    $query9 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'otros' and id_pregunta = 14");
    $result9 = mysqli_num_rows($query9);
    $query10 = mysqli_query($db, "SELECT * FROM respuestas WHERE respuesta = 'noPlataforma' and id_pregunta = 14");
    $result10 = mysqli_num_rows($query10);

    //cantidad de usuarios registrados y encuestas llenas
    $query11 = mysqli_query($db, "SELECT * FROM users");
    $result11 = mysqli_num_rows($query11);
    $query12 = mysqli_query($db, "SELECT DISTINCT users_id FROM respuestas");
    $result12 = mysqli_num_rows($query12);
    $result13 = $result11 - $result12;


    //frecuencia de compra antes y ahora
    $query14 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1a5'and id_pregunta = 'freq20'");
    $result14 = mysqli_num_rows($query14);
    $query15 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '6a10'and id_pregunta = 'freq20'");
    $result15 = mysqli_num_rows($query15);
    $query16 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '+10'and id_pregunta = 'freq20'");
    $result16 = mysqli_num_rows($query16);
    $query17 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1enMeses'and id_pregunta = 'freq20'");
    $result17 = mysqli_num_rows($query17);
    $query18 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'noFrecuencia'and id_pregunta = 'freq20'");
    $result18 = mysqli_num_rows($query18);





    $stats = array("linea" => $result1, "fisico" => $result2, "amazon" => $result3, "mercado"=>$result4, "fb"=>$result5,
     "alibaba"=>$result6, "ebay"=>$result7, "eshop"=>$result8, "otros"=>$result9, "noPlataforma"=>$result10, 
     "totalSample"=>$result11, "answered"=>$result12, "notAnswered"=>$result13);
    


    $myJSON = json_encode($stats);
    
    echo $myJSON;
?>