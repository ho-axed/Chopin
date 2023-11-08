<?php
    session_start();
    session_destroy();
    echo'
            <script>
                alert("Sesion cerrada");
                window.location="../index.html";
            </script>
    ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesion - Chopin</title>
</head>
<body>
    
</body>
</html>