<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate a Mediz</title>
    <link rel="stylesheet" href="style_registro.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
            <img src="../assets/img/logo_definitivo.png">
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../LOGIN/login.html">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="inicia-sesion">
            <center><h1>Registrate</h1>
            <form method="post"  action=../registro_usuarios.php>
                <label for="email">Email:</label>
                <input class="casillas" type="email" id="email" name="email" required>
                <label for="contrasena">Contraseña:</label>
                <input class="casillas" type="password" id="contrasena" name="contrasena" required>
                <label for="id-doc">Documento:</label>
                <input  class="casillas"type="id-doc" id="documento" name="documento" required>
                <label for="Nombre-usua">Nombre:</label>
                <input  class="casillas"type="Nombres-usua" id="nombres" name="nombres" required>
                <label for="Apellidos-usua">Apellidos:</label>
                <input class="casillas" type="Apellidos-usua" id="apellidos" name="apellidos" required>
                <label for="Direccion-usua">Dirección:</label>
                <input class="casillas" type="direccion" id="direccion" name="direccion" required>
                <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                <input class="casillas" type="Fecha-Nacimiento" id="Nacimiento" name="Nacimiento" required>
                <label for="grupo sanguineo">Grupo Sanguineo</label>
                <input class="casillas" type="grupo sanguineo" id="grupo_sanguineo" name="grupo_sanguineo" required>
                <label for="grupo sanguineo">Sexo</label>
                <input class="casillas" type="tipo de sexo" id="tipo_de_sexo" name="tipo_de_sexo" required>
                <label for="grupo sanguineo">Telefono</label>
                <input class="casillas" type="telefono" id="telefono" name="telefono" required>
                <input name="btn_registro" id="btn_registro" type="submit"value="Registrarse">
                
            </center>
                
            </form>
        </section>
    </main>

    
</body>
</html>