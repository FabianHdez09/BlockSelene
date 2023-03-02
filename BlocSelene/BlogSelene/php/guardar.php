<?php
// Conectarse a la base de datos
require "conexion.php";

// Obtener los datos del formulario
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$imagen = $_POST['imagen'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO tbl_articulo (titulo, texto,imagen) VALUES ('$titulo', '$texto', '$imagen')";

if ($obj_conexion->query($sql) === TRUE) {
  echo "Los datos se han guardado correctamente.";
} else {
  echo "Error al guardar los datos: " . $obj_conexion->error;
}

// Cerrar la conexión a la base de datos
$obj_conexion->close();
?>
