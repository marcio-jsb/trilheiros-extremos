<html>
<head> <title>Trilheiros extremos</title>
<link rel="stylesheet" href="estilo.css" type="text/css" />
<meta charset="utf-8">
<link rel="icon" type="imagem/png" href="img/logocortada.png" width="50px" height="50px" />
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
/*Slider*/
#slider {overflow: hidden;}
#slider figure {position: relative;width: 625%;margin: 0;left: 0;animation: 20s slider infinite;}
#slider figure img {width: 16%;float: left;}

@keyframes slider {
	0% {left: 0;}
	20% {left: 0;}
	25% {left: -100%;}
	45% {left: -100%;}
	50% {left: -200%;}
	70% {left: -200%;}
	75% {left: -300%;}
	95% {left: -300%;}
	100%{left: -400%;}
}
#teste div{float:left;
           margin:15px;}
#teste{margin:o auto;}
figcaption{text-align: justify;
          }
          table {margin:0 auto;
       }
table td {width: 200px;
          text-align: center;}
		  #nloguinho{
	position:absolute;
	left:1210px;
	top:30px;
}
#nloguinho{
	position:absolute;
	left:1250px;
	top:40px;
}
#loguinho{
 position:absolute;
 top:40px;
 left:1160px;
}
input[type='submit']{
	width: 70px;
	background-color:#228B22;
	border-radius: 10px;
	
}
.evento{
	margin:15px;
 }  
.ativ {
     width: 200px;
	 height: 400px;
	 border: 2px solid black;
	 float: left;
	 margin: 20px;
	
	 background-image: linear-gradient(to bottom, white 70%, rgb(24, 183, 101) 30%);
	 


}
.cativ{
	position:absolute;
	left:20%;
	right:20%;

 } 
</style>
</head>

<body>

<div id="total">

<div id="topo">

      <div id="menu">
		<div id="logo">
		<a href="index.html">
		<img src="img/logotipo.png" width="110px" height="60px">
		</a>
        <p><h3>Trilheiros extremos</h3></p>
		</div>
		<div id="links">
		 <a href="index.php"> HOME </a>
		 <a href="quem_somos.php"> QUEM SOMOS </a>
		 <a href="servicos.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> SERVIÇOS </a>
		
		 <a href="contato.php"> CONTATOS </a>
      </div>
	  <form  method="post" action="sairf.php?action=sair"><input id="loguinho" type="submit"  value="sair"></Form>
	  <p id="nloguinho"><?php SESSION_START(); 
	        echo $_SESSION['usuario'];
		    
	  ?></p>
	  </div>
	  
	 
      <br><br><br><br><br><br><br><br>
      <div class="cativ">
       <a href="evento.php"><div class="ativ"><img src="img/trilhamorroda urca.jpg" width=100% ><p class="evento"> Data:15/01/2023 <br>
	                                                                                          Horario de inicio - 9:00<br>
																							  Local de encontro: Praia Vermelha(Urca)</p></div></a>
	   <div class="ativ"></div>
	   <div class="ativ"></div>
	   <div class="ativ"></div>
	   <div class="ativ"></div>
	   <div class="ativ"></div>
	  </div>
	  <br><BR><BR> 
		<br><BR><BR> 
			<br><BR><BR> 
				<br><BR><BR> 
					<br><BR><BR> 
						<br><BR><BR> 
							<br><BR><BR> 
								<br><BR><BR>
									<BR><BR><br>
       
	 <br><BR><BR> 
		<br><BR><BR> 
			<br><BR><BR> 
				<br><BR><BR> 
					<br><BR><BR> 
						<br><BR><BR> 
							<br><BR><BR>
								 <br><BR><BR>
         
	  <div id="r1">
	
	  </div>  
	  
	  <div id="r2">
	  <div id="txt">
	  <br>
	  <p>Contatos<br>
	 </p>
	  <h3>Trilheiros extremos<br>
	  Tel (21) 985747278</h3>
	  </div>
	   
		<li><br><img src="img/facebook.png" width="26px" height="26px"> 
	   	<img src="img/instagram.png" width="26px" height="26px">  
		<img src="img/115757-removebg-preview.png" width="26px" height="26px"> 
		<img src="img/downloadsap.png" width="26px" height="26px">  </li>
		  
	  </div>
	  	  
	  <div id="r3"> <font face="Roboto" color="#808080">
	  <p>Desenvolvido por Hypertech. © Copyright 2020; Todos os direitos reservados </p> </font>
	  </div>
	   	 
	 </div>
	 	 
</div>	 
</body>
</html>
