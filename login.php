<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="logoheader.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion / Registrarse</title>
</head>
<body>
    <header>
        <a href="index.html"><img src="logoheader.png" class="logo"></a>
        <nav class="navigation">
            <a href="Sobreproyecto.html" class="Paginascontiguas">Sobre el proyecto</a>
            <a href="respuestas.html" class="Paginascontiguas">Preguntas frecuentes</a>
            <a href="php/cerrar_sesion.php"><button class="btnlogin">Cerrar Sesion</button></a>
        </nav>
    </header>
        <div class="Iniciodesesion">
            <div class="Formulariologin">
                <h2>Iniciar de sesion</h2>
                <form action="php/login_usuario_be.php" method="POST">
                    <div class="cajadeinputs">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="cajadeinputs">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="contrasena" required>
                        <label>Contraseña</label>
                    </div>
                    <div class="Recordar-Olvidar">
                        <label><input type="checkbox"> Recordarme</label>
                        <a href="#">Olvidaste tu Contraseña?</a>
                    </div>
                    <button type="submit" class="btn">Iniciar sesion</button>
                     <div class="Iniciarsesion-registrarse">
                        <p>No tienes una cuenta? <a href="#" class="Link-registrarse">Registrarse</a></p>
                    </div>
                </form>
            </div>
            <div class="Formularioregistrarse">
                <h2>Registrarse</h2>
                <form action="php/registro_usuario_be.php" method="POST">
                    <div class="cajadeinputs">
                        <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                        <input type="text" name="usuario" required>
                        <label>Nombre de usuario</label>
                    </div>
                    <div class="cajadeinputs">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="cajadeinputs">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required name="contrasena">
                        <label>Contraseña</label>
                    </div>
                    <div class="Recordar-Olvidar">
                        <label><input type="checkbox"> Acepto los terminos y condiciones</label>
                    </div>
                    <button type="submit" class="btn">Registrarse</button>
                     <div class="Iniciarsesion-registrarse">
                        <p>Ya tienes una cuenta? <a href="#" class="Link-login">Iniciar Sesion</a></p>
                    </div>
                </form>
            </div>
        </div>
    <footer></footer>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>