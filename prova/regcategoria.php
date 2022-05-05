<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $n=$_POST['nome'];
    $i="insert into categoria(nomeCategoria)value('$n')";
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
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>
            </table>
    </body>
</html>