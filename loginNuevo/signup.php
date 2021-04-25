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
    alert('Username or email already exists!');
    window.location.href='../welcome.html';
    </script>";
    }
    else {
    
      try {
        $SQLInsert = "INSERT INTO users (username, password, email, to_date)
                    VALUES (:username, :password, :email, now())";

        $statement = $conn->prepare($SQLInsert);
        $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email));

        if($statement->rowCount() == 1) {
          header('location: ../index.php');
        }
      }
      catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }

}

?>