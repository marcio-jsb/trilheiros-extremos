<?php
       if($_REQUEST["action"] == "sair")
	   {
       session_write_close();
	   header("Location:index.html");
	   }
?>