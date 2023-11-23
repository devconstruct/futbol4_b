<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Club Deportville</title>
</head>

<body data-bs-theme="light">
  <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Deportville</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Jugadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">El club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Afición</a>
            <li class="nav-item">
              <a class="nav-link" href="#">Usuario</a>
            </li>
            <li class="nav-item">
              <button class="btn rounded-fill" onclick="cambiarTema()">
                <i class="bi bi-moon"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container py-4">
      <header>
        <div class="col-md-12">
          <div class="card card-body bg-secondary text-light">
            <div class="row">
              <div class="col-md-4">
                <img src="./public/image/deportville.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-8">
                <?php
                include_once('include/dbconn.php');

                $database = new Connection();
                $db = $database->open();
                try {
                  $sql = 'SELECT * FROM Equipo';
                  $result = $db->query($sql);
                  if ($result) { //Comprueba si la consulta a la base de datos se realizó con éxito y si devolvió algún resultado.
                    $row = $result->fetch(); // Obtiene el primer registro de la primera fila
                    if ($row) { //verifica si hay algún dato en la fila obtenida de la base de datos.
                      echo "<h1>" . $row['nombre_equipo'] . "</h1>"; // Imprime el valor de 'nombre_equipo'
                    }
                  }
                } catch (PDOException $e) {
                  echo "Error en la conexión: " . $e->getMessage();
                }
                $database->close();
                ?>
                En este caso, utilizamos el método fetch() para obtener el primer y único registro en lugar de iterar a través de un bucle foreach. Esto te permitirá mostrar la información del único registro sin necesidad de utilizar un bucle.




                Is this conversation helpful so far?




                <h3>Conoce más de nuestro primer equipo</h3>
                <p>Ante cientos de aficionados que acudieron a la Plaza
                  Principal, se presentó a jugadores y cuerpo técnico del
                  club guanajuatense Deportville.
                  Tras dos años de ausencia del futbol profesional,
                  Deportville de Penjamo está de vuelta para participar en
                  la temporada 2023-2024 de Liga.</p>
                <a href="equipo.php">Ver mas</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="row py-2">
        <div class="col-md-4">
          <div class="card-bg-light">
            <div class="card-body">
              <h1>Habilidades</h1>

              <div class="py-3">
                <h5>Velocidad</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
                </div>
              </div>

              <div class="py-3">
                <h5>Resistencia</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 70%;"></div>
                </div>
              </div>

              <div class="py-3">
                <h5>Velocidad</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                </div>
              </div>

              <div class="py-3">
                <h5>Resistencia</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
                </div>
              </div>

              <div class="py-3">
                <h5>Destreza</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 40%;"></div>
                </div>
              </div>

              <div class="py-3">
                <h5>Visión de juego</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%;"></div>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card-bg-light">
            <div class="card-body">
              <h1>Conoce al primer equipo</h1>
              <ul>

                <li>
                  <h3>Nuestro equpo femenil</h3>
                  <h5>Apoya a nuestros equipos Temp. 2022 -2023</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae ut voluptatum explicabo.</p>
                </li>
                <li>
                  <h3>Nuestro equpo femenil</h3>
                  <h5>Apoya a nuestros equipos Temp. 2022 -2023</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae ut voluptatum explicabo.</p>
                </li>
                <li>
                  <h3>Nuestro equpo femenil</h3>
                  <h5>Apoya a nuestros equipos Temp. 2022 -2023</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae ut voluptatum explicabo.</p>
                </li>
                <li>
                  <h3>Nuestro equpo femenil</h3>
                  <h5>Apoya a nuestros equipos Temp. 2022 -2023</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quae ut voluptatum explicabo.</p>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-body bg-dark">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center text-light">Primer Equipo</h1>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena1.jpeg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena1.jpeg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena1.jpeg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena2.jpeg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena3.jpeg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 p-2">
                <div class="card h-100">
                  <div class="overflow">
                    <img src="./public/image/entrena4.jpg" alt="" class="card-img-top">
                  </div>
                  <div class="card-body">
                    <h1>Primer Entrenamiento</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia suscipit officia aspernatur, nesciunt voluptas blanditiis.</p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>


    </main>
  </div>

  <script src="./public/js/bootstrap.min.js"></script>
  <script src="funciones.js"></script>
</body>

</html>