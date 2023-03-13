<?php
session_start();
include("config.php");
// Conectarse a la base de datos
$cone = DBDRIVER.':host='.DBHOST.';dbname='.DBNAME.';port='.DBPORT;
$db = new PDO($cone,DBUSER,DBPASS);
// Obtener el correo electrónico y la contraseña ingresados
$email = $_POST['email'];
$password = $_POST['password'];

// Verificar si el correo electrónico y la contraseña son válidos
$consulta = "SELECT id FROM usuarios WHERE email='$email' AND contrasena='$password'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
  // Si los datos son correctos, iniciar la sesión del usuario
  $_SESSION['id_usuario'] = mysqli_fetch_assoc($resultado)['id'];
  header('Location: index.php');
} else {
  // Si los datos son incorrectos, mostrar un mensaje de error
  echo 'Error: correo electrónico o contraseña incorrectos';
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
