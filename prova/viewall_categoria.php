<?php
include 'connect.php';
?>
<a href="regcategoria.php"> adicionar categoria </a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Categoria
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from categoria";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idCategoria']?>
        </td>
        <td>
            <?php echo $f['nomeCategoria']?>
        </td>
        <td>
            <a href="deletecategoria.php?idCategoria=<?php echo $f['idCategoria']?>"> remover</a>
        </td>
    </tr>
    <?php
}
?>