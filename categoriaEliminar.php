<?php
include 'conectarbd.php';

$sql = "DELETE FROM categoria WHERE id = ".$_GET['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: categorias.php');
