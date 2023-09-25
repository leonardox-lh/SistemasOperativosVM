<?php include("head-foot/head.php");
include("db.php");

if (isset($_GET["nombre"])&&isset($_GET["idCuenta"])&&isset($_GET["saldo"])) {
    $idCuenta = $_GET["idCuenta"];
    $nombre =  $_GET["nombre"];
    $saldo =  $_GET["saldo"];

    $consultaRetiros="select * FROM retiro Where cuentaBancaria=$idCuenta;";
    $resultado=mysqli_query($conexion, $consultaRetiros);
    ?>
    
<div class="col-md-6 offset-md-3">
    <div class="menuContent">
        <div class="menu">
                    <img src="logoBanco.png" alt="Descripción de la imagen" width="60" height="60">
                    <h2>
                    <?php echo "Transferencias Bancarias"; ?>
                    </h2>
        </div>
            <?php echo "Retiro"; ?> 
    </div>
</div>

<div class="englobador">
<div class="contenedor1">
    
<form action="retirar.php" method="post">

  <div class="form-group">
  <label  class="form-label">Id de la cuenta</label>
  <input class="form-control" type="text" value=<?php echo $idCuenta?> aria-label="readonly input example" readonly name="idCuenta">

  <label  class="form-label">Titular</label>
  <input class="form-control" type="text" value=<?php echo $nombre?> aria-label="readonly input example" readonly name="nombre">

  <label  class="form-label">Dinero Actual</label>
  <input class="form-control" type="text" value=<?php echo $saldo?> aria-label="readonly input example" readonly name="saldo">

  <label  class="form-label">Monto a retirar</label>
    <input type="number" class="form-control" name="monto" placeholder="Ingrese el monto a retirar" required>
  </div>
<br><br>
  <input type="submit" class="btn btn-warning" name="retirar">
</form>

</div>


<div class="content">
<div class="col-md-6 offset-md-3">
    <div class="menuContent1">
        <div class="menu1">
                    <h5>
                    <?php echo "Historial de retiros"; ?>
                    </h5>
        </div>
    </div>
</div>

<div class="tabla1">
    
<table class="table table-warning table-striped">
    <thead>
        <tr>
            <th>Nro de retiro</th>
            <th>Usuario</th>
            <th>Monto retirado</th>
            <th>Fecha y hora de retiro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" .  $fila["idRetiro"]. "</td>";
            echo "<td>" .  $nombre. "</td>";
            echo "<td> S/. " .  $fila["monto"] . "</td>";
            echo "<td> " .  $fila["fecha_retiro"] . "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
    </div>
</div>
</div>




<?php 
}


include("head-foot/foot.php")?>