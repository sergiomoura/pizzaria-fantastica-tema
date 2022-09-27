<?php
	require('../validadores.php');
	$nomeOk = true;
	$emailOk = true;
	$senhaOk = true;
	$confOk = true;

	if($_POST){

		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		// Validar o campo NOME
		$nome = $_POST['nome'];
		$nomeOk = validaNome($nome);

		// Se tudo estiver bem, IR ADIANTE!
		if($nomeOk) {
			echo("VOU SALVAR AS INFO!!!");
			die();
		}

	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
	<link rel="stylesheet" href="../assets/css/nav-adm.css">
    <nav id="nav-adm">
        <div>
            Pizzaria Fantástica
            <span>
                Área Administrativa
            </span>
        </div>
        <ul>
            <li><a href="/pedidos">Pedidos</a></li>
            <li><a href="/clientes">Clientes</a></li>
            <li><a href="/pizzas">Pizzas</a></li>
            <li class="selected"><a href="/users">Usuários</a></li>
            <li><a href="/adm/logout">Sair</a></li>
        </ul>
    </nav>
	<link rel="stylesheet" href="../assets/css/form-usuario.css">
	<form id="form-usuario" method="POST" action="" enctype="multipart/form-data">
		<label>
			Foto:
			<img src="../assets/img/no-image.png">
			<div>Clique para selecione nova imagem</div>
			<input type="file" name="img" id="img">
		</label>
		
		<div class="campos">
			<label>
				Nome:
				<input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário">
				<?= ($nomeOk ? '' : '<span>Insira um nome válido</span>');  ?>
			</label>
		
			<label>
				E-mail:
				<input type="email" name="email" id="email" placeholder="Digite e-mail do usuário">
			</label>
		
			<label>
				Senha:
				<input type="password" name="senha" id="senha" placeholder="Digite a senha">
			</label>
		
			<label>
				Confirme a Senha:
				<input type="password" name="conf" id="conf" placeholder="Confirme a senha do usuário">
			</label>

			<button type="submit">Salvar</button>
		</div>
	</form>

</body>
</html>