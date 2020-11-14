<?php
    //  Dados para conectar o banco de dados -- PHP7

    $servidor_bd = "127.0.0.1";
    $usuario_bd = "root";
    $senha_bd = "";
    $nome_bd = "Projeto-Web";

    //  CRIANDO A CONEXÃO COM O BANCO DE DADOS
    $conexao = mysqli_connect ($servidor_bd, $usuario_bd, $senha_bd, $nome_bd);

    // VERIFICANDO CONEXAO
    if (!$conexao){
        die ("Error - Não foi possível conectar ao banco de dados! Detalhes:" .mysqli_error());
        // equivalente ao exit();
    }

    // IDENTIFICANDO CHARSET DO BANCO
    mysqli_set_charset($conexao, 'utf8');

?>