<?php
// Iniciar la sesión del usuario
session_start();

// Verificar si el formulario de login se envió
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recuperar los datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validar los datos del formulario
  if (empty($email) || empty($password)) {
    // Mostrar un mensaje de error si los campos están vacíos
    echo "Por favor ingrese su correo electrónico y contraseña";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Mostrar un mensaje de error si el correo electrónico no es válido
    echo "Por favor ingrese un correo electrónico válido";
  } else {
    // Conectar con la base de datos
    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="blogselene";
    $cons_equipo="localhost";

    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    $acentos = $obj_conexion ->query("SET NAMES 'utf8'");

    // Verificar si hay algún error en la conexión
    if (mysqli_connect_errno()) {
      echo "Error al conectar con la base de datos: " . mysqli_connect_error();
      exit();
    }

    // Realizar una consulta a la base de datos para buscar el correo electrónico y la contraseña
    $query = "SELECT * FROM tbl_usuarios WHERE correo = '$email' AND pass = '$password'";
    $result = mysqli_query($obj_conexion, $query);

    if (mysqli_num_rows($result) == 1) {
      // Si se encuentra una coincidencia en la base de datos, inicia la sesión del usuario y redirige al usuario a la página de inicio del sistema
      $_SESSION['email'] = $email;
      header('Location: ../subirArticulo.html');
    } else {
      // Si no se encuentra una coincidencia, muestra un mensaje de error al usuario
      echo "Correo electrónico o contraseña incorrectos";
    }

    // Cerrar la conexión
    mysqli_close($obj_conexion);
}
}
?>