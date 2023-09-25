<?php 
include("db.php");

if (isset($_GET["idCuenta"])&&isset($_GET["nombre"])&&isset($_GET["idCliente"])) {
    $idCliente = $_GET["idCliente"];
    $nombre =  $_GET["nombre"];
    $idCuenta = $_GET["idCuenta"];
    $query1="DELETE FROM retiro WHERE cuentaBancaria=$idCuenta";
    $result2 = mysqli_query($conexion, $query1);

    $query="DELETE FROM cuentaBancaria WHERE idCuenta=$idCuenta";
    $result = mysqli_query($conexion, $query);
    header("Location: view_account.php?idCliente=$idCliente&nombre=$nombre");
}
?>