<?php

$servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "skyflix";
            $conmy = @mysql_connect($servidor,$usuario,$senha);
            if($conmy == FALSE) {
              echo "Erro ao estabelecer conex�o com o mysql...";
            } else {
              echo "Conectado ao mysql...";
            }
            $conbd = @mysql_select_db($banco,$conmy);
            if($conbd == FALSE) {
              echo "<p><font color='red'>Erro ao tentar conectar ao BD...</font>";
            } else {
              echo "<p>Conex�o com o BD estabelecida!";
            }

?>


