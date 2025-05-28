<?php
$mysqli = new mysqli("localhost", "root", "", "trilheiros");
$sql = "SELECT * FROM evento";
$result = mysqli_query($mysqli, $sql);
$cont = mysqli_num_rows($result);

session_start();
$nome =   $_SESSION['nome'];
$email =   $_SESSION['email'];

if ($cont < 6 ) {

  $mysqli->query("insert into evento(nome , email)
values ( '$nome', '$email')");
  header("Location:evento.php");
} else {
  echo '<script>alert("limite de participante atingido")</script>';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilophp.css" type="text/css">
  <link rel="stylesheet" href="evento.css" type="text/css">
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
          <li><a href="index.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> HOME </a></li>
          <li><a href="quem_somos.php"> QUEM SOMOS </a></li>
          <li><a href="atividades.php"> ATIVIDADES </a></li>
          <li><a href="contato.php"> CONTATOS </a></li>
        </ul>
      </nav>
      <div id="log">


        <div id="bloguinho">
          <form method="post" action="sairf.php?action=sair"><input type="submit" value="sair"></Form>
        </div>
        <div id="nloguinho"> <?php
                              SESSION_START();
                              echo $_SESSION['usuario'];
                              ?>
        </div>
      </div>

    </header>
  </div>


  <div class="areaevento">
    <h1>
      <center> Participantes </center>
    </h1>
    <table width="500" border="1" align="center">
      <thead>
        <tr>
          <th>NOME</th>
          <th>EMAIL</th>
        </tr>
      </thead>
      <?php
      while ($L = mysqli_fetch_array($query)) {
        $nome       = $L["nome"];
        $email      = $L["email"];

        echo "<tbody>
           <tr>
            <td>$nome</td>
            <td>$email</td>
           </tr>
          </tbody>\n";
      }
      ?>
    </table>
  </div>
  <p class="participar"><a href="formevento.php">Participar</a></p>


</body>

</html>