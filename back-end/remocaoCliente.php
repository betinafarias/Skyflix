 <?php
  include "connect_Mysql.php";
  $cod_cliente = $_POST["cod_cliente"];

  
  $sql = "DELETE FROM cliente WHERE cod_cliente = $cod_cliente";

  var_dump($sql);
  $resultado = mysql_query($sql);
  
  if($resultado == FALSE) {
    echo "Nenhum registro foi deletado...";
  } else {
    echo "Arquivo deletado com sucesso!";
  }
?>