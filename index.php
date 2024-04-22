<!-- Llamada a la cabecera de la web -->
<?php include 'cabecera.php'; ?>

<!-- Llamada al banner de la web -->
<?php include 'banner.php'; ?>

<!-- Conexión a la base de datos -->
<?php include 'conectarbd.php'; ?>

<!-- Consulta a la base de datos-->
<?php
$sql = "SELECT 
pelicula.id as peliculaId,
          pelicula.nom as peliculaNom, 
          categoria.nom as categoriaNom,
          direccion, caratula, descripcion
        FROM pelicula  
        INNER JOIN categoria ON categoria_id = categoria.id LIMIT 4";
$result = $conn->query($sql);

?>

<style>
  @media(min-width: 720px) {
    .principal:hover {
      border: 3px solid white;
    }
  }
</style>


<!-- TESTING -->

<div class="row row-cols-1 row-cols-md-4 g-4 mt-5  text-center bg-dark">
  <?php if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <div class="col mt-5 mb-5 ">
        <div class="card h-100 bg-info principal" style=" margin-left: auto; margin-right: auto">
          <img src="img/<?php echo $row['caratula']; ?>" class="card-img-top" alt="Porta de la pelicula <?php echo $row['peliculaNom']; ?>" width="100%" height="430" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?php echo $row['peliculaId']; ?>" aria-expanded="false" aria-controls="collapseExample">
          <div class="collapse" id="collapseExample<?php echo $row['peliculaId']; ?>">
            <div class="card card-body bg-info">
              <h5 class="card-title"><?php echo $row['peliculaNom']; ?></h5>
              <p class="card-text text-truncate"><?php echo $row['descripcion']; ?></p>
            </div>
          </div>
          <div class="card-footer bg-info">
            <small class="text-body-secondary text-light"><?php echo $row['direccion']; ?></small>
          </div>
        </div>
      </div>
  <?php }
  } ?>
</div>

<script>
  $(function() {
    let $a = $('.collapse').first();

    const bsCollapse = new bootstrap.Collapse('$a', {
      toggle: true
    })
  })
</script>

<!-- Llamada al pie de la web -->
<?php include 'pie.php'; ?>