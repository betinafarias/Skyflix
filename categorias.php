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

  <?php

  if (!isset($_POST['action'])) {
    $_POST['action'] = "";
  }

  ?>

  <div class="content container" style="margin-left: 400px;">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
         
        <h3 class="center ">Categorias</h3><br>

        <?php
        //Switch de interfaces
        switch (($_POST['action'])) {


        case "novo_categoria":
          include('back-end/InserirCateg.php');
          header('location:categorias.php');
          break;  


        case "excluir_categoria":
          include('back-end/remocaoCategoria.php');
          header('location:categorias.php');
          break;  



        case "":
?>

        <form action="" method="post" name="novo_categoria">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header teal lighten-2 white-text"><i class="material-icons">add</i>Adicionar categoria</div>
              <div class="collapsible-body ">             
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="nome_categoria" type="text" class="validate">
                    <label for="nome_categoria">Nome</label>
                  </div>
                </div>

                <div class="row padding center">
                    <a onclick="novo_categoria.submit();" class="waves-effect waves-light btn-large">Cadastrar</a>
                </div>
                <input type="hidden" name="action" value="novo_categoria">

              </div>
            </li>

          </ul>
        </form>

        <br><br>




        <form action="categorias.php" method="post" name="categorias">
          <table>
            <thead>
              <tr>
                  <th data-field="nome">Nome</th>
                  <th data-field="excluir">Excluir</th>
              </tr>
            </thead>

            <tbody>
<?php
            include('back-end/mostrarCat.php');


           while($mostra_dados = mysql_fetch_array($pega_dados)){
               $nome_categoria= $mostra_dados['nome_categoria'];
?>

              <tr>

                <td><?=$nome_categoria?></td>
                <td><a class="cursor" onclick="document.categorias.action.value='excluir_categoria'; document.categorias.nome_categoria.value='<?=$nome_categoria?>'; categorias.submit();">Excluir</a></td>
              </tr>
<?php
           }

?>
            </tbody>
          </table>      
          <input type="hidden" name="action" value="">
          <input type="hidden" name="nome_categoria" value="">
        </form>

        <br><br>

<?php
            break;

                  
          
          default:
            # code...
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


     (function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('select').material_select();

  }); // end of document ready
})(jQuery); // end of jQuery name space

  </script>


  </body>
</html>
