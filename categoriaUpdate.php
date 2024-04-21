<?php
include 'conectarbd.php';

$sql = "UPDATE categoria SET nom = '".$_POST['nom']."' WHERE id = ".$_POST['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: categorias.php');
