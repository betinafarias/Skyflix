<?php
 include "connect_Mysql.php";
 $nome_categoria = $_POST["nome_categoria"];
var_dump($_POST);


 $sql = "DELETE FROM categoria WHERE nome_categoria LIKE '$nome_categoria'";
 var_dump($sql);
            $resultado = mysql_query($sql);
            
 if($resultado == FALSE) {
   echo "Nenhum registro foi deletado...";
 } else {
      echo "Arquivo deletado com sucesso!<br /><br />";
 }

?>