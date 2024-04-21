<!-- Modal -->
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="staticBackdropLabel">Insertar nueva alta de clientes a la base de datos</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="container">

        <h3 class="text-center mt-4">Datos del Cliente</h3>

        <div class="col-4 offset-4 mt-4">
          <form class="" action="clienteGuardar.php" method="post">
            <div class="mb-3">
              <label for="nombre">Nombre</label>
              <input type="text" name="nom" id="nombre" class="form-control mb-4" required>
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
  </div>
</div>