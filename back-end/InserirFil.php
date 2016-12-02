<?php
  include "connect_Mysql.php";
  $cod_filme = $_POST["cod_filme"];
  $titulo = $_POST["titulo"];
  $nome_categoria = $_POST["nome_categoria"];

  $query =mysql_query(" INSERT INTO filmes (cod_filme, titulo, nome_categoria)
                        VALUES('$cod_filme', '$titulo','$nome_categoria')");

  if($cod_filme == "") {
    echo "Codigo do filme em branco";
  }else if($titulo == "") {
    echo "Titulo em branco";
  } else if($nome_categoria == "") {
    echo "Categoria em branco";
  } else {

    if($query == TRUE) {
      echo "Inserido com sucesso";
      
    } else {
      echo "Erro na inserção";
    }
  }
?>

