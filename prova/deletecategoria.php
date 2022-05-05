<?php
include 'connect.php';

$id = $_GET['idCategoria'];

$sq="delete from categoria where idCategoria=$id";
mysqli_query($con,$sq);
header('location:viewall_categoria.php');
?>
