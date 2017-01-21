<?php	
	/*Elementos do servidor*/
	$servidor = 'localhost';
	$usuario  = 'root';
	$senhaB   = '';

	/*Valores de entrada no banco*/
	$nomeHtml     = $_POST['nome'];
	$emailHtml    = $_POST['email'];
	$mensagemHtml = $_POST['mensagem'];
	$assuntoHtml  = $_POST['radio'];

	/*Elementos de um banco*/
	$banco  = 'wikimatica';
	$tabela = formcontato;

	/*Conexão*/
	$strcon       = mysqli_connect($servidor, $usuario, $senhaB, $banco) or die("Erro de conexão com o banco");
	echo("Conexão com o banco realizada com sucesso<br>");

	/*Inserção no de registro*/
	$sql          = "INSERT INTO $tabela (nome, email, mensagem, assunto) VALUES ";
	$sql         .= "('$nomeHtml', '$emailHtml', '$mensagemHtml', '$assuntoHtml')";
	mysqli_query($strcon,"SELECT * FROM $tabela");
	mysqli_query($strcon,$sql) or die("Erro ao cadastrar registro");
	echo "Cliente castrado com sucesso!";

	/*Encerramento*/
	$mysqli_close($strcon);
?>