<?php
//Evitando problemas com acentuação
ini_set('default_charset','UTF-8');

//Impedindo que erros sejam reportados (Não exibindo os erros)
error_reporting(0);

/*
 * Utilizamos a função "include_once" no início do script para inserir automaticamente 
 * o conteúdo do arquivo conectar.php na página de cadastrar.php. 
 * O arquivo conectar.php realiza a conexão com o banco, e se em algum momento algum dado mudar,
 * será necessário mudar um único arquivo, e não em vários locais do código.
*/
//Incluindo a conexão com o banco
include_once("conectar.php");


// Executando a SQL query
$query = 'SELECT * FROM TB_PRODUTOS';
$sql = mysqli_query($conexao, $query) or die ('ERRO - Não foi possível executar a Query: ' . mysqli_error($conexao));

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Listar Dados</title>
</head>
<body>

	<table>
		<tr>
			<th>Código</th>
			<th>Descrição</th>
			<th>Cód. de Barras</th>
			<th>Preço</th>
			<th>Estoque</th>
			<th>Estoque Mínimo</th>
			<th>Editar</th>
			<th>Apagar</th>
		</tr>

		<?php while($dados=mysqli_fetch_assoc($sql)): ?>

			<tr>
				<td><?php echo $dados['PRO_CODIGO'] ?></td>
				<td><?php echo $dados['PRO_DESCRICAO'] ?></td>
				<td><?php echo $dados['PRO_CODIGO_BARRAS'] ?></td>
				<td><?php echo $dados['PRO_PRECO'] ?></td>
				<td><?php echo $dados['PRO_ESTOQUE'] ?></td>
				<td><?php echo $dados['PRO_ESTOQUE_MINIMO'] ?></td>
				<!-- Botão para editar: envia (GET) para página php responsável por editar, o código do produto a ser recuperado apra edição -->
				<td><a href="tela_atualizar.php?editar_codigo=<?php echo $dados['PRO_CODIGO']?>" onclick="return confirm('Deseja Editar <?php echo $dados['PRO_DESCRICAO']?>?');">Editar</a></td>
				<!-- Botão para deletar: envia (GET) para página php responsável pela deleção, o código do produto a ser deletado -->
				<!-- Normalmente temos uma tela de cadastrastro e edição para cada entidade do banco, porém para deleção, poderiamos utilizar uma única página PHP e enviar além do código do registro a ser apagado, o nome da entidade?!? -->
				<td><a href="deletar.php?deletar_codigo=<?php echo $dados['PRO_CODIGO']?>" onclick="return confirm('Deseja Excluir <?php echo $dados['PRO_DESCRICAO']?>?');">Deletar</a></td>
			</tr>

		<?php endwhile; ?>

	</table>
	<br/>
	<a href="principal.php">Voltar para Página Principal</a>
</body>
</html>

<?php
	//Encerrando a conexão com o banco de dados
mysqli_close($conexao);
?>