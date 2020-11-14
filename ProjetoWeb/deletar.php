<?php 

//Incluindo a conexão com o banco
include_once("conexabd.php");

if(isset($_GET['deletar_codigo'])){
	$codigo = $_GET['deletar_codigo'];
	// Executando a SQL query
	$query = "DELETE FROM TB_PRODUTOS WHERE PRO_CODIGO = '$codigo'";
	$sql = mysqli_query($conexao, $query) or die ('ERRO - Não foi possível executar a Query: ' . mysqli_error($conexao));
	if($sql){
		header("location:listar.php");
	}else{
		echo '<script>alert("Erro: a query de deleção falhou!")</script>';
		echo '<a href="listar.php">Voltar</a>';
		echo '</br><a href="principal.php">Ir para Página Principal</a>';
	}
}
?>