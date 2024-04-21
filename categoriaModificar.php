<?php include 'cabecera.php'; ?>

<div class="container">

  <h3 class="text-center mt-4">Modificar Categorias</h3>

  <div class="col-4 offset-4 mt-4">
    <form class="" action="categoriaUpdate.php" method="post">
      <div class="mb-3">
        <label for="nombre">Nombre de la Categoria</label>
        <input type="hidden" name="id" value="<?= $_POST['id'];?>">
        <input type="text" name="nom" id="nombre" class="form-control" required value="<?= $_POST['nom'];?>">
      </div>
      <div class="mb-3">
        <a href="categorias.php" class="btn btn-danger">Volver</a>
        <button type="submit" name="button" class="btn btn-primary float-end">Guardar</button>
      </div>
    </form>
  </div>
</div>

<?php include 'pie.php'; ?>
