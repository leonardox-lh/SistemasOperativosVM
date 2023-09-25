<?php

include("db.php");

if (isset($_POST["guardar"])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];

$sql = "INSERT INTO cliente (nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$contrasena')";

$result= mysqli_query($conexion, $sql);

header("Location: index.php");
}
?>
