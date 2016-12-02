<?php
    include "connect_Mysql.php";
    $cod_cliente = $_POST["cod_cliente"];
    $nome_cliente = $_POST["nome_cliente"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $query =mysql_query(" INSERT INTO cliente (cod_cliente, nome_cliente, telefone,endereco)
                        VALUES('$cod_cliente', '$nome_cliente', '$telefone','$endereco')");

    if($cod_cliente == "") {
       echo "Codigo cliente em branco";
    }else if($nome_cliente == "") {
       echo "Nome de cliente em branco";
    } else if($telefone == "") {
       echo "Telefone em branco";
    } else if($endereco == ""){
      echo "Endereco em branco";
    } else{
        if($query == TRUE) {
          echo "Cadastrado";
        } else {
          echo "Error";
        } 
    }

     
            
?>

