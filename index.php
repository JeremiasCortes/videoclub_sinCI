<div class="">
  <!-- Llamada a la cabecera de la web -->
  <?php include 'cabecera.php'; ?>
  <?php include 'banner.php'; ?>

  <!-- Conexión a la base de datos -->
  <?php include 'conectarbd.php'; ?>

  <!-- Contenedor que se divide en 3 bloques -->
  <div class="container mt-5">
    <div class="row">
      <!-- Columna izquierda-->
      <div class="col-sm-6 text-center">
        <h2 class="">Movie & Entertainment</h2>
        <img src="img/tienda.jpg" alt="tienda video alquiler" title="Videoclub - Nombre"
          class="rounded mx-auto d-block m-2">
        <p>
          Encuentra aquí la mejor selección de películas y series en DVD, Blu Ray o streaming para disfrutar en tu
          hogar.
          Ven y disfruta en familia de nuestros productos, desde películas para ver en casa con toda la familia y
          para disfrutar con tus amigos. Tenemos variedad de géneros como fantasía, romanticas, terror, etc.
        </p>
        <hr class="d-sm-none">
      </div>



      <!-- Columna derecha -->
      <div class="col-sm-6 text-center">
        <!-- Consulta a la base de datos-->
        <?php
        $sql = "SELECT 
          pelicula.nom as peliculaNom, 
          categoria.nom as categoriaNom,
          direccion, caratula, descripcion
        FROM pelicula  
        INNER JOIN categoria ON categoria_id = categoria.id

        ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
            <div>
              <h2>
                <?php echo $row['peliculaNom']; ?>
              </h2>
              <h5>
                Género:
                <?php echo $row['categoriaNom']; ?>
              </h5>
              <p><i class="bi bi-film"></i> Dirección:
                <?php echo $row['direccion']; ?>
              </p>
              <div class="mt-1">
                <img class="" style="box-shadow: 14px 14px 25px -4px rgba(0,0,0,0.7);" width="125px"
                  src="img/<?php echo $row['caratula']; ?>">
              </div>
              <br>
              <p>
                <?php echo $row['descripcion']; ?>
              </p>
              <hr class="d-sm">
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
  <?php include 'pie.php'; ?>
</div>