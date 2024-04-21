<?php
include 'conectarbd.php';

$sql = "update cliente set nom = '".$_POST['nom']."' where id =".$_POST['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: clientes.php');
