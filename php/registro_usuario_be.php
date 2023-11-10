<?php
    include'conexion_be.php';
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    //encriptando la contraseña
    $contrasena = hash('sha512', $contrasena);
    
    $query = "INSERT INTO usuarios(Nombre_de_usuario, Email, Contrasena) 
                VALUES('$usuario', '$email', '$contrasena')";

    //verificando que el email no se repita
    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email='$email'");
    if (mysqli_num_rows($verificar_email) > 0) {
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "../login.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }
    //verificando que el usuario no se repita
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_de_usuario='$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo'
            <script>
                alert("Este usuario ya esta registrado, intenta con otro");
                window.location = "../login.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentelo nuevamente");
                window.location = "../login.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>