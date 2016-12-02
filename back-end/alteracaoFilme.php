<?php
  include "connect_Mysql.php";
  $cod_filme = $_POST["cod_filme"];
  $consulta = mysql_query ("SELECT * FROM filmes WHERE cod_filme = $cod_filme;");

  if($consulta == false) {
    include "AlteraFil.php";
  } else {
    while($camp =@mysql_fetch_array($consulta)){
      $cod_filme= $camp["cod_filme"];
      $titulo = $camp["titulo"];
      $nome_categoria = $camp["nome_categoria"];
    }
  }
  
  print(mysql_error());     //mysql_error ->  Retorna o texto da mensagem de erro da operaчуo anterior do MySQL

  //A logica dos dados щ aqui :D
?>