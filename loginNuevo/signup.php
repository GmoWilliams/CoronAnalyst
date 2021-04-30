<?php

require_once 'source/db_connect.php';
session_start();

$db = mysqli_connect ("localhost", "root", "", "pruebas");

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' or email = '$email'");
    if (mysqli_num_rows($query) > 0){
    echo "<script>
    alert('El usuario ya existe!');
    window.location.href='../welcome.html';
    </script>";
    }
    else {
    
      try {
        $SQLInsert = "INSERT INTO users (username, password, email, to_date)
                    VALUES (:username, :password, :email, now())";

        $statement = $conn->prepare($SQLInsert);
        $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email));

        $idUsuario = mysqli_query($db, "SELECT id FROM users WHERE email = '$email';");
                    $result = mysqli_fetch_array($idUsuario);
                    $_SESSION['id'] = $result['id'];
        $username = mysqli_query($db, "SELECT username FROM users WHERE email = '$email';");
                    $result2 = mysqli_fetch_array($username);
                    $_SESSION['username'] = $result2['username'];

        if($statement->rowCount() == 1) {

          header('location: ../index.php');

        }

        //session_start();

      }
      catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }

}

?>