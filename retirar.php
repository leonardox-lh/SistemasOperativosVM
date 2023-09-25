
<?php 
include("db.php");

if (isset($_POST["retirar"])) {
    $monto = $_POST["monto"];
    $idCuenta = $_POST["idCuenta"];
    $nombre = $_POST["nombre"];
    $saldo = $_POST["saldo"];
    $montoactual=$saldo-$monto;
    if ($montoactual>=0) {
        $query = "call Descontardinero($monto,$idCuenta);";

    
    $query2 = "call crearRetiro($idCuenta,$monto);";
    
    $result = mysqli_query($conexion, $query);
    $result = mysqli_query($conexion, $query2);

    header("Location: retiros.php?idCuenta=$idCuenta&nombre=$nombre&saldo=$montoactual");
    }
    else
    header("Location: retiros.php?idCuenta=$idCuenta&nombre=$nombre&saldo=$$saldo");
}

?>
