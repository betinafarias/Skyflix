
<?php
  include "connect_Mysql.php";
  $pega_dados = mysql_query("SELECT nome_ator,cod_filme FROM ator");
  
  while($mostra_dados = mysql_fetch_array($pega_dados)){
         $nome_ator = $mostra_dados['nome_ator'];
         $cod_filme= $mostra_dados['cod_filme'];
         // Resultados na tela devem ser feitos aqui :D
     }

?>
