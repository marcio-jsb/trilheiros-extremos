
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilophp.css" type="text/css">
    <link rel="stylesheet" href="text_atividades.css" type="text/css">
    <title>Trilheiros extremos</title>
</head>
<body>
<div id="topo">
   <header>
       
        <div id="logotipo">
         <img src="img/logotipo.png">
         <h3>Trilheiros extremos</h3>
        </div>
        <nav>
          <ul>
            <li><a href="index.php"> HOME </a></li>
            <li><a href="quem_somos.php"> QUEM SOMOS </a></li>
            <li><a href="atividades.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> ATIVIDADES </a></li>
            <li><a href="contato.php"> CONTATOS </a></li>
          </ul>
        </nav>
        <div id="log">

       
        <div id="bloguinho" > <form  method="post" action="sairf.php?action=sair"><input type="submit"  value="sair"></Form></div>
        <div id="nloguinho"> <?php 
                  SESSION_START(); 
	                echo $_SESSION['usuario'];
              ?>
         </div>
        </div>
    
   </header> 
</div>
<article>
  <div id="cativ">
  <a href="evento.php"> <div class="ativ"><img src="img/trilhamorroda urca.jpg"><p class="evento"> Data:15/01/2023 <br>
                                                                                         Horario de inicio - 9:00<br>
                                             Local de encontro: Praia Vermelha(Urca)</p></a></div>




   <div class="ativ"></div>
   <div class="ativ"></div>
   <div class="ativ"></div>
   <div class="ativ"></div>
   <div class="ativ"></div>
 </div>
</article>

<div id="r1">

</div>
<div id="r2">
  <p>Contatos</p>
  <br><br><br><br>
  <h3>Trilheiros extremos<br>Tel (21) 985747278</h3>
  <br>
  <ul>
    <li><img src="img/facebook.png"> </li>
    <li><img src="img/instagram.png"></li>  
    <li><img src="img/115757-removebg-preview.png"></li>
    <li><img src="img/downloadsap.png"></li>
  </ul>
</div>
<div id="r3">
  <br>
  <font><p>Desenvolvido por Marcio Jose; Todos os direitos reservados </p> </font>
</div>
</body>
</html>