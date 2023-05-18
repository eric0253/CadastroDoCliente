<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login - Etec Adolpho Berezin</title>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2426/2426727.png">
	<script src="https://kit.fontawesome.com/8cdb59b4ce.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="caixa">
       <div class="borda">
			<form action="cadastro.html" method="post" class="formulário">
			
			<img src="https://eteab.com.br/cms/wp-content/uploads/2019/11/LogoAB-final.png" alt="Logo da Etec">
			
			<h1>Etec Adolpho Berezin</h1>
			<p>Digite os seus dados de acesso no campo abaixo.</p>
			<br>
			<div class="login">
				<i class="fa fa-user-circle-o"></i>
				<label for="login">Login</label>
			</div>
			<input id="login" placeholder="Digite seu usuário, e-mail ou R.A" type="text" autofocus="true"/>
			
			<div class="senha">
				<i class="fas fa-lock"></i>
				<label for="senha">Senha</label>
			</div>
			<input id="senha" placeholder="Digite sua senha" type="text"/>
	
			<input type="submit" value="Acessar" class="botão" />
			<a href="/">Esqueci minha senha</a>
			<p>Ainda não possui uma conta?</p>
			<input type="submit" value="Cadastre-se" class="botão2" />
			</form>
		</div>
	</div>
    
</body>
</html>