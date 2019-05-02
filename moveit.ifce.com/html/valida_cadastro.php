<?php
	session_start();
	
	//Conexão
	include_once("conexao.php");

	//Arrumando variaveis
	$cargo = $_POST['cargo'];
	$credencial = $_POST['nivelAcesso'];
	if(($cargo=="Escolha")||($credencial=="Escolha")){
		$_SESSION['errorSignUp'] = "Selecione uma opção válida para Você é/Credencial";
		header("Location: cadastrar.php");
	}
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$nivelAcesso = ($credencial == 'Palestrante') ? 2 : 3;

	//Checando se email já foi cadastrado
	$sqlCheckEmail = "SELECT * FROM users WHERE email = '{$email}'";
	$query = mysqli_query($con,$sqlCheckEmail) or print mysql_error();
	if(mysqli_num_rows($query)>0){ 
        $_SESSION['errorSignUp'] = 'Ja existe um usuario cadastrado com este email';
        header("Location: cadastrar.php");
    }else{
    	$id = 0;
    	$result = mysqli_query($con,"SELECT id FROM users WHERE 1") or print mysql_error();

    	//Gerando id usuario
    	while($ids = mysqli_fetch_object($result)):
    		$ar = (array)$ids;
    		$aux = implode(",", $ar);
    		if($aux>$id){
    			$id = $aux;
    		}
    	endwhile;
    	$id++;

    	//Inserindo dados na tabela
    	$inserindoDados = mysqli_query($con,"INSERT INTO users VALUES ({$id},'{$nome}','{$sobrenome}','{$email}','','{$cargo}','{$nivelAcesso}')") or print mysql_error();

		$checaNaTabela = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'") or print mysql_error();
		if(mysqli_num_rows($checaNaTabela)>0){ 
	        $_SESSION['okSignUp'] = 'Cadastro efetuado com sucesso';
	        header("Location: cadastrar.php");
	    }
    }
?>