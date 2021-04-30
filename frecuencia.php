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
    $query14 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1a5'and id_pregunta = '8'");
    $result14 = mysqli_num_rows($query14);
    $query15 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '6a10'and id_pregunta = '8'");
    $result15 = mysqli_num_rows($query15);
    $query16 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '+10'and id_pregunta = '8'");
    $result16 = mysqli_num_rows($query16);
    $query17 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1enMeses'and id_pregunta = '8'");
    $result17 = mysqli_num_rows($query17);
    $query18 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'noFrecuencia'and id_pregunta = '8'");
    $result18 = mysqli_num_rows($query18);


    $query19 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1a5'and id_pregunta = '13'");
    $result19 = mysqli_num_rows($query19);
    $query20 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '6a10'and id_pregunta = '13'");
    $result20 = mysqli_num_rows($query20);
    $query21 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '+10'and id_pregunta = '13'");
    $result21 = mysqli_num_rows($query21);
    $query22 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1enMeses'and id_pregunta = '13'");
    $result22 = mysqli_num_rows($query22);
    $query23 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'noFrecuencia'and id_pregunta = '13'");
    $result23 = mysqli_num_rows($query23);


    //categorias de compra
    $query24 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'ropa'and id_pregunta = '11'");
    $result24 = mysqli_num_rows($query24);
    $query25 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'comida'and id_pregunta = '11'");
    $result25 = mysqli_num_rows($query25);
    $query26 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'super'and id_pregunta = '11'");
    $result26 = mysqli_num_rows($query26);
    $query27 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'muebles'and id_pregunta = '11'");
    $result27 = mysqli_num_rows($query27);
    $query28 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'coleccionables'and id_pregunta = '11'");
    $result28 = mysqli_num_rows($query28);
    $query29 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'libros'and id_pregunta = '11'");
    $result29 = mysqli_num_rows($query29);
    $query30 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'computadoras'and id_pregunta = '11'");
    $result30 = mysqli_num_rows($query30);
    $query31 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'herramienta'and id_pregunta = '11'");
    $result31 = mysqli_num_rows($query31);
    $query32 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'entretenimiento'and id_pregunta = '11'");
    $result32 = mysqli_num_rows($query32);
    $query33 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'programas'and id_pregunta = '11'");
    $result33 = mysqli_num_rows($query33);
    $query34 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'boletos'and id_pregunta = '11'");
    $result34 = mysqli_num_rows($query34);
    $query35 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'higiene'and id_pregunta = '11'");
    $result35 = mysqli_num_rows($query35);
    $query36 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'deportivos'and id_pregunta = '11'");
    $result36 = mysqli_num_rows($query36);
    $query37 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'otros'and id_pregunta = '11'");
    $result37 = mysqli_num_rows($query37);


    $query38 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'ropa'and id_pregunta = '16'");
    $result38 = mysqli_num_rows($query38);
    $query39 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'comida'and id_pregunta = '16'");
    $result39 = mysqli_num_rows($query39);
    $query40 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'super'and id_pregunta = '16'");
    $result40 = mysqli_num_rows($query40);
    $query41 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'muebles'and id_pregunta = '16'");
    $result41 = mysqli_num_rows($query41);
    $query42 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'coleccionables'and id_pregunta = '16'");
    $result42 = mysqli_num_rows($query42);
    $query43 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'libros'and id_pregunta = '16'");
    $result43 = mysqli_num_rows($query43);
    $query44 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'computadoras'and id_pregunta = '16'");
    $result44 = mysqli_num_rows($query44);
    $query45 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'herramienta'and id_pregunta = '16'");
    $result45 = mysqli_num_rows($query45);
    $query46 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'entretenimiento'and id_pregunta = '161'");
    $result46 = mysqli_num_rows($query46);
    $query47 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'programas'and id_pregunta = '16'");
    $result47 = mysqli_num_rows($query47);
    $query48 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'boletos'and id_pregunta = '16'");
    $result48 = mysqli_num_rows($query48);
    $query49 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'higiene'and id_pregunta = '16'");
    $result49 = mysqli_num_rows($query49);
    $query50 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'deportivos'and id_pregunta = '16'");
    $result50 = mysqli_num_rows($query50);
    $query51 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'otros'and id_pregunta = '16'");
    $result51 = mysqli_num_rows($query51);


    //cuanto dinero gasta
    $query52 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '-1000'and id_pregunta = '18'");
    $result52 = mysqli_num_rows($query52);
    $query53 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '1000a2500'and id_pregunta = '18'");
    $result53 = mysqli_num_rows($query53);
    $query54 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '2500a5000'and id_pregunta = '18'");
    $result54 = mysqli_num_rows($query54);
    $query55 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '5000a7500'and id_pregunta = '18'");
    $result55 = mysqli_num_rows($query55);
    $query56 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '7500a10000'and id_pregunta = '18'");
    $result56 = mysqli_num_rows($query56);
    $query57 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = '10000'and id_pregunta = '18'");
    $result57 = mysqli_num_rows($query57);
    

    //sintomas
    $query58 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'Si' and id_pregunta = '20' ");
    $result58 = mysqli_num_rows($query58);
    $query59 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'NoSintomas'");
    $result59 = mysqli_num_rows($query59);

    //metodos de pago
    $query60 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'credito' and id_pregunta = '10'");
    $result60 = mysqli_num_rows($query60);
    $query61 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'debito' and id_pregunta = '10'");
    $result61 = mysqli_num_rows($query61);
    $query62 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'paypal' and id_pregunta = '10'");
    $result62 = mysqli_num_rows($query62);
    $query63 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'mercadoPago' and id_pregunta = '10'");
    $result63 = mysqli_num_rows($query63);
    $query64 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'efectivo' and id_pregunta = '10'");
    $result64 = mysqli_num_rows($query64);
    $query65 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'transferencia' and id_pregunta = '10'");
    $result65 = mysqli_num_rows($query65);
    $query66 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'depositoTiendas' and id_pregunta = '10'");
    $result66 = mysqli_num_rows($query66);
    $query67 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'otro' and id_pregunta = '10'");
    $result67 = mysqli_num_rows($query67);
    $query68 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'noMetodo' and id_pregunta = '10'");
    $result68 = mysqli_num_rows($query68);


    $query69 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'credito' and id_pregunta = '15'");
    $result69 = mysqli_num_rows($query69);
    $query70 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'debito' and id_pregunta = '15'");
    $result71 = mysqli_num_rows($query70);
    $query72 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'paypal' and id_pregunta = '15'");
    $result72 = mysqli_num_rows($query72);
    $query73 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'mercadoPago' and id_pregunta = '15'");
    $result73 = mysqli_num_rows($query73);
    $query74 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'efectivo' and id_pregunta = '15'");
    $result74 = mysqli_num_rows($query74);
    $query75 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'transferencia' and id_pregunta = '15'");
    $result75 = mysqli_num_rows($query75);
    $query76 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'depositoTiendas' and id_pregunta = '15'");
    $result76 = mysqli_num_rows($query76);
    $query77 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'otro' and id_pregunta = '15'");
    $result77 = mysqli_num_rows($query77);
    $query78 = mysqli_query($db, "SELECT * FROM respuestas where respuesta = 'noMetodo' and id_pregunta = '15'");
    $result78 = mysqli_num_rows($query78);




    $stats = array("linea" => $result1, "fisico" => $result2, "amazon" => $result3, "mercado"=>$result4, "fb"=>$result5,
     "alibaba"=>$result6, "ebay"=>$result7, "eshop"=>$result8, "otros"=>$result9, "noPlataforma"=>$result10, 
     "totalSample"=>$result11, "answered"=>$result12, "notAnswered"=>$result13,
    "freq120"=>$result14, "freq220"=>$result15, "freq320"=>$result16, "freq420"=>$result17, "freq520"=>$result18,
    "freq121"=>$result19, "freq221"=>$result20, "freq321"=>$result21, "freq421"=>$result22, "freq521"=>$result23,
    "ropa20"=>$result24, "comida20"=>$result25, "super20"=>$result26, "muebles20"=>$result27, "colec20"=>$result28, "libros20"=>$result29, "compu20"=>$result30, "herra20"=>$result31, "entret20"=>$result32, "progra20"=>$result33, "boletos20"=>$result34, "higiene20"=>$result35, "deportivos20"=>$result36, "otros20"=>$result37,
    "ropa21"=>$result38, "comida21"=>$result39, "super21"=>$result40, "muebles21"=>$result41, "colec21"=>$result42, "libros21"=>$result43, "compu21"=>$result44, "herra21"=>$result45, "entret21"=>$result46, "progra21"=>$result47, "boletos21"=>$result48, "higiene21"=>$result49, "deportivos21"=>$result50, "otros21"=>$result51,
    "gasto1"=>$result52, "gasto2"=>$result53, "gasto3"=>$result54, "gasto4"=>$result55, "gasto5"=>$result56, "gasto6"=>$result57,
    "sintomas"=>$result58, "noSintomas"=>$result59,
    "credito20"=>$result60, "debito20"=>$result61, "paypal20"=>$result62, "mercado20"=>$result63, "efectivo20"=>$result64, "transfer20"=>$result65, "deposito20"=>$result66, "otro20"=>$result67, "noMetodo20"=>$result68, 
    "credito21"=>$result69, "debito21"=>$result71, "paypal21"=>$result72, "mercado21"=>$result73, "efectivo21"=>$result74, "transfer21"=>$result75, "deposito21"=>$result76, "otro21"=>$result77, "noMetodo21"=>$result78);
    

    $myJSON = json_encode($stats);
    
    echo $myJSON;
?>