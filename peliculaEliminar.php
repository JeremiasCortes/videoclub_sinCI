<?php
include 'conectarbd.php';

$sql = "DELETE FROM pelicula WHERE id = ".$_GET['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: peliculabd.php');
