
   

<?php
    include("conexaos.php");
   
	$nome = $_POST["nome"];
	$data_nasc = $_POST["data_nasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$endereco = $_POST["endereco"];
	$estado = $_POST["estado"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];
	
	$result_cli = "INSERT INTO cliente(nome, data_nasc, rg, cpf, endereco, estado, email, telefone,usuario,senha) 
					VALUES ('$nome', '$data_nasc', '$rg', '$cpf', '$endereco', '$estado', '$email', '$telefone','$usuario','$senha')";
    $resultado_cli = mysqli_query($conn, $result_cli);
    
    if(mysqli_affected_rows($conn) != 0){
         echo  '<script>alert("Cadastro realizado com sucesso")</script>';
        
 
            }else{
               
                echo '<script>alert("Erro ao cadastrar")</script>';       
                  
            }

 ?>
 
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <link rel="stylesheet" href="text_index.css" type="text/css">
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
            <li><a href="index.html" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> HOME </a></li>
            <li><a href="quem_somos.html"> QUEM SOMOS </a></li>
            <li><a href="atividades.html"> ATIVIDADES </a></li>
            <li><a href="contato.html"> CONTATOS </a></li>
          </ul>
        </nav>
        <div id="log">
            <a href="log.php"><img src="img/loguinho-removebg-preview.png"></a>
        </div>
    
   </header> 
</div>
<div id="banner">
   	
	<div id="slider">
			<figure>
                <img src="img/morro_caete.jpg">
                <img src="img/pedra_gavea.jpg">
                <img src= "img/pedra-branca-vista-do.jpg">
                <img src= "img/do-topo-da-pedra-do-quilombo-em-jacarepagua-rio-de-janeiro_63139-635.jpg">
                <img src="img/Pedra_Bonita.jpg">
			</figure>
	</div>

	<script>
		var myIndex=0
		carousel();
		
		function carousel(){
		var i;
		var x= document.getElementsByClassName("mySlides");
		for(i=0;i < x.length; i++){
		  x[i].style.display ="none";
		}
		myIndex++;
		if(myIndex > x.length) {myIndex=1}
		x[myIndex-1].style.display = "block";
		setTimeout(carousel, 4000);//Change image every 0,10 seconds	 
		
		}
	</script>
</div>
<article>
<div class="text"><figure><img  src="img/trilha_papagaio.jpg"><figcaption><h3>Pico do Bico do Papagaio</h3>A trilha Trilha do Bico do Papagaio fica na cidade de Rio de Janeiro, no estado de Rio de Janeiro e possui uma dificuldade baixa e exposição ao risco baixa. Possui uma altitude máxima de 987 metros e leva cerca de horas para ser completada ao longo de 3.35 quilômetros. A sinalização interna é completa e a orientação é fácil.</figcaption></figure></div>
<div class="text"><figure><img src="img/Roteiro-da-trilha-da-Cachoeira-dos-Primatas-Horto-RJ-Vamos-Trilhar-1-768x432.jpg"><figcaption>No Horto Florestal do Rio de Janeiro existem diversas cachoeiras. Uma das principais é a Cachoeira dos Primatas. Em época de chuva, suas águas do Rio Algodão possuem um ótimo volume de água, fazendo ela ser uma das mais belas cachoeiras da cidade.</figcaption></figure></div>
<div class="text"><figure><img src="img/pico_tijuca.jpg"><figcaption>A trilha Pico da Tijuca é o passeio e aventura ideal para quem quer visitar o interior do Parque Nacional da Tijuca e conhecer a Mata Atlântica da Floresta da Tijuca.No passeio da trilha Pico da Tijuca os participantes terão acesso a história da Floresta da Tijuca, que é protegida desde meados do século XIX, preservando tesouros históricos da época do Brasil Colonial e uma série de riquezas e belezas naturais. O Pico da Tijuca possui 1.021m de altitude e está localizado no coração do Parque Nacional da Tijuca e é a maior montanha da Floresta da Tijuca. O roteiro do Pico da Tijuca é considerado um dos mais ricos e belos passeios de trilhas no Rio de Janeiro. O passeio começa no portão de entrada do parque e passa por várias seções de caminhadas pela floresta até chegarmos ao cume do Pico Tijuca Mirim e do Pico da Tijuca</figcaption></figure></div>
</article>
<div class="textum"><p>Fazer uma trilha é um tipo de exercício muito recomendado para quem quer ter hábitos de vida mais saudáveis.O trekking, ou as caminhadas de longa duração, são atividades aeróbicas muito seguras, e por isso podem ser praticadas por qualquer pessoa. E o melhor de tudo: são feitas na Natureza! Por isso, além de ser uma forma muito prazerosa de estar em movimento, também proporciona uma sensação de paz e tranquilidade. Uma ótima escolha não só para a saúde física como também para a mental Existem trilhas para todos níveis de dificuldades, desde caminhadas bem leves até grandes expedições. Se você não tem o hábito de caminhar em trilhas, é melhor começar com atividades mais fáceis.Isso significa que é importante escolher uma trilha com pouco desnível altimétrico (ou seja, poucas ladeiras!), e em um terreno pouco acidentado. Ainda não é hora de querer enfrentar longas jornadas, travessias de rios ou lugares muito isolados. Aqui a ideia é curtir a paisagem, fazer um pic-nic e desfrutar deste contato único com a natureza</p></div>
<fieldset>
<legend>VIDEOS</legend>
<iframe width="400" height="400" src="https://www.youtube.com/embed/gJztRJQaMG8" title="Monte Zion (videoclipe) - Ilha Grande.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="400" height="400" src="https://www.youtube.com/embed/4vSGGEpJc6c" title="A HISTÓRIA do PARQUE NACIONAL DA TIJUCA, no Rio de Janeiro | Reflorestamento e Curiosidades" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="400" height="400" src="https://www.youtube.com/embed/ssmXr82Q384" title="PARQUE ESTADUAL DA PEDRA BRANCA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<iframe width="400" height="400" src="https://www.youtube.com/embed/DqVP36wj_WU" title="TRILHA SERRA DO VULCÃO l  Nova Iguaçu, RJ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</fieldset>
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