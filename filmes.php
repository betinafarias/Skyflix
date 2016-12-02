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
         
        <h3 class="center ">Filmes</h3><br>

        <?php
        //Switch de interfaces
        switch (($_POST['action'])) {
          case "":
?>
        <form action="" method="post" name="filmes">
          <table>
            <thead>
              <tr>
                  <th data-field="id">Código</th>
                  <th data-field="name">Título</th>
                  <th data-field="price">Categoria</th>
                  <th data-field="price">Excluir</th>
                  <th data-field="price">Alterar</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td><a class="cursor" onclick="document.filmes.action.value=''">Excluir</a></td>
                <td><a class="cursor" onclick="document.filmes.action.value='alterar_filme'; filmes.submit();">Editar</a></td>
              </tr>
            </tbody>
          </table>      
          <input type="hidden" name="action" value="">
        </form>

        <br><br>


        <form action="" method="post" name="filmes">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header teal lighten-2 white-text"><i class="material-icons">add</i>Adicionar filme</div>
              <div class="collapsible-body ">
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input id="titulo" type="text" class="validate">
                    <label for="titulo">Título</label>
                  </div>
                </div>
                <div class="row padding">
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Selecione uma categoria</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Categoria</label>
                  </div>
                </div>

                <div class="row padding center">
                    <a class="waves-effect waves-light btn-large">Cadastrar</a>
                </div>
                

              </div>
            </li>

          </ul>
        </form>





<?php
            break;

          case "novo_filme":
            # code...
            break;        

          case "alterar_filme":
            echo 'ALTERAR FILME';
?><br>

            <form method="post" name="alterar" action="">
              <br><Br>
              <a class="cursor back" onclick="document.alterar.action.value=''; alterar.submit();"><i class=" material-icons  light-blue-text">navigate_before</i>
               Voltar</a>
               <input type="hidden" name="action" value="">
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
