

<?php
    include("conexaosl.php");
   
	$nome = $_POST["nome"];
	$email = $_POST["email"];

	
	$result_cli = "INSERT INTO evento(nome,email) 
					VALUES ('$nome', '$email')";
    $resultado_cli = mysqli_query($mysqli, $result_cli);
    
    if(mysqli_affected_rows($mysqli) != 0){
        header("Location:evento.php");
            }else{
                echo "Erro ao cadastrar";
                    
                  
            }
			
?>