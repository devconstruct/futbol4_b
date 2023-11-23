<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Document</title>
</head>

<body>
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

    <div class="row mx-auto">
      <div class="row g-3">
        <form action="add_equipo.php" method="POST">
          <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre del Equipo</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required autofocus>
          </div>

          <div class="col-md-12">
            <a href="index.php" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-primary" name="agregar">Ingresar</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row mx-auto">
      <table>
        <thead>
          <th>Id_Equipo</th>
          <th>Nombre del equipo</th>
          <th>Acción</th>
        </thead>
        <tbody>
          <?php
          include_once('include/dbconn.php');

          $database = new Connection();
          $db = $database->open();
          try {
            $sql = 'SELECT * FROM Equipo';
            foreach ($db->query($sql) as $row) { ?>
              <tr>
                <td><?php echo $row['id_equipo'] ?> </td>

                <td><?php echo $row['nombre_equipo'] ?> </td>

                <td>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_<?php echo $row['id_equipo']; ?>">
                    Editar
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="editModal_<?php echo $row['id_equipo']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Editar Equipo</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="edit_equipo.php?id=<?php echo $row['id_equipo']; ?>">

                            <div class="row form-group">
                              <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Equipo:</label>
                              </div>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombres" value="<?php echo $row['nombre_equipo']; ?>">
                              </div>

                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="submit" name="editar" class="btn btn-primary">Guardar</button>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>


                  <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrarModal_<?php echo $row['id_equipo']; ?>">
                    Eliminar
                  </a>

                  <!-- Inicio del modal Eliminar-->
                  <div class="modal fade" id="borrarModal_<?php echo $row['id_equipo']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Elimnar Equipo</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="delete_equipo.php?id=<?php echo $row['id_equipo']; ?>">

                            <div class="row form-group">
                              <h2 class="text-center"> <?php echo $row['nombre_equipo']; ?></h2>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                              <button type="submit" name="eliminar" class="btn btn-primary">Eliminar</button>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>


                </td>
              </tr>
          <?php
            }
          } catch (PDOException $e) {
            echo "Error en la conexion" . $e->getMessage();
          }
          $database->close();
          ?>
        </tbody>
      </table>
    </div>

  </div>

  <script src="./public/js/bootstrap.min.js"></script>
  <script src="funciones.js"></script>
</body>

</html>