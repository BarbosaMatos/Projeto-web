<?php
    include("header.html");
     include_once 'validar.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script-projeto.js"></script>    
    <title> Cardápio Mattos </title>
</head>
<body>    
    <div align="center" class="container">        
    <i><h1 class="titulos">Cardápio Pizzas Salgadas</h1></i>
         <div class="row"> 
            <div class="col-md-4">
                <button class="btn" onclick="ingMilho()"> Milho com Bacon</button>
                <button class="btn" onclick="ingCalabresa()"> Calabresa</button>                
                <button class="btn" onclick="ingPortuguesa()"> Portuguesa </button>
                <button class="btn" onclick="ingFrango()"> Frango </button>
                <button class="btn" onclick="ingStrogonoff()"> Strogonoff de Carne </button>
                <button class="btn" onclick="ingPalmito()"> Palmito </button>
                <button class="btn" onclick="ingQueijo()"> Quatro Queijo </button>
                <button class="btn" onclick="ingTomate()"> Tomate Seco </button>
            </div> <!-- col md4 -->
        <div class="col-md-8">                
                <div id="milho" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Milho, Bacon, Cebola e Orégano.</p>
                    <img id="img" src="images\milhoBacon.jpg" alt="milhoBacon.jpg">
                </div>

                <div id="calabresa" class="invisivel">
                    <p class="paragrafo1 bottomP"> Molho de Tomate, Ovo, Calabresa, Pimentão Mussarela, Cebola Roxa e Orégano.</p>
                    <img id="img" src="images\calabresa.jpg" alt="calabresa.jpg">
                </div>                

                <div id="portuguesa" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Calabresa, Milho, Bacon, Ovo,  Azeitona Preta, Cebola e Orégano.</p>
                    <img id="img" src="images\portuguesa.jpg" alt="portuguesa.jpg">
                </div>

                <div id="frango" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Frango Desfiado, Mussarela e Orégano. </p>
                    <img id="img" src="images\frangoBacon.jpg" alt="frangoBacon.jpg">
                </div>

                <div id="quatroQueijo" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Gorgonzola, Provolone, Parmesão, Cebola e Orégano. </p>
                    <img id="img" src="images\quatroQueijo.jpg" alt="quatroQueijo.jpg">
                </div>

                <div id="frango" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Frango Desfiado, Mussarela e Orégano. </p>
                    <img id="img" src="images\frangoBacon.jpg" alt="frangoBacon.jpg">
                </div>

                <div id="tomateSeco" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Tomate Seco, Especiarias e Orégano. </p>
                    <img id="img" src="images\tomateSeco.jpg" alt="tomateSeco.jpg">
                </div>

                <div id="palmito" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Palmito, Champignon e Orégano. </p>
                    <img id="img" src="images\palmito.jpg" alt="palmito.jpg">
                </div>

                <div id="strogonoff" class="invisivel">
                    <p class="paragrafo1"> Molho de Tomate, Mussarela, Palmito, Champignon e Orégano. </p>
                    <img id="img" src="images\strogonoff.jpg" alt="strogonoff.jpg">
                </div>
                </div> <!-- col md 8 -->

                <i><h1 class="titulos">Cardápio Pizzas Salgadas</h1></i>
            <div class="col-md-4" align="left">
                <button class="btn" onclick="ingAcabaxete()">Abacaxete</button>
                <button class="btn" onclick="ingBanana()"> Banana Morena</button>                
                <button class="btn" onclick="ingBrigadeiro()"> Brigadeiro </button>
                <button class="btn" onclick="ingCharge()"> Charge </button>
                <button class="btn" onclick="ingChocolate()"> Chocolate</button>
                <button class="btn" onclick="ingPrestigio()"> Prestígio </button>
                <button class="btn" onclick="ingRomeuJulieta()"> Romeu e Julieta </button>
                <button class="btn" onclick="ingSensacao()"> Sensação </button>
            </div>
            <div class="col-md-8">
                <div id="acabaxete" class="invisivel">
                    <p class="paragrafo1">Mussarela, Abacaxi e Presunto.</p>
                    <img id="img" src="images\acabaxete.jpg" alt="acabaxete.jpg">
                </div>
                <div id="bananaMorena" class="invisivel">
                    <p class="paragrafo1">Mussarela, Banana Picada, Chocolate ao Leite e Açucar.</p>
                    <img id="img" src="images\bananaMorena.jpg" alt="bananaMorena.jpg">
                </div>
                <div id="brigadeiro" class="invisivel">
                    <p class="paragrafo1">Mussarela, Brigadeiro ao Leite e Granulado de Chocolate</p>
                    <img id="img" src="images\brigadeiro.jpg" alt="brigadeiro.jpg">
                </div>
                <div id="charge" class="invisivel">
                    <p class="paragrafo1">Mussarela, Doce de Leite, Amendoas e Charge Picado.</p>
                    <img id="img" src="images\charge.jpg" alt="charge.jpg">
                </div>
                <div id="chocolate" class="invisivel">
                    <p class="paragrafo1">Mussarela, Banana Picada, Chocolate ao Leite e Açucar.</p>
                    <img id="img" src="images\chocolate.jpg" alt="chocolate.jpg">
                </div>
                <div id="prestigio" class="invisivel">
                    <p class="paragrafo1">Mussarela, Banana Picada, Chocolate ao Leite e Açucar.</p>
                    <img id="img" src="images\prestigio.jpg" alt="prestigio.jpg">
                </div>
                <div id="romeuJulieta" class="invisivel">
                    <p class="paragrafo1">Mussarela, Banana Picada, Chocolate ao Leite e Açucar.</p>
                    <img id="img" src="images\romeuJulieta.jpg" alt="romeuJulieta.jpg">
                </div>
                <div id="sensacao" class="invisivel">
                    <p class="paragrafo1">Mussarela, Banana Picada, Chocolate ao Leite e Açucar.</p>
                    <img id="img" src="images\sensacao.jpg" alt="sensacao.jpg">
                </div>

            </div>
                 
        </div>
     <!-- row  -->
     <!-- container   -->

    
</body>
</html>

<?php
    include ("footer.html");
?>