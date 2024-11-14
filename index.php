<?php
	
	//Definindo data e horario da região
	date_default_timezone_set('America/Sao_Paulo');
	//criando variavel que vai armazenar a conexão com o banco de dado inciando_a
	$pdo = new PDO('mysql:host=localhost;dbname=inciaindo_a','root','root');

	////Testando conexão
	if(isset($_POST['acao'])){
	//Pegando valores das variaveis do formulario a baixo
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	//Usando função do php para pegar data e horario
	$momento_registro = date('Y-m-d H:i:s');


	$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
	//inseriindo valores a partir dos dados do formulario
	$sql->execute(array($nome,$sobrenome,$momento_registro));
	
	//Se tudo ocorrer bem, então vai dar essa mensagem
	echo "Inserido com sucesso";
}
?>

//Formulario basico para pegar dados do Cliente
<!DOCTYPE html>
  <head>
    <title>Lista Clientes</title>
  </head>
  <body>
    	<form method="post">
    		
    			<input type="text" name="nome" required>
    			<input type="text" name="sobrenome" required>
    			<input type="submit" name="acao" value="Enviar">
    	</form>
  </body>
</html>

