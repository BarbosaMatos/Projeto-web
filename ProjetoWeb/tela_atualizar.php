<?php include "conectar.php";
if(isset($_POST['atualizar'])){

  $PRO_CODIGO = $_POST['PRO_CODIGO'];
  $PRO_DESCRICAO = $_POST['PRO_DESCRICAO'];
  $PRO_CODIGO_BARRAS = $_POST['PRO_CODIGO_BARRAS'];
  $PRO_PRECO = $_POST['PRO_PRECO'];
  $PRO_ESTOQUE = $_POST['PRO_ESTOQUE'];
  $PRO_ESTOQUE_MINIMO = $_POST['PRO_ESTOQUE_MINIMO'];

  $query = "UPDATE TB_PRODUTOS SET PRO_DESCRICAO = '$PRO_DESCRICAO', PRO_CODIGO_BARRAS = '$PRO_CODIGO_BARRAS', PRO_PRECO = '$PRO_PRECO', PRO_ESTOQUE = '$PRO_ESTOQUE', PRO_ESTOQUE_MINIMO = '$PRO_ESTOQUE_MINIMO' WHERE PRO_CODIGO = '$PRO_CODIGO' "; 
  mysqli_query($conexao, $query) or die("Erro: não foi possível atualizar o registro no banco de dados!" . mysqli_error($conexao));
  mysqli_close($conexao);
  ?>

  <script>
    alert("O Registro foi Atualizado com Sucesso!");
    window.location="principal.php";
  </script>

  <?php
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Cadastro de Produtos</title>
</head>
<body>
  <h3>Formulário de Cadastro de Produtos</h3><br>

  <?php
  if(isset($_GET['editar_codigo'])): 
    $codigo = $_GET['editar_codigo'];
    $query = "SELECT * FROM TB_PRODUTOS WHERE PRO_CODIGO = '$codigo' ";
    $sql = mysqli_query($conexao, $query) or die ('ERRO - Não foi possível executar a Query: ' . mysqli_error($conexao));
    $dados = mysqli_fetch_array($sql);
    ?>

    <form name="Cadastro" action="tela_atualizar.php" method="POST">
      <label>Código: </label>
      <input type="text" name="PRO_CODIGO" value="<?php echo $dados['PRO_CODIGO'] ?>" size="15" readonly><br>
      <!--
      "disabled" não passa o valor para o fomulário, além de não poder editar.
      "readonly" envia o valor para o formulário e também não pode editar.
    -->
    <label>Descrição: </label>
    <input type="text" name="PRO_DESCRICAO" value="<?php echo $dados['PRO_DESCRICAO'] ?>" size="50"><br>
    <label>Código de Barras: </label>
    <input type="text" name="PRO_CODIGO_BARRAS" value="<?php echo $dados['PRO_CODIGO_BARRAS'] ?>" size="20"><br>
    <label>Preço: </label>
    <input type="text" name="PRO_PRECO" value="<?php echo $dados['PRO_PRECO'] ?>" size="15"><br>
    <label>Qtd. em Estoque: </label>
    <input type="text" name="PRO_ESTOQUE" value="<?php echo $dados['PRO_ESTOQUE'] ?>" size="15"><br>
    <label>Estoque Mínimo: </label>
    <input type="text" name="PRO_ESTOQUE_MINIMO" value="<?php echo $dados['PRO_ESTOQUE_MINIMO'] ?>" size="15"><br>
    <br>
    <input type="submit" name="atualizar" value="Atualizar">
  </form>

<?php endif; ?>

</body>
</html>