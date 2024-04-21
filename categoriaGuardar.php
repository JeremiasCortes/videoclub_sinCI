<?php
include 'conectarbd.php';

$sql = "INSERT INTO categoria (nom) VALUES ('".$_POST['nom']."')";

$result = $conn->query($sql);

$conn->close();

header('Location: categorias.php');
