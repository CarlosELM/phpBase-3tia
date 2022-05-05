<?php
include 'connect.php';
?>
<a href="regproduto.php"> adicionar categoria </a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Produto
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from produto";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idProduto']?>
        </td>
        <td>
            <?php echo $f['nomeProduto']?>
        </td>
        <td>
            <a href="deleteproduto.php?idProduto=<?php echo $f['idProduto']?>"> remover</a>
        </td>

        <td>
            <a href="edit.php?idProduto=<?php echo $f['idProduto']?>"> editar</a>
        </td>
    </tr>
    <?php
}
?>