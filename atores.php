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
			
			  <?php
        //Switch de interfaces
        switch (($_POST['action'])) {
        case "novo_ator":
          include('back-end/InserirAtor.php');
          header('location:atores.php');
          break;  
        case "excluir_ator":
          include('back-end/remocaoAtor.php');
          header('location:atores.php');
          break;
?>

  <form action="" method="post" name="novo_ator">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header teal lighten-2 white-text"><i class="material-icons">add</i>Adicionar Ator</div>
              <div class="collapsible-body ">
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="novo_ator" type="number" class="validate">
                    <label for="novo_ator">Nome</label>
                  </div>
                </div>              
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="titulo" type="text" class="validate">
                    <label for="titulo">Nome</label>
                  </div>
                </div>
                <div class="row padding">
                  <div class="input-field col s12">

                    <select name="novo_ator">
                      <option value="" disabled selected>Selecione uma categoria</option>
   <?php
                      include('back-end/mostrarAtor.php');
                       while($mostra_dados = mysql_fetch_array($pega_dados)){
                           $nome_ator= $mostra_dados['novo_ator'];
                           ?>
                           <option value="<?=$nome_ator?>"><?=$nome_ator?></option>
                           
                           <?php
                       }                  
                                    
                      ?>
                    </select>
                    <label>Categoria</label>
                  </div>
                </div>
				
				<div class="row padding center">
                    <a onclick="novo_ator.submit();" class="waves-effect waves-light btn-large">Cadastrar</a>
                </div>
                <input type="hidden" name="action" value="novo_ator">

              </div>
            </li>

          </ul>
        </form>

        <br><br>
		
		 <form action="" method="post" name="atores">
          <table>
            <thead>
              <tr>
                  <th data-field="id">Nome</th>
                  <th data-field="name">Info</th>
                  <th data-field="price">Categoria</th>
                  <th data-field="price">Excluir</th>
                  <th data-field="price">Alterar</th>
              </tr>
            </thead>

            <tbody>
			
			<?php
            include('back-end/MostrarAtor.php');
           while($mostra_dados = mysql_fetch_array($pega_dados)){
               $nome_ator = $mostra_dados['nome_ator'];
               $data_nasc = $mostra_dados['data_nasc'];
               $cod_filme= $mostra_dados['cod_filme'];

}
?>

<tr>
                <td><?=$nome_ator?></td>
                <td><?=$data_nasc?></td>
                <td><?=$mostra_dados?></td>
                <td><a class="cursor" onclick="document.filmes.action.value='excluir_filme'; document.filmes.cod_filme.value=<?=$cod_filme?>; filmes.submit();">Excluir</a></td>
                <td><a class="cursor" onclick="document.filmes.action.value='alterar_filme'; document.filmes.cod_filme.value=<?=$cod_filme?>; filmes.submit();">Editar</a></td>
              </tr>


 </tbody>
          </table>      
          <input type="hidden" name="action" value="">
          <input type="hidden" name="novo_ator" value="">
        </form>

        <br><br>
		
<div class="row padding">
                  <div class="input-field col s12">

                    <select name="novo_ator">
                      <option value="" disabled selected>Selecione um ator</option>

                      <?php
                      include('back-end/mostrarAtor.php');
                       while($mostra_dados = mysql_fetch_array($pega_dados)){
                           $nome_ator= $mostra_dados['nome_ator'];
                           ?>
                           <option value="<?=$nome_ator?>"><?=$nome_categoria?></option>
                           
                       
					   
                    
                    </select>
					
					 <label>Categoria</label>
                  </div>
                </div>

                <div class="row padding center">
                    <a onclick="alterar.submit();" class="waves-effect waves-light btn-large">Alterar</a>
                </div>
                <input type="hidden" name="action" value="alterar">

              <br><Br>
              <a class="cursor back" onclick="document.alterar.action.value=''; alterar.submit();"><i class=" material-icons  light-blue-text">navigate_before</i>
               Voltar</a>

            </form>

          <br><br>



       
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
