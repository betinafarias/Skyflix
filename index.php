<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Skyflix - O Sistema de locadora mais maneiro do Brasil</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo center">Skyflix</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>





  <div class="content container" style="margin-left: 400px;">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
         

          <?php
          if (!isset($_POST['action'])) {
            $_POST['action'] = "";
          }

          switch ($_POST['action']) {
            case "":
        ?>
            <h3 class="center ">Catálogo de filmes</h3><br>
            <b>Quantidade de filmes:</b> 
            <?php
            include('back-end/QtidadFilmes.php');
            ?>
<br>
<br>


            <div class="row">
            <form name="alugar" method="post" >
<?php

            include('back-end/MostrarFilm.php');
            while($mostra_dados = mysql_fetch_array($pega_dados)){
               $cod_filme = $mostra_dados['cod_filme'];
               $titulo  = $mostra_dados['titulo'];
               $nome_categoria= $mostra_dados['nome_categoria'];
?>
              <!-- CARD -->
              <div class="col m3">
                <div class="card  grey lighten-4 ">
                  <div class="card-content white-text center">
                    <span class="card-title light-blue-text"><?=$titulo?></span><br>
                    <i class="large material-icons  light-blue-text">movie</i>
                  </div>
                  <div class="card-content white center">
                      <b>(<?=$titulo?>)</b><BR><BR>
                      <b>ATORES:</b> Fulano, Cicrano Beltrano
                  </div>                  
                  <div class="card-action white center">
                      <a onclick="document.alugar.cod_filme.value=<?=$cod_filme?>; alugar.submit();" class="waves-effect waves-light btn">Alugar</a>
                  </div>
                </div>
              </div>
<?php
            }

?>
              <input type="hidden" name="cod_filme" value="" />
              <input type="hidden" name="action" value="alugar" />
            </form>


        <?php
              break;

            case 'salvar_aluguel':
                echo "salvarr";
              include('back-end/inserirLocacao.php');
              header('location:index.php');            
        ?>

        <?php
              break;        

            case 'alugar':
              $cod_filme = $_POST['cod_filme'];
        ?>

        <form name="locacao" method="post">
          <div class="row padding">
            <div class="input-field col s6">

              <select name="id_usuario">
                <option value="" disabled selected>Selecione um cliente</option>


<?php
                include('back-end/MostrarCli.php');

                 while($mostra_dados = mysql_fetch_array($pega_dados)){
                   $cod_cliente = $mostra_dados['cod_cliente'];
                   $nome_cliente = $mostra_dados['nome_cliente'];
                     ?>
                     <option value="<?=$cod_cliente?>"><?=$nome_cliente?></option>
                     
                     <?php
                 }                  
              
                ?>
              </select>
              <label>Cliente</label>
            </div>
          </div>

          <div class="row padding left">
              <input type="submit" value="Alugar" class="waves-effect waves-light btn-large ">

          </div>

          <input type="hidden" name="action" value="salvar_aluguel">
          <input type="hidden" name="id_filme" value="<?=$cod_filme?>">
        </form>

        <?php            
              break;      
            
            default:

              break;
          }

          ?>





        </div>
      </div>

    </div>

  </div>



  <?php
  include('nav.php');
  ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
     $(".button-collapse").sideNav();

  </script>


  </body>
</html>
