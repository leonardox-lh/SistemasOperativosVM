<?php include("head-foot/head.php")?>

<?php
if (isset($_GET["idCliente"]) && isset($_GET['nombre'])) {
    $idCliente = $_GET["idCliente"];
    $nombre =  $_GET["nombre"];
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
                
                echo "Crear Cuenta para "; 
                echo $nombre;
            ?> 
    </div>
</div>

<div class="contenedor">
    
<form action="createAccount.php?idCliente=<?php echo $idCliente?>&nombre=<?php echo $nombre?>" method="post">

  <div class="form-group">
    <input type="text" class="form-control" name="monto" placeholder="Ingrese su saldo inicial" required>
  </div>

  <br><br>
    <input type="submit" class="btn btn-warning" name="crearCuenta">
</form>

</div>
<?php
}
?>



<?php include("head-foot/foot.php")?>