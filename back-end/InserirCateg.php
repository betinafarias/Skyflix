<?php
     include "connect_Mysql.php";
     $nome_categoria = $_POST["nome_categoria"];

     $consulta =mysql_query(" INSERT INTO categoria (nome_categoria)
                        VALUES('$nome_categoria')");
     
    if($nome_categoria == "") {
        echo "Categoria em branco";
    }
    if($consulta == TRUE) {
             echo "Operaчуo realizada com sucesso!";
    } else {
             echo "Erro ao incluir os dados no BD";
    }

?>