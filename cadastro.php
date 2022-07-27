<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" width="device-width initial-scale-1.0">
	<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
	<title>Teste de Nivelamento</title>
</head>
<body>
	<h1>Cadastro de usuários</h1>
	<form method="POST" action="resultado.php">
		<h2>Informações pessoais:</h2>
			<p>Digite seu Nome Completo: <input type="text" name="nome" placeholder="Nome completo"></p>
			<p>Digite seu CPF:<input type="text" name="cpf" placeholder="Digite seu CPF"></p>
			<p>Informe sua data de nascimento: <input type="date" name="nascimento"></p>
			<p>Informe seu gênero:<select name="gênero" placeholder="Escolha uma opção:">
					<option value="ND">Escolha uma opção:</option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
					<option value="ND">Não declarado</option>
				</select></p>
		<h2>Dados de Contato:</h2>
			<p>Informe seu endereço: <input type="text" name="endereco" placeholder="Endereço"></p>
			<p>Informe seu CEP: <input type="text" name="cep" placeholder="CEP"></p>
			<p>Infome seu endereço de E-Mail: <input type="text" name="email" placeholder="Melhor e-mail"></p>
			<p>Informe seu telefone: <input type="text" name="telefone" placeholder="Telefone para contato"></p>
			<input type="submit" value="enviar">
	</form>
</body>
</html>