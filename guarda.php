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

    $sql1 = "INSERT INTO infopersonal (genero, estadoC, estudios, edad) VALUES ('".htmlspecialchars($_POST["gender"])."', '".htmlspecialchars($_POST["estadoC"])."', '".htmlspecialchars($_POST["estudios"])."', '".htmlspecialchars($_POST["edad"])."')";
    //echo $sql."<br><br>";

    $sql2 = "INSERT INTO cuestionario (freq20, plataforma20, pago20, categoria20, compu20, freq21, plataforma21, pago21, categoria21, compu21, gasto21, medio21, sintomas, condicionMed, mental, actFisica) VALUES ('".htmlspecialchars($_POST["freq20"])."', '".htmlspecialchars($_POST["plataforma20"])."', '".htmlspecialchars($_POST["pago20"])."', '".htmlspecialchars($_POST["categoria20"])."', '".htmlspecialchars($_POST["compu20"])."', '".htmlspecialchars($_POST["freq21"])."', '".htmlspecialchars($_POST["plataforma21"])."', '".htmlspecialchars($_POST["pago21"])."', '".htmlspecialchars($_POST["categoria21"])."', '".htmlspecialchars($_POST["compu21"])."', '".htmlspecialchars($_POST["gasto21"])."', '".htmlspecialchars($_POST["medio21"])."', '".htmlspecialchars($_POST["sintomas"])."', '".htmlspecialchars($_POST["condicionMed"])."', '".htmlspecialchars($_POST["mental"])."', '".htmlspecialchars($_POST["actFisica"])."')";
    

    if ($conn->query($sql1) === TRUE) {
      
    } else {
    }

    if ($conn->query($sql2) === TRUE) {
    } else {
    }

    $conn->close();

    header('location: ./dashboard.html');
?>