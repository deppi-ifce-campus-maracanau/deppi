<?php
	session_start();

	//Não exibe notices
	error_reporting(0);
	ini_set(“display_errors”, 0 );

  //Exibe notices
 // error_reporting(E_ALL);
  //ini_set(“display_errors”, 1 );
	//include_once('seguranca.php');
	//include_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include("metas.php");?>

    <title>MoveIT - Início</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/standardv4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>

  <body>

    <?php
      include('menu.php');
    ?>

 

    <!-- Page Content -->
    <!--<div class="container">
      <h2>Minhas Palestras</h2>

      <div class="row">
      	<?php //listarPalestras();?>
      </div>
    </div>-->

    <div id="apresentacao" class="carousel slide" data-ride="carousel" data-pause="false">
    	<div class="carousel-inner">
    		<div class="carousel-item active">
    			<img class="d-block w-100" src="imgs/apresentacao/banner1.png" alt="First slide">
    		</div>
    		<div class="carousel-item">
        		<img class="d-block w-100" src="imgs/apresentacao/banner2.png" alt="Second slide">
        	</div>
    	</div>
    </div>
    <div id="moveitIndex" class="container">
    	<p id="descricaoMVT">Participe do <span class="strong">2º Movimento de Empreendedorismo e Inovação Tecnológica</span>  do IFCE Campus Maracanaú e dê o primeiro passo em direção ao sucesso! </p>
	   	<ul>	
	    	<li><p class="questMVT">O que é o "MOVEIT"?</p></li>
	    	<p class="answeMVT">É um evento sediado no IFCE Campus Maracanaú que ocorrerá no dia 23 de maio.Seu objetivo é <span class="strong">desepertar</span> e <span class="strong">impulsionar</span> o espírito empreendedor e inovador na comunidade acadêmica <span class="strong">apoiar</span> ideias de negócios sustentáveis.</p>
	    	<li><p class="questMVT">Mas o que verei nesse evento?</p></li>
	    	<p class="answeMVT">Haverá <span class="strong">palestras</span>, e <span class="strong">mesa redonda</span> com o tema <span class="strong">cidades inteligentes</span> ao longo do dia, todas ministradas por autoridades no assunto.</p>
	    	<li><p class="questMVT">E quem pode participar do evento?</p></li>
	    	<p class="answeMVT">Qualquer pessoa que tenha interesse ou curiosidade no assunto. <span class="strong">Não perca tempo e <a href="https://www.even3.com.br/moveit">inscreva-se</a></span></p>
    	</ul>
    </div>
    <div id="programacao" style="text-align: center;">
    	<p class="titleProg">Programação</p>
    	<div class="container">
	    	<div id="headerProg" class="row align-items-center">
          <div class="col">Horários</div>
	    		<div class="col">Quinta-feira</div>
	    	</div>
	    	<div class="row align-items-center bodyProg preAlmocoProg zebra1">
          <div id="hora" class="col">09:00 - 10:00</div>
          <div class="col">Abertura - Palestra: Enactus e catavento </div>
        </div>
            
	    	<div class="row align-items-center bodyProg preAlmocoProg">
	    		<div id="hora" class="col">10:00 - 11:00</div>
	    		<div class="col">Seletiva Hacktoon</div>
        </div>
        
        <div class="row align-items-center bodyProg preAlmocoProg">
	    		<div id="hora" class="col">11:00 - 12:00</div>
	    		<div class="col">Palestra: Marketing Digital</div>
	    	</div>
	    
	    	<div class="row align-items-center bodyProg almocoProg">
	    		<div class="col">12:00</div>
	    		<div class="col">Almoço</div>
        </div>
        
	    	<div class="row align-items-center bodyProg posAlmocoProg">
	    		<div id="hora" class="col">13:30 - 14:30</div>
	    		<div class="col">Palestra: APM Terninals</div>
        </div>
        
	    	<div class="row align-items-center bodyProg posAlmocoProg">
	    		<div id="hora" class="col">14:30 - 15:30</div>
	    		 <div class="col">Final do Hacktoon</div>
        </div>
        
	    	<div class="row align-items-center bodyProg posAlmocoProg">
	    		<div id="hora" class="col">15:30 - 16:30</div>
          <div class="col">Mesa Redonda: Fortalecendo Ações para um Campus Inteligente</div>
        </div>

        <div class="row align-items-center bodyProg posAlmocoProg">
	    		<div id="hora" class="col">16:30 - 17:30</div>
          <div class="col">Homenangens e encerramento</div>
        </div>

        <div class="row align-items-center bodyProg encerramentoProg">
	    		<div id="hora" class="col">17:30 - 19:00</div>
          <div class="col">Festa Junina Enactus</div>
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