<?php
include 'conectarbd.php';

$sql = "insert into cliente values (null,'".$_POST['nom']."')";
$result = $conn->query($sql);

$conn->close();

header('Location: clientes.php');
