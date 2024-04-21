<?php include 'conectarbd.php'; ?>

<?php
$sql = "SELECT * FROM categoria";

$result = $conn->query($sql);
?>

<!-- Modal -->

    <div class="modal-header">
      <h1 class="modal-title fs-5" id="staticBackdropLabel">Insertar nueva alta de película a la base de datos</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="container">
        <h3 class="text-center mt-4">Datos de la Película</h3>

        <div class="col-4 offset-4 mt-4">
          <form class="" action="peliculaGuardar.php" method="post">
            <div class="mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" name="nom" id="nombre" class="form-control mb-4" required>
              <label for="nombre">Director</label>
              <input type="text" name="direccion" id="direccionid" class="form-control mb-4" required>
              <label for="nombre">Categoria</label>
              <select class="form-select mb-4" id="categoriaid" name="categoria" aria-label="Default select example" required>
                <option selected disabled>Selecciona una categoria</option>
                <!-- Consulta a la base de datos-->
                <?php if ($result->num_rows > 0) : ?>
                  <?php while ($row = $result->fetch_assoc()) : ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></option>
                  <?php endwhile; ?>
                <?php endif; ?>
              </select>
              <label for="nombre">Descripción</label>
              <input type="text" name="descripcion" id="descripcionid" class="form-control mb-4" required>


            </div>

            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <button type="submit" name="button" class="btn btn-outline-success">Guardar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
