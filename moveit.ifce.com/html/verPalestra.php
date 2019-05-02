<?php
	session_start();

	//include_once('seguranca.php');
	if(isset($_GET['id'])){
    if(isset($res)){unset($res);}
 		include_once('conexao.php');
 		$sql = "SELECT * FROM palestras WHERE id = '{$_GET['id']}'";
 		$result = mysqli_query($con,$sql) or print mysql_error();
 		$res = mysqli_fetch_assoc($result);
    $np = mysqli_query($con,"SELECT users.nome,users.sobrenome, palestras.autor FROM users,palestras WHERE users.id = palestras.id_palestrante AND palestras.id =".$_GET['id']);
    $nomeP = mysqli_fetch_assoc($np);
    $nomePalestrante = $nomeP['autor']!="" ? $nomeP['autor'] : $nomeP['nome']." ".$nomeP['sobrenome'];


    $urlAnterior = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $a = "<a class='btn btn-primary btn-lg' role='button' href='cadastrar.php'>Inscreva-se</a>";
 		mysqli_close($con);
	}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include("metas.php");?>

    <title>MoveIT - Ver Palestra</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <?php include("customCss.php");?>
    <style type="text/css">
      #footerp{
        /*position: absolute;
        bottom: 0;
        width: 100%;*/
        margin-top: 5em
        
      }
    </style>
  </head>

  <body>
    <?php
      include('menu.php');
    ?>
    <div class="container">
      <!-- Portfolio Section -->
      <div id="palestra" class="row justify-content-md-center">
        <div class="jumbotron palestraJumb col-12 col-md-10">
          <h1 class="display-4"><?php echo $res['titulo']; ?></h1>
          <p class="lead">Facilitador(es): <?php echo $nomePalestrante; ?></p>
          <hr class="my-4">
          <p><?php echo $res['descricao'];?></p>
          <p class="lead">
           <?php echo $a;?>
          </p>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <?php include_once('footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
