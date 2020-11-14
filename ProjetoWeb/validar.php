<?php
    session_start();
    if(!isset ($_SESSION["login"])){
        // SE A VARIÁVEL NAO EXISTIR, SIGNIFICA QUE O USUÁRIO NAO ESTÁ CONECTADO
        // LOGO, DEVE SER REDIRECIONADO PARA PÁGINA DE LOGIN.
        header ("Location: formlogin.php?erro= <h1><b> Por gentileza, faça o login para visualizar o cardápio! </b></h1>");
    }

?>