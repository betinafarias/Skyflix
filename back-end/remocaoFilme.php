<?php
 include "connect_Mysql.php";
 $cod_filme = $_POST["cod_filme"];
 $consulta =mysql_query("SELECT cod_filme FROM filmes WHERE codigo = $cod_filme");
 
 if($consulta == TRUE) {
   foreach($_POST as $valor) {
      echo $valor;
   }
 }
 
 $sql = "DELETE FROM filmes WHERE cod_filme = $cod_filme";
            $resultado = mysql_query($sql);
            
 if($resultado == FALSE) {
   echo "Nenhum registro foi deletado...";
 } else {
      echo "Arquivo deletado com sucesso!<br /><br />";
 }

?>