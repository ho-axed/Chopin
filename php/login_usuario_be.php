<?php

    session_start();

    include 'conexion_be.php';

    $email = $_POST['email'];

    $contrasena = $_POST['contrasena'];

    $contrasena = hash('sha512', $contrasena);



    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email='$email' and Contrasena='$contrasena'");



    if(mysqli_num_rows($validar_login) > 0) {

        $_SESSION['usuario'] = $email;

        echo'

            <script>

                alert("Le damos la bienvenida a Chopin");

                window.location="../index.html";

            </script>

        ';

    }else{

        echo'

            <script>

                alert("Usuario no existente, verifique los datos introducidos");

                window.location="../login.php";

            </script>

        ';

    }

?>