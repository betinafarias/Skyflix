<?php
     include "connect_Mysql.php";
     $pega_dados = mysql_query("SELECT * FROM cliente");
     
     while($mostra_dados = mysql_fetch_array($pega_dados)){
         $cod_cliente = $mostra_dados['cod_cliente'];
         $nome_cliente = $mostra_dados['nome_cliente'];
         $telefone = $mostra_dados['telefone'];
         $endereco = $mostra_dados['endereco'];

         // Resultados na tela
     }

?>