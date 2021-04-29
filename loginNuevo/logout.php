<?php
 require_once 'source/session.php';

session_destroy();
echo "<script>
          alert('Acabas de cerrar sesión, serás redirigido a la página de Inicio');
          window.location.href='../welcome.html';
          </script>";

/*
$Confirmation = "<script> window.confirm('¿Estás seguro de que quieres cerrar sesión?');
        </script>";

    echo $Confirmation;

        if ($Confirmation == true) {
            session_destroy();
            header('location: ../welcome.html');
        }
        else {
            header('location: ../dashboard.html');
        }
    


//header('location: ../welcome.html');
*/
?>