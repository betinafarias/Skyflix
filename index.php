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
         
            <h3 class="center ">Catálogo de filmes</h3><br>


            <div class="row">
              <div class="col m3">
                <div class="card  grey lighten-4 ">
                  <div class="card-content white-text center">
                    <span class="card-title light-blue-text">Título filme</span><br>
                    <i class="large material-icons  light-blue-text">movie</i>
                  </div>
                  <div class="card-content white center">
                      <b>(COMÉDIA)</b><BR><BR>
                      <b>ATORES:</b> Fulano, Cicrano Beltrano
                  </div>                  
                  <div class="card-action white center">
                      <a class="waves-effect waves-light btn">Alugar</a>
                  </div>
                </div>
              </div>



            </div>


       
        </div>

      </div>

    </div>

  </div>


  <ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <h5>Menu</h5>
    </div></li>
    <li><div class="divider"></div></li><br>
    <li><a href="#!">Home</a></li>
    <li><a href="#!">Filmes</a></li>
    <li><a href="#!">Categorias</a></li>
    <li><a href="#!">Atores</a></li>
    <li><a href="#!">Clientes</a></li>

  </ul>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
     $(".button-collapse").sideNav();

  </script>


  </body>
</html>
