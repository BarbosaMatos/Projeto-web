<?php
    // CAPTURANDO DADOS DO FORMLOGIN.PHP
    $login = $_POST["txtLogin"];
    $senha = $_POST["txtSenha"];

    // INCLUINDO CONEXÃO COM BANCO
    include_once("conexabd.php");

    // EXECUTANDO A SQL QUERY
    $query = "SELECT * FROM TB_USUARIOS WHERE USU_USUARIO = '$login' AND USU_SENHA='$senha'";
    $res = mysqli_query($conexao, $query) or die ('ERRO - Não foi possível executar a Query:'. mysqli_error($conexao));

    if ($registro = mysqli_fetch_assoc($res)){
        $nome = $registro["USU_NOME"];
        session_start();
        $_SESSION["login"] = $login;
        $_SESSION["nome"] = $nome;
        header ("Location: principal.php");
    } else {
        // CASO LOGIN E SENHA NÃO CONFERIREM
        header ("Location: formlogin.php?erro= <b> ACESSO NEGADO.</b> ");
    }
?>