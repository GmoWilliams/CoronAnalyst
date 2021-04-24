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

    $sql1 = "INSERT INTO users (username, password, email, to_date) VALUES ('laurie', '14365bbwubwbunfiwf', 'laurie@gmail.com', 05/05/2021)";
    //echo $sql."<br><br>";

    

    if ($conn->query($sql1) === TRUE) {
      
    } else {
    }

    

    $conn->close();

    header('location: ./dashboard.html');
?>