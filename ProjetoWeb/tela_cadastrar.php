
<?php
  include_once("header.html")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Cadastro de Produtos</title>
</head>
<body>
<h1>Pedidos </h1>
  <div class="cadastro">  
  <button id="btn-cadastrar"onclick="mostrarCardapioSalgado()"> Sabores Salgados </button>
  <div id="salgadas">
  <form name="cadastro" action="cadastrar.php" method="POST">    
    <select name="PRO_DESCRICAO" id="PRO_DESCRICAO">
      <option value="calabresa">Calabresa</option>
      <option value="milhoBacon">Milho com Bacon</option>
      <option value="portuguesa">Portuguesa</option>
      <option value="frango">Frango</option>
      <option value="strognoff">Strogonoff de Carne</option>
      <option value="palmito">Palmito</option>
      <option value="tomateSeco">Tomate Seco</option>
    </select>
    </div>
    <button id="btn-cadastrar"onclick="mostrarCardapioDoce()">Sabores Doces </button>
    <div id="doces">    
    <select name="PRO_DESCRICAO" id="PRO_DESCRICAO">
      <option value="charge">Charge</option>
      <option value="prestigio">Prestígio</option>
      <option value="sensacao">Sensação</option>
      <option value="Abacaxete">Abacaxete</option>
      <option value="strognoff">Banana Morena</option>
      <option value="palmito">Romeu e Julieta</option>
      <option value="tomateSeco">Chocolate</option>
    </select>
  </div>
  </div>

    <label for="tamanhoPizza">Tamanho da Pizza </label>
    <select name="PRO_TAMANHO" id="PRO_TAMANHO">
      <option value="pequena"> Pequena.</option>
      <option value="media"> Média.</option>
      <option value="grande"> Grande.</option>
      <option value="gigante"> Gigante.</option>
    </select>
    <br>

    <label for="endereco"> Endereço: </label>
    <input type="text" name="PRO_END_CODIGO" size="30">
    <label for="numero"> Número: </label>
    <input type="text" name="" size="30">
    <label for="bairro"> Bairro: </label>
    <select name="END_BAIRRO" id="END_BAIRRO">
      <option value="jardimVitoria">Jardim Vitória</option>
      <option value="saoJorge"> São Jorge</option>
      <option value="centro">Centro</option>
      <option value="cristovao">São Cristóvão</option>
    </select>    
    <input type="submit" name="enviar" value="Enviar">
    
	<!-- 
	Ao clicar no botão Enviar, os dados serão enviados (utilizando o método POST) 
	para o script PHP "cadastrar.php", 	onde será realizado o cadastro dos dados 
	no banco de dados.
	-->
  </form>
</body>
</html>
<?php
  include_once("footer.html");
?>