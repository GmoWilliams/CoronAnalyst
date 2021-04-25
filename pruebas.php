<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "pruebas";
    

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
    $sql9 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["freq20"])."', 'plataforma20', 9)";
    $sql10 = "INSERT INTO respuestas (respuesta, users_id, id_pregunta) VALUES ('".htmlspecialchars($_POST["freq20"])."', 'pago20', 10)";






    //echo $sql."<br><br>";

    

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
    if ($conn->query($sql9) === TRUE) {
      
    } else {
    }
    if ($conn->query($sql10) === TRUE) {
      
    } else {
    }






    

    $conn->close();

    header('location: ./dashboard.html');
?>