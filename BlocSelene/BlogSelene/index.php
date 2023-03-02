<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apeyron Seekers...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
   

</head>
<body>
    <body>
        <img src="imagenes/logo.jpeg" class="img-fluid rounded mx-auto logo" alt="">
        <header class="bg-dark text-white py-3">
          <div class="container ">
            <h1>Apeyron Seekers...</h1>
          </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">Mi Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Herramientas</a>
                  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#enl">Complementos</a>
                 
                  </li>
              </ul>
            </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Iniciar sesion 
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Te damos la bienvenida como Administrador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="php/login.php" method="post" >
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Iniciar Sesión</button>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
          </div>
        </nav>
        <main class="container my-5">
          <article class="Bien" >
            <h2>Bienvenido</h2>
            <p>Hola queridos lectores y lectoras, les damos la bienvenida a este blog. El cual tiene la
                finalidad de explicar e informar de temas filosóficos, cómo lo son el Idealismo,
                universalismo, existencialismo, entre otros más, encontrándonos a autores que sus aportes
                revolucionaron la filosofía, tales como Hegel, Camus, Gadamer, Husserl, Sartre , entre
                otros.
                Nuestro fin es divulgar información de manera clara y dinámica intentando que los temas
                sean de lo más interesante y comprensible posible, es por ello que aquí encontrarán
                además de información relevante y clara, una serie de actividades que han sido creadas
                para poder entender mejor los temas aquí</p>
          </article>

          <article class="Bien" >
          <?php
// Conectarse a la base de datos
require "php/conexion.php";
// Realizar una consulta SQL
$resultado = mysqli_query($obj_conexion, "SELECT * FROM tbl_articulo");

// Inicializar el título anterior
$titulo_anterior = null;

// Recorrer los resultados de la consulta
while ($fila = mysqli_fetch_assoc($resultado)) {
  // Obtener el título actual
  $titulo_actual = $fila["titulo"];

  // Si el título actual es diferente al título anterior, cerrar la etiqueta anterior
  if ($titulo_actual !== $titulo_anterior) {
    if ($titulo_anterior !== null) {
      echo "</article>";
    }
    echo "<article>";
    echo "<h2>" . $titulo_actual . "</h2>";
    echo "<p>" . $fila["texto"] . "</p>";
  }

  // Mostrar la imagen (asumiendo que está almacenada en la columna "imagen" de la tabla)
  if ($fila["imagen"]) {
    echo '<img src="data:image/jpeg;base64,' . base64_encode($fila["imagen"]) . '" />';
  }

  // Actualizar el título anterior
  $titulo_anterior = $titulo_actual;
}

// Cerrar la etiqueta final
if ($titulo_anterior !== null) {
  echo "</article>";
}

// Cerrar la conexión a la base de datos
mysqli_close($obj_conexion);
?>




          </article>

         <article>
            <h2 class="titulo-seccion" id="enl">Enlaces</h2>
            <div class="redes-sociales">
              <a href="https://classroom.google.com/c/NTQyOTcyMDM3ODIx?cjc=4jiisru" target="_blank" rel="noreferrer noopener">
                <img src="assets/icons/class.svg" alt="Google Classroom" class="icono-red-social">
                <span class="Google Classroom">Google Classroom</span>
              </a>
              <a href="https://instagram.com/apeyronseekers?igshid=YmMyMTA2M2Y=" target="_blank" rel="noreferrer noopener">
                <img src="assets/icons/instagram.svg" alt="Instagram" class="icono-red-social">
                <span class="instagram">Instagram</span>
              </a>
            </div>
          </article>
          

          

        </main>
        <footer class="bg-dark text-white py-3">
          <div class="container">
            <p>Derechos de autor © 2023 Apeyron Seekers. Todos los derechos reservados.</p>
          </div>
        </footer>
    
        <!-- Incluye los archivos JavaScript de Bootstrap -->
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      </body>
</body>
</html>