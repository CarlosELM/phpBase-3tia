<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $n=$_POST['nome'];
    $p=$_POST['preco'];
    $c=$_POST['idCategoria'];
    $i="insert into produto(nomeProduto,precoProduto,idCategoria)value('$n','$p','$c')";
    mysqli_query($con, $i);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome
                        <input type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <td>
                        Preço
                        <input type="text" name="preco">
                    </td>
                </tr>

                <tr>
                    <td>
                        Categoria
                        <select name="idCategoria">
                            <option value="">-select-</option>
                            <?php
                            $sqlCategoria = mysqli_query($con, "select * from categoria");

                            while($item = mysqli_fetch_assoc($sqlCategoria))
                            {
                                $nomeItem = $item["nomeCategoria"];
                                $idCategoria = $item["idCategoria"];
                                echo"
                                <option value=$idCategoria>$nomeItem</option>
                                ";
                            }
                            ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>
            </table>
    </body>
</html>