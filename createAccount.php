<?php

include("db.php");

if (isset($_GET['idCliente'])&& isset($_GET['nombre'])&&isset($_POST["crearCuenta"])) {
    $nombre = $_GET['nombre'];
    $idCliente = $_GET['idCliente'];
    $monto = $_POST['monto'];

$sql = "INSERT INTO cuentaBancaria (idCliente, saldo) VALUES ($idCliente, $monto)";

$result= mysqli_query($conexion, $sql);

header("Location: view_account.php?idCliente=$idCliente&nombre=$nombre");
}
?>
