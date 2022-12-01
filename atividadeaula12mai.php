<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de usuário</title>
	 <link rel="stylesheet" type="text/css" href="css2022.css">
</head>

<body>
	<div id="area">
    	<form method="POST" id="formulario" autocomplete="off">>
     	 <fieldset>
			<legend>Adicionando um novo usuário</legend>
			nome: <input type="text" name="nome"> <br>
			data de nascimento: <input type="date" name="nascimento"> <br>
			endereço: <input type="text" name="endereco"> <br>
			email: <input type="email" name="email"required>
			<br>
			salario: <input type="text" name="salario" > <br>
			escolaridade: <input type="text" name="escolaridade" > <br>
			login:<input type="login" name="login" > <br>
			senha:<input type="password" name="senha">
			<input type="submit" name="Enviar" value="Enviar">
		</fieldset>
	</form>
		
		<?php
			$conn = mysqli_connect("localhost", "root", "", "agenda");
			if ($conn) {
				$nome = $_POST["nome"];
				$nascimento = $_POST["nascimento"];
				$endereço = $_POST["endereco"];
				$email = $_POST["email"];
				$salario = $_POST["salario"];
				$escolaridade = $_POST["escolaridade"];
				$login = $_POST["login"];
				$senha = $_POST ["senha"];
				
				$sql = "INSERT INTO usuarios (nome, endereco , nascimento, email, salario, escolaridade, login, senha) VALUES ('$nome', '$endereço', '$nascimento', '$email', '$salario', '$escolaridade', '$login', '$senha' ) ";
				
				if (mysqli_query($conn, $sql)){
					echo ("Contato adicionado com sucesso!<br>");
				} else {
					// erro ao executar a consulta
					echo ("Erro: $sql <br>" . mysqli_error($conn) );
				}

				
				mysqli_close($conn);
			} else {
				echo ("Falha na conexão " . mysqli_connect_error() );
			} 
	?>
	
	
	</div>
	
</body>
</html>

