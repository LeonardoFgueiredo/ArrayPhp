<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 3x3 | Php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="a.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <img src="a.png" width="150px" alt="">
        <h1>Matriz 3x3</h1>
        <p>Qual valor é maior/menor ?</p>
        <form action="verificar.php" method="POST">
            <hr><br>
            <table>

                <!--PHP Da criação da tabela-->
                <?php
                for ($linha = 0; $linha < 3; $linha++) {
                    echo "<tr>";
                    for ($coluna = 0; $coluna < 3; $coluna++) {
                        echo "<td><input type='text' name='matriz[$linha][$coluna]'></td>";
                    }
                    echo "</tr>";
                }
                ?>

            </table> <br><br>

            <button type="submit" value="Enviar" name="botao" class="backInDown glow-on-hover">ENVIAR</button>
        </form><br>
        <p>Leonardo Figueiredo</p>
    </div>

</body>

</html>