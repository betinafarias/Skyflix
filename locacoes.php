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
        <div class="col s10">
         
        <h3 class="center ">Locações</h3><br>

        <form action="categorias.php" method="post" name="categorias">
          <table>
            <thead>
              <tr>
                  <th data-field="nome">Cliente</th>
                  <th data-field="excluir">Filme</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Nome cliente</td>
                <td>Filme</td>
              </tr>
            </tbody>
          </table>      
          <input type="hidden" name="action" value="">
          <input type="hidden" name="nome_categoria" value="">
        </form>

       
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
