<?php
     include "connect_Mysql.php";
     $pega_dados = mysql_query("SELECT nome_ator,data_nasc FROM ator");
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
         $nome_ator = $mostra_dados['nome_ator'];
         $data_nasc  = $mostra_dados['data_nasc'];

         // Resultados na tela

     }

?>