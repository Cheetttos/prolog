<?php 
    include_once("header.php");
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="post" action="validar.php">
        <!-- input correo-->
        <div class="form-group">
          <label for="email" class="form-label mt-4">Correo electrónico:</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>
         <!-- input contraseña-->
        <div class="form-group">
          <label for="password" class="form-label mt-4">Contraseña:</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>
         <!-- input boton enviar-->
        <div class="row mt-3 rounded">
          <div class="col-md ">
            <button type="submit" class="btn btn-outline-primary">Iniciar sesión</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php     
    include_once("footer.php");
?>