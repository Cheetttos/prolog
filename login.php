<?php 
    include_once("header.php");
?>
<form method="post" action="validar.php">
  <label for="email">Correo electrónico:</label>
  <input type="email" name="email" id="email" required>

  <label for="password">Contraseña:</label>
  <input type="password" name="password" id="password" required>

  <button type="submit">Iniciar sesión</button>
</form>
<?php     
    include_once("footer.php");
?>