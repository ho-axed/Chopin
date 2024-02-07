<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="./Imagenes/logoheader.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion / Registrarse</title>
</head>
<body>
    <header>
        <a href="index.html"><img src="./Imagenes/logoheader.png" class="logo" alt="Chopin" title="Chopin"></a>
        <nav class="navigation">
            <ul class="navmenu">
                <li class="navItem"><a href="Sobreproyecto.html" class="navlink paginascontiguas">Sobre el proyecto</a></li>
                <li class="navItem"><a href="respuestas.html" class="navlink paginascontiguas">Preguntas frecuentes</a></li>
                <li class="navItem"><a href="./php/cerrar_sesion.php"><button class="btnlogin">Cerrar Sesion</button></a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <div class="contenedorpadrelogin">
            <div class="Iniciodesesion">
                <div class="Formulariologin">
                    <h2>Iniciar de sesion</h2>
                    <form action="./php/login_usuario_be.php" method="POST">
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
                    <form action="./php/registro_usuario_be.php" method="POST">
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
        </div>
    </main>
    <footer>
        <div>
            <div class="infoempresa">
                <div>
                    <img class="logoempresa" src="../Imagenes/logo.png" title="Chopin Logo">
                </div>
                <div class="descripcionempresa"> 
                    <div>
                        <p class="text">Chopin© es una empresa ficticia creada el 20/10/2023.</p>
                        <p class="text">Creadores: Thiago Martinez, Bruno Rojas, Victor Morales y Alejandro Grageda.</p>
                        <p class="text">Año: 3 Division: 7</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
    <script src="./js/scriptindex.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>