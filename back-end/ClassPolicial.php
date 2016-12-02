<?php
     include "connect_Mysql.php";

     $pega_dados = mysql_query("SELECT * FROM policial");
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
         $titulo  = $mostra_dados['titulo'];
         $nome_categoria= $mostra_dados['nome_categoria'];
         // Resultados na tela
     }
?>