<?php
include 'conectarbd.php';

$sql = "INSERT INTO pelicula (nom, direccion, descripcion, categoria_id) VALUES ('".$_POST['nom']."', '".$_POST['direccion']."', '".$_POST['descripcion']."', '".$_POST['categoria']."')";

$result = $conn->query($sql);

$conn->close();

header('Location: peliculabd.php');

