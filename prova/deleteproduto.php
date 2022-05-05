<?php
include 'connect.php';

$id = $_GET['idProduto'];

$sq="delete from produto where idProduto=$id";
mysqli_query($con,$sq);
header('location:viewall_produto.php');
?>
