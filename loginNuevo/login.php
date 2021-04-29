<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';
$db = mysqli_connect ("localhost", "root", "", "pruebas");
//$_SESSION_start();

if(isset($_POST['login-btn'])) {

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];
    //$hashed_password = $row['password'];
    $hashed_password ='';

    try {
      $SQLQuery = "SELECT * FROM users WHERE username = :username";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':username' => $user));

      if($row = $statement->fetch()) {
        $id = $row['id'];
        $hashed_password = $row['password'];
        $username = $row['username'];

        if(password_verify($password, $hashed_password)) {
          $_SESSION['id'] = $id;
          $_SESSION['username'] = $username;

          //header('location: index.html');

          $query = mysqli_query($db, "SELECT * FROM respuestas WHERE users_id = '$id' ");
          if (mysqli_num_rows($query) > 0) {
          header('location: ../dashboard.php');
          }

          else {
          header('location: ../index.php');
          }
        }
          
        else {

        
        echo "<script>
          alert('Error: Contraseña inválida. Por favor regrese y verifique que la ha escrito correctamente');
          window.location.href='../welcome.html';
          </script>";
          
          
          
  
        }
      }

      else {
        echo "<script>
          alert('Error: Este usuario no existe. Por favor regrese y vuelva a ingresar las credenciales');
          window.location.href='../welcome.html';
          </script>";
      }
      
      
      
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>