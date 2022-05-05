<?php
include'connect.php';

if(isset($_POST['sub'])){
    $t=$_POST['nomeProduto'];
    $u=$_POST['idCategoria'];

    $i="update produto set nomeProduto='$t', idCategoria='$u' where idProduto='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:select.php');
}
   $id = $_GET['idProduto'];
    $s="select * from produto where idProduto='$id'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?> 
<form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome do Produto
                        <input type="text" name="nomeProduto" value="<?php echo $f['nomeProduto']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Categoria
                        <input type="text" name="idCategoria" value="<?php echo $f['idCategoria']?>">
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
</form>