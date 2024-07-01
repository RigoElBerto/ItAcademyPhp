<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>Formulario</title>
<meta charset="utf8">
</head>
<body>
<form action = "data.php" method= "post">
    <p>Nombre: <input type="text" name = "name"/></p>
    <p>Mail: <input type="text" name = "mail"/></p>
    <p>Edad: <input type="text" name = "edad" /></p>
    <p><input type="submit" value="Send"></p>
    
</form>


</body>
</html>