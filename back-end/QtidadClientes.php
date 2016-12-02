<?php
     include "connect_Mysql.php";
     $resultado = mysql_query( "SELECT count(*) FROM cliente" );
     $array = mysql_fetch_array( $resultado );  // ==> Será só um resultado...

    //$array[0] retorna o resultado da qtd de clientes :D
?>