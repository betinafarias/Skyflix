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
         
        <h3 class="center ">Clientes</h3><br>

        <?php
        //Switch de interfaces
        switch (($_POST['action'])) {
        case "novo_filme":
          include('back-end/InserirCli.php');
          header('location:clientes.php');
          break;  
        case "excluir_cliente":
          include('back-end/remocaoCliente.php');
          header('location:clientes.php');
          break;  

        case "alterar":
        
         include('back-end/alteracaoCliente.php');
          //header('location:clientes.php');
          break; 

        case "":
?>

        <form action="" method="post" name="novo_filme">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header teal lighten-2 white-text"><i class="material-icons">add</i>Adicionar cliente</div>
              <div class="collapsible-body ">
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="cod_cliente" type="number" class="validate">
                    <label for="cod_cliente">Código</label>
                  </div>
                </div>              
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="nome_cliente" type="text" class="validate">
                    <label for="nome_cliente">Nome</label>
                  </div>
                </div>
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="endereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                  </div>
                </div>                
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="telefone" type="number" class="validate">
                    <label for="telefone">Telefone</label>
                  </div>
                </div>          

                <div class="row padding center">
                    <a onclick="novo_filme.submit();" class="waves-effect waves-light btn-large">Cadastrar</a>
                </div>
                <input type="hidden" name="action" value="novo_filme">

              </div>
            </li>

          </ul>
        </form>

        <br><br>




        <form action="" method="post" name="filmes">
          <table>
            <thead>
              <tr>
                  <th data-field="id">Código</th>
                  <th data-field="name">Nome</th>
                  <th data-field="price">Telefone</th>
                  <th data-field="price">Endereço</th>
                  <th data-field="price">Excluir</th>
                  <th data-field="price">Alterar</th>
              </tr>
            </thead>

            <tbody>
<?php
            include('back-end/MostrarCli.php');

           while($mostra_dados = mysql_fetch_array($pega_dados)){
             $cod_cliente = $mostra_dados['cod_cliente'];
             $nome_cliente = $mostra_dados['nome_cliente'];
             $telefone = $mostra_dados['telefone'];
             $endereco = $mostra_dados['endereco'];
?>

              <tr>
                <td><?=$cod_cliente?></td>
                <td><?=$nome_cliente?></td>
                <td><?=$telefone?></td>
                <td><?=$endereco?></td>
                <td><a class="cursor" onclick="document.filmes.action.value='excluir_cliente'; document.filmes.cod_cliente.value=<?=$cod_cliente?>; filmes.submit();">Excluir</a></td>
                <td><a class="cursor" onclick="document.filmes.action.value='alterar_cliente'; document.filmes.cod_cliente.value=<?=$cod_cliente?>; filmes.submit();">Editar</a></td>
              </tr>
<?php
           }
?>
            </tbody>
          </table>      
          <input type="hidden" name="action" value="">
          <input type="hidden" name="cod_cliente" value="">
        </form>

        <br><br>

<?php
            break;
      
          case "alterar_cliente":
            echo 'ALTERAR FILME';
?><br>

            <form method="post" name="alterar" action="">
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="cod_cliente" type="number" class="validate" value="<?=$_POST['cod_cliente']?>">
                    <label for="cod_cliente">Código</label>
                  </div>
                </div>              
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="nome_cliente" type="text" class="validate"  >
                    <label for="nome_cliente">Nome</label>
                  </div>
                </div>
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="endereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                  </div>
                </div>                
                <div class="row padding">
                  <div class="input-field col s12 padding">
                    <input name="telefone" type="number" class="validate">
                    <label for="telefone">Telefone</label>
                  </div>
                </div>  

                <div class="row padding center">
                    <a onclick="alterar.submit();" class="waves-effect waves-light btn-large">Alterar</a>
                </div>
                <input type="hidden" name="action" value="alterar">

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