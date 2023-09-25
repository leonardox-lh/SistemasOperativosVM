<?php 
include("db.php");

if (isset($_GET["idCliente"])) {
    $idCliente = $_GET["idCliente"];
    $query="DELETE FROM cliente WHERE idCliente=$idCliente";
    $conexion->query($query);
    header("Location: index.php");
}
?>