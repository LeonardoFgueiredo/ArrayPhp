<?php

echo "<h1>Matriz 3x3 :</h1>";
echo "<hr>";
echo "<br>";

$mat = $_POST["matriz"]; 
//recebe os valores 

//volta a URL da pagina
if(!$_POST){
    header('location:index.php');
}

//Mostrando os valores para Linhas
foreach($mat as $linha => $posicaoL){
    echo '<p>Na linha ' .$linha. ' ('; 
    //indica qual linha é (0,1,2)

    foreach($mat[$linha] as $valores ){
        echo $valores.' '; 
        //mostra os valores do array

    }
    echo '), o menor valor é: '; 
    sort( $posicaoL ); 
    //ordena do menor para o maior

    echo $posicaoL[0]; 
    //como está do menor para o maior, a posição 0 é o menor

    echo ', e o maior é: ';

    rsort( $posicaoL ); 
    //ordena do maior para o menor

    echo $posicaoL[0]. '</p>'; 
    //como está do maior para o menor, a posição 0 é o maior

}
echo "<br><hr>";

//Mostrando a Matriz que o usuário digitou
echo '<h3>Sua Matriz é :</h3>';
echo '
    <center>
    <table>
        <tr>
        <td>' .$mat[0][0]. '</td>
        <td>' .$mat[0][1]. '</td>
        <td>' .$mat[0][2]. '</td>
        </tr>

        <tr>
        <td>' .$mat[1][0]. '</td>
        <td>' .$mat[1][1]. '</td>
        <td>' .$mat[1][2]. '</td>
        </tr>
        
        <tr>
        <td>' .$mat[2][0]. '</td>
        <td>' .$mat[2][1]. '</td>
        <td>' .$mat[2][2]. '</td>
        </tr>
    </table>
    </center>
';

//Estilos CSS
echo "<style> body{
    background: #282a42;
    color: white;
    font-family: monospace;
    font-size: 20px;
} 
hr{
    width: 500px;
}
h1, h3{
    display: flex;
    justify-content: center;
    margin-top:40px;
}
p{
    display: flex;
    justify-content: center;
}
table{
    justify-content: center;
    font-size: 30px;
    border: 1px solid;
}
td{
    padding:10px;
}
td:hover{
    color:#5d63aa;
}
</style> ";
?>
