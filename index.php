
<?php include("head-foot/head.php")?>

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
                
                echo "Lista de usuarios"; 
            ?> 
    </div>
</div>


<a class="add1" href="create-client.php"><button class='btn btn-warning' type='submit' href="">Agregar cliente</button></a>




<?php include("db.php")?>

<?php
$consulta="SELECT * FROM cliente";
$resultado=mysqli_query($conexion, $consulta);
?>

<div class="tabla">
<table class="table table-warning table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th> </th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" .  $fila["nombre"]. "</td>";
            echo "<td>" .  $fila["usuario"]. "</td>";
            echo "<td>" .  $fila["contraseña"] . "</td>";
            echo "<td>";
            ?>
            <a href="view_account.php?idCliente=<?php echo $fila['idCliente']?>&nombre=<?php echo $fila['nombre']?>">
            <button class='btn btn-warning' type='submit' href="">Tarjetas</button>
            </a>
            <?php
            echo "</td>";

            echo "<td>";
            ?>
            <a href="delete-client.php?idCliente=<?php echo $fila['idCliente']?>">
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
<?php include("head-foot/foot.php")?>