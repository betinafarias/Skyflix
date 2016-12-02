<?php
     include "connect_Mysql.php";
     $pega_dados = mysql_query("SELECT * FROM filmes");
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
         $cod_filme = $mostra_dados['cod_filme'];
         $titulo  = $mostra_dados['titulo'];
         $nome_categoria= $mostra_dados['nome_categoria'];


         // Resultados na tela

?>