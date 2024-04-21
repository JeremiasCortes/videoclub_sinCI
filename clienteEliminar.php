<?php
include 'conectarbd.php';

$sql = "delete from cliente where id = ".$_GET['id'];
$result = $conn->query($sql);

$conn->close();

header('Location: clientes.php');
