 <?php
  include "connect_Mysql.php";
  $cod_cliente = $_POST["cod_cliente"];
  $consulta =mysql_query("SELECT cod_cliente FROM cliente WHERE cod_cliente = $cod_cliente");
  
  if($consulta == TRUE) {
    foreach($_POST as $valor) {
      echo $valor;
    }
  }
  
  $sql = "DELETE FROM cliente WHERE cod_cliente = $cod_cliente";
  $resultado = mysql_query($sql);
  
  if($resultado == FALSE) {
    echo "Nenhum registro foi deletado...";
  } else {
    echo "Arquivo deletado com sucesso!";
  }
?>