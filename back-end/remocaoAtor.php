 <?php
   include "connect_Mysql.php";
   $nome_ator = $_POST["nome_ator"];
   $consulta =mysql_query("SELECT * FROM ator WHERE nome_ator = $nome_ator");
   
   if($consulta == TRUE) {
      foreach($_POST as $valor) {
         echo $valor;
      }
   }
   
   $del= mysql_query("DELETE FROM ator WHERE nome_ator = $nome_ator");
   
   if($del == FALSE) {
      echo "Nenhum registro foi deletado...";
   } else {
      echo "Arquivo deletado com sucesso!<br /><br />";
   }

?>