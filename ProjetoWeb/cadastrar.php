<?php
/*
 * Utilizamos a função "include_once" no início do script para inserir automaticamente 
 * o conteúdo do arquivo conectar.php na página de cadastrar.php. 
 * O arquivo conectar.php realiza a conexão com o banco, e se em algum momento algum dado mudar,
 * será necessário mudar um único arquivo, e não em vários locais do código.
*/
//Incluindo a conexão com o banco
include_once("conexabd.php");

//Evitando problemas com acentuação
ini_set('default_charset','UTF-8');

//Impedindo que erros sejam reportados (Não exibindo os erros)
//error_reporting(0);

//Criamos variáveis para receber os valores de input enviados de "tela_dacastrar.html"
$PRO_DESCRICAO = $_POST['PRO_DESCRICAO'];
$PRO_CODIGO_BARRAS = $_POST['PRO_CODIGO_BARRAS'];
$PRO_PRECO = $_POST['PRO_PRECO'];
$PRO_ESTOQUE = $_POST['PRO_ESTOQUE'];
$PRO_ESTOQUE_MINIMO = $_POST['PRO_ESTOQUE_MINIMO'];

$query = "INSERT INTO TB_PRODUTOS (PRO_DESCRICAO, PRO_CODIGO_BARRAS, PRO_PRECO, PRO_ESTOQUE, PRO_ESTOQUE_MINIMO) VALUES ('$PRO_DESCRICAO', '$PRO_CODIGO_BARRAS', '$PRO_PRECO', '$PRO_ESTOQUE', '$PRO_ESTOQUE_MINIMO')"; 
mysqli_query($conexao, $query) or die("Erro: não foi possível registrar no banco de dados!" . mysqli_error($conexao));
mysqli_close($conexao);
echo "Produto cadastrado com sucesso!<br>";
echo "<a href='tela_cadastrar.html'>Cadastrar um Novo Produto</a><br>";
echo "<a href='listar.php'>Listar Produtos Cadastrados</a><br>";
?>