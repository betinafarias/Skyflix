<?php
     include "connect_Mysql.php";
     $resultado = mysql_query( "SELECT count(*) FROM filmes" );
     $array = mysql_fetch_array( $resultado );  // ==> Ser� s� um resultado...
     
     $array[0]; // total de filmes :D

?>