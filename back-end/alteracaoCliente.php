<?php
  include "connect_Mysql.php";
  $cod_cliente = $_POST["cod_cliente"];
  $consulta = mysql_query ("SELECT * FROM cliente WHERE cod_cliente = $cod_cliente;");

  if($consulta == false) {
    echo "Cliente não existe!";
    include "AlteraCli.php";

  } else {
    while($camp =@mysql_fetch_array($consulta)){
      $cod_cliente = $camp["cod_cliente"];
      $nome_cliente = $camp["nome_cliente"];
      $telefone = $camp["telefone"];
      $endereco = $camp["endereco"];
    }
  }
  print(mysql_error());     //mysql_error ->  Retorna o texto da mensagem de erro da operação anterior do MySQL

  //A logica de dados a serem exibidos deve ser feita aqui :D
?>
