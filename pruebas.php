<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "pruebas";
    
    session_start();
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Verificar
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } 
    //echo "Conexión exitosa<br>";

    $sql1 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["gender"])."', '".htmlspecialchars($_SESSION['id'])."', 1)";
    $sql2 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["edad"])."', '".htmlspecialchars($_SESSION['id'])."', 2)";
    $sql3 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["estadoC"])."', '".htmlspecialchars($_SESSION['id'])."', 3)";
    $sql4 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["estudios"])."', '".htmlspecialchars($_SESSION["id"])."', 4)";
    $sql5 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["ocupacion"])."', '".htmlspecialchars($_SESSION["id"])."', 5)";
    $sql6 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["ingresos"])."', '".htmlspecialchars($_SESSION["id"])."', 6)";
    $sql7 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["estado"])."', '".htmlspecialchars($_SESSION["id"])."', 7)";
    $sql8 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["freq20"])."', '".htmlspecialchars($_SESSION["id"])."', 8)";

    $sql12 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["compu20"])."', '".htmlspecialchars($_SESSION["id"])."', 12)";
    $sql13 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["freq21"])."', '".htmlspecialchars($_SESSION["id"])."', 13)";
    
    
    $sql17 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["compu21"])."', '".htmlspecialchars($_SESSION["id"])."', 17)";
    $sql18 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["gasto21"])."', '".htmlspecialchars($_SESSION["id"])."', 18)";
    $sql19 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["medio21"])."', '".htmlspecialchars($_SESSION["id"])."', 19)";
    $sql20 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["sintomas"])."', '".htmlspecialchars($_SESSION["id"])."', 20)";

    $sql23 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["actFisica"])."', '".htmlspecialchars($_SESSION["id"])."', 23)";
    
    //echo $sql."<br><br>";
    
    $conn->query($sql1);
    $conn->query($sql2);
    $conn->query($sql3);
    $conn->query($sql4);
    $conn->query($sql5);
    $conn->query($sql6);
    $conn->query($sql7);
    $conn->query($sql8);
/*
    if ($conn->query($sql1) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql2) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql3) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql4) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql5) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql6) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql7) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql8) === TRUE) {
      
    } else {
    }
 */   
    $checkbox9 = $_POST['plataforma20'];
    echo $checkbox9;
        for ($i=0; $i<sizeof($checkbox9); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox9[$i]."', '".$_SESSION["id"]."', 9 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    
    $checkbox10 = $_POST['pago20'];
    echo $checkbox10;
        for ($i=0; $i<sizeof($checkbox10); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox10[$i]."', '".$_SESSION["id"]."', 10 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    $checkbox11 = $_POST['categoria20'];
    echo $checkbox11;
        for ($i=0; $i<sizeof($checkbox11); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox11[$i]."', '".$_SESSION["id"]."', 11 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    
    $conn->query($sql12);
    $conn->query($sql13);
/*    
    if ($conn->query($sql12) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql13) === TRUE) {
      
    } else {
    }
*/
//AQUI EMPIEZA EL ERROR "?"  
    $checkbox14 = $_POST['plataforma21'];
    echo $checkbox14;
        for ($i=0; $i<sizeof($checkbox14); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox14[$i]."', '".$_SESSION["id"]."', 14 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    $checkbox15 = $_POST['pago21'];
    echo $checkbox15;
        for ($i=0; $i<sizeof($checkbox15); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox15[$i]."', '".$_SESSION["id"]."', 15 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    $checkbox16 = $_POST['categoria21'];
    echo $checkbox16;
        for ($i=0; $i<sizeof($checkbox16); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox16[$i]."', '".$_SESSION["id"]."', 16 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    
    $conn->query($sql17);
    $conn->query($sql18);
    $conn->query($sql19);
    $conn->query($sql20);

    $checkbox21 = $_POST['condicionMed'];
    echo $checkbox21;
        for ($i=0; $i<sizeof($checkbox21); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox21[$i]."', '".$_SESSION["id"]."', 21 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
    $checkbox22 = $_POST['mental'];
    echo $checkbox22;
        for ($i=0; $i<sizeof($checkbox22); $i++) {
            $query = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".$checkbox22[$i]."', '".$_SESSION["id"]."', 22 ) ";
            mysqli_query($conn, $query) or die(mysqli_error($conn));
        }

    $conn->query($sql23);
    
    /*
    if ($conn->query($sql17) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql18) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql19) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql20) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql23) === TRUE) {
      
    } else {
    }

    */
    

    $conn->close();

    header('location: ./dashboard.php');
?>