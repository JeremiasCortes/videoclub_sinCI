<?php
include 'conectarbd.php';

$sql = "UPDATE pelicula SET nom = '".$_POST['nom']."', direccion = '".$_POST['direccion']."', descripcion = '".$_POST['descripcion']."', categoria_id = '".$_POST['categoria']."' WHERE id = ".$_POST['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: peliculabd.php');
