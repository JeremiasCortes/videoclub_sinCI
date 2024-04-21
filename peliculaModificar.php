<?php include 'conectarbd.php'; ?>
<?php
$sql = "SELECT * FROM categoria";
$result = $conn->query($sql);
?>

    <div class="modal-header">
      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar las películas de la base de datos</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="container">
        <h3 class="text-center mt-4">Datos de la Película</h3>
        <div class="col-4 offset-4 mt-4">
          <form id="formPeli" class="" action="peliculaUpdate.php" method="post">
            <div class="mb-3">
              <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
              <label for="nombre">Nombre</label>
              <input type="text" name="nom" id="nombre" class="form-control mb-4" required value="<?= $_POST['nom']; ?>">
              <label for="nombre">Dirección</label>
              <input type="text" name="direccion" id="direccionPeli" class="form-control mb-4" required value="<?= $_POST['direccion']; ?>">
              <label for="nombre">Categoria</label>
              <select class="form-select mb-4" id="categoriaPeli" name="categoria" aria-label="Default select example" required>
                <!-- Consulta a la base de datos-->
                <?php if ($result->num_rows > 0) : ?>
                  <?php while ($row = $result->fetch_assoc()) : ?>
                    <?php if ($row['id'] == $_POST['categoriaid']) : ?>
                      <option value="<?php echo $row['id']; ?>" selected><?php echo $row['nom']; ?></option>
                    <?php else : ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></option>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </select>
              <label for="nombre">Descripción</label>
              <input type="text" name="descripcion" id="descripcionPeli" class="form-control" required value="<?= $_POST['descripcion']; ?>">
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

<?php $conn->close(); ?>