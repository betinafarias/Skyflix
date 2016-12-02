<?php
     include "connect_Mysql.php";
     $pega_dados = mysql_query("SELECT titulo FROM filmes");
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
         $titulo  = $mostra_dados['titulo'];

         // Resultados na tela
     }
?>