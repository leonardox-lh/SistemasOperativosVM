<?php include("head-foot/head.php")?>

<?php include("db.php")?>
<?php




if (isset($_GET['idCliente']) && isset($_GET['nombre'])) {
    $idCliente = $_GET["idCliente"];
    $nombre =  $_GET["nombre"];

    $consulta="call cuentasIDd5($idCliente);";
$resultado=mysqli_query($conexion, $consulta);
    ?>
    
<div class="col-md-6 offset-md-3">
    <div class="menuContent">
        <div class="menu">
                    <img src="logoBanco.png" alt="Descripción de la imagen" width="60" height="60">
                    <h2>
                    <?php
                    echo "Transferencias Bancarias";
                    
                    ?>
                    </h2>
        </div>
            <?php
                echo "tarjetas de ";
                echo $nombre;
            ?> 
    </div>
</div>

<div class="nav">
<?php
$url = 'create-account.php?idCliente=' . urlencode($idCliente). '&nombre=' . urlencode($nombre) ;
?>
<a class="add" href="<?php echo $url; ?>"><button class='btn btn-warning' type='submit' href="">Agregar tarjeta</button></a>
<a class="add" href="index.php"><button class='btn btn-warning' type='submit' href="">volver a inicio</button></a>
</div>

<div class="tabla">
<table class="table table-warning table-striped">
    <thead>
        <tr>
            <th>Id Cuenta</th>
            <th>Usuario</th>
            <th>Saldo</th>
            <th> </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" .  $fila["idCuenta"]. "</td>";
            echo "<td>" .  $fila["usuario"]. "</td>";
            echo "<td> S/. " .  $fila["saldo"] . "</td>";

            echo "<td>";
            ?>
            <a href="retiros.php?idCuenta=<?php echo $fila["idCuenta"]?>&nombre=<?php echo $nombre?>&saldo=<?php echo $fila["saldo"]?>">
            <button class="btn btn-warning">Retirar Dinero</button>
            </a>
            <?php
            echo "</td>";

            echo "<td>";
            ?>
            <a href="delete-account.php?idCuenta=<?php echo $fila['idCuenta']?>&nombre=<?php echo $nombre?>&idCliente=<?php echo $idCliente?>">
            <button class="btn btn-warning">
            <i class="fas fa-trash"></i>
            </button>
            </a>
            <?php
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
    </div>

<?php
}
?>




<?php include("head-foot/foot.php")?>