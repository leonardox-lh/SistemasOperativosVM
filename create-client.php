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
                
                echo "Agregar usuario"; 
            ?> 
    </div>
</div>

<div class="contenedor">
    
<form action="create.php" method="post">
  <div class="form-group">

    <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" required>
  </div>

  <div class="form-group">
  <br> <br>
    <input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario" required>
  </div>

  <div class="form-group">
  <br> <br>
    <input type="password" class="form-control" name="contraseña" placeholder="Ingrese contraseña" required>
  </div>
  <br><br>
    <input type="submit" class="btn btn-warning" name="guardar">

</form>

</div>


<?php include("head-foot/foot.php")?>