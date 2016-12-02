 <?php
  include "connect_Mysql.php";
  $cod_cliente = $_POST["cod_cliente"];
   $nome_cliente = $_POST["nome_cliente"];
   $telefone = $_POST["telefone"];
   $endereco = $_POST["endereco"];
               
   $consulta = mysql_query( "UPDATE cliente SET cod_cliente='$cod_cliente'  nome_cliente='$nome_cliente',
   telefone='$telefone',endereco='$endereco'
    WHERE cod_cliente='$cod_cliente'");
    
   $verificacao = mysql_query($consulta) or die ("ERRO: " . mysql_error());
     if($verificacao==true) {
        echo "<p>Dados do Cliente alterados";
     }

       ?>