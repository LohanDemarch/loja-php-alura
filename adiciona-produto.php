<?php include("cabecalho.php")?>
<?php

    $nome = $_GET["nome"];
    $preco =  $_GET["preco"];

    $conexao = mysqli_connect('localhost' , 'root', '' , 'loja');
    $query = "insert into produtos (nome,valor) values ('{$nome}', {$preco})";
    mysqli_query($conexao, $query);
   
    mysqli_close($conexao);
?>
   <p class="alert-success"> Produto <?php echo $nome; ?> <?php echo $preco; ?>  adicionado com sucesso!<p>   


<?php include("rodape.php")?>