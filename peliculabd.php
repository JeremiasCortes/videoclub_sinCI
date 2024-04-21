<?php include 'conectarbd.php'; ?>
<?php
$sql = "SELECT
  pelicula.id as peliculaId,
  pelicula.nom as peliculaNom, 
  pelicula.direccion as peliculaDireccion,
  categoria.nom as categoriaNom,
  categoria.id as categoriaId,
  pelicula.descripcion as peliculaDescripcion
  FROM pelicula  
  INNER JOIN categoria ON categoria_id = categoria.id
  ORDER BY pelicula.id;";

$result = $conn->query($sql);
?>

<?php include 'cabecera.php'; ?>

<div class=" table-responsive">

  <a class="btn btn-info mt-5 float-end margen-inferior altas" data-bs-toggle="modal" data-bs-target="#exampleModal1">Nueva Película <i class="bi bi-window-plus"></i></a>

  <table class="table table-striped table-hover table-dark text-center align-middle">
    <thead>
      <th>Id</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Categoria</th>
      <th>Descripción</th>
      <th>Modificar</th>
      <th>Eliminar</th>
    </thead>
    <tbody>
      <?php if ($result->num_rows > 0) : ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
          <tr>
            <td><?= $row['peliculaId']; ?></td>
            <td><?= $row['peliculaNom']; ?></td>
            <td><?= $row['peliculaDireccion']; ?></td>
            <td><?= $row['categoriaNom']; ?></td>
            <td><?= $row['peliculaDescripcion']; ?></td>
            <td class="modificar" data-id="<?= $row['peliculaId']; ?>" data-nom="<?= $row['peliculaNom']; ?>" data-direccion="<?= $row['peliculaDireccion']; ?>" data-categoria="<?= $row['categoriaNom']; ?>" data-categoriaid="<?= $row['categoriaId']; ?>" data-descripcion="<?= $row['peliculaDescripcion']; ?>">

              <a href="#" class='btn btn-primary modificar'>
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
            <td>
              <a class="eliminar btn btn-primary" href="peliculaEliminar.php?id=<?= $row['peliculaId']; ?>"><i class="bi bi-trash3-fill"></i></a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else : ?>
        No hay ningún cliente registrado.
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?php include 'pie.php'; ?>

<form action="peliculaModificar.php" method="post" id="formModificar">
  <input type="hidden" name="id">
  <input type="hidden" name="nom">
  <input type="hidden" name="direccion">
  <input type="hidden" name="categoria">
  <input type="hidden" name="categoriaid">
  <input type="hidden" name="descripcion">
</form>

<!-- Modal para alta de nueva película -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="false">
<div class="modal-dialog modal-lg">
    <div class="modal-content" id="alta">
      <?php include 'peliculaAlta.php'; ?>
    </div>
  </div>
</div>

<!-- Modal para modificar película existente -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="modificar">
      <?php include 'peliculaModificar.php'; ?>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    // Cuando se hace clic en un botón de modificar
    $(".modificar").on("click", function(e) {
      e.preventDefault();
      var id = $(this).closest("tr").find(".modificar").data("id");
      var nom = $(this).closest("tr").find(".modificar").data("nom");
      var direccion = $(this).closest("tr").find(".modificar").data("direccion");
      var categoria = $(this).closest("tr").find(".modificar").data("categoria");
      var categoriaid = $(this).closest("tr").find(".modificar").data("categoriaid");
      var descripcion = $(this).closest("tr").find(".modificar").data("descripcion");

      console.log("ID: " + id);
      console.log("Nombre: " + nom);
      console.log("Dirección: " + direccion);
      console.log("Categoría: " + categoria);
      console.log("ID de Categoría: " + categoriaid);
      console.log("Descripción: " + descripcion);

      $.ajax({
        type: "POST",
        url: "peliculaModificar.php",
        data: {
          id: id,
          nom: nom,
          direccion: direccion,
          categoria: categoria,
          categoriaid: categoriaid,
          descripcion: descripcion
        },
        success: function(response) {
          $("#modificar").html(response);
          $("#exampleModal2").modal("show");
        },
        error: function(xhr, status, error) {
          console.error("Error al obtener los datos de la película:", error);
        }
      });
    });



    // Cuando se hace clic a eliminar
    $(".eliminar").on("click", function(e) {
      // Evitar el comportamiento predeterminado del enlace
      e.preventDefault();
      // Mostrar el cuadro de diálogo de confirmación
      if (confirm("¿Estás seguro de que deseas eliminar esta película?")) {
        // Si el usuario confirma, redirige a la URL del enlace
        window.location.href = $(this).attr("href");
      } else {
        // Si el usuario cancela, no hace nada
        return false;
      }
    });
  });
</script>

<?php $conn->close(); ?>