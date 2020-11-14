
<?php
    include("header.html");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    
    <title>Formulário de Acesso</title>
</head>
<body>

<div class="container">
    
<div class="formulario-login">
    <form action="login.php" name="formLogin" method="POST">
        <?php
            if (isset($_GET["erro"])){
                $erro = $_GET["erro"];
                echo "<center> $erro </center>";
            }
        ?>  
            
            <h1 id="tituloFormulario">Login</h1>            
            <label for="txtLogin">Usuário:</label>
            <input type="text" name="txtLogin" placeholder="User">
            <br>

            <label for="txtSenha">Senha:</label>
            <input type="password" name="txtSenha" placeholder="Password">
            
            <br>            
            <button class="btn"><input type="submit" value=""> Login </button>
            <button class="btn"><input type="reset" value=""> Limpar</button>
            </div>
        
    </form>    
    </div>
    </div>
</body>
</html>