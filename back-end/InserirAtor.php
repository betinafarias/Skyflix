<?php
  include "connect_Mysql.php";
  $nome_ator = $_POST["nome_ator"];
  $data_nasc = $_POST["data_nasc"];
  $cod_filme = $_POST["cod_filme"];

  $query =mysql_query(" INSERT INTO ator (nome_ator,data_nasc,cod_filme)
                        VALUES('$nome_ator','$data_nasc','$cod_filme')");

  if($nome_ator == "") {
    echo "Campo ator n�o inserido!"
    }else if($data_nasc == "") {
      echo "Campo data_nasc n�o inserido!";
    } else if($cod_filme == "") {
      echo "Campo c�digo do filme n�o inserido!";
    } 

  if($query == TRUE) {
    echo "Dados inseridos no banco de dados";
  } else {
    echo "Erro ao inserir dados no banco!";
  }

?>


