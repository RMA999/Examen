<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<title>Registro de conferencistas </title>
</head>
<body>
    <div id="Container">
<form action="../Guardar/guardar3.php" method="POST">

<h1>Registros</h1>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" required/>
<label for="apellido">Apellidos</label>
<input type="text" name="apellido" required/>
<label for="edad">Edad</label>
<input type="text" name="edad" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<label for="telefono">No. de Telefono</label>
<input type="int" name="telefono" required/>

<input name="enviar" type="submit" value="registrar"/>
</form>
</div>
</body>
</html>