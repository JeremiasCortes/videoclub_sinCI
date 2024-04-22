<?php include 'conectarbd.php'; ?>
<?php
$sql = "SELECT id,nom FROM cliente";
$result = $conn->query($sql);
?>

<?php include 'cabecera.php'; ?>
<div class="contenedor bg-light">
  <div class="table-responsive">
    <a class="btn btn-info mt-5 float-end margen-inferior" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo Cliente <i class="bi bi-window-plus"></i></a>
    <table class="table table-striped table-dark mt-2 text-center">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0) : ?>
          <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['nom']; ?></td>
              <td class="modificar" data-id="<?= $row['id']; ?>" data-nom="<?= $row['nom']; ?>"><a href="#">
                  <i class="bi bi-pencil-square"></i>
                </a>
              </td>
              <td>
                <a class="eliminar" href="clienteEliminar.php?id=<?= $row['id']; ?>"><i class="bi-trash3-fill"></i></a>

              </td>
            </tr>
          <?php endwhile; ?>
        <?php else : ?>
          No hay ningún cliente registrado.
        <?php endif; ?>
      </tbody>
    </table>
  </div>



  <form action="clienteModificar.php" method="post" id="formModificar">
    <input type="hidden" name="id">
    <input type="hidden" name="nom">
  </form>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
    <?php include 'clienteAlta.php'; ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('td.modificar').on('click', function(e) {
      e.preventDefault();
      $('#formModificar input').eq(0).val($(this).data('id'));
      $('#formModificar input').eq(1).val($(this).data('nom'));
      $('#formModificar').submit();
    });

    // Cuando se haga click a eliminar
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
<?php include 'pie.php'; ?>