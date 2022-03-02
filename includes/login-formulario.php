<?php 

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';
$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">'.$alertaCadastro.'</div>' : '';

?>
<main>
	
	<h2 class="mt-4 bold">Login</h2>
	
	<div class="row mt-5">
		<div class="col">
			<h2>Entrar</h2>
			<form method="POST">
				<?=$alertaLogin?>
				<div class="form-group">
					<label>E-mail</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary mt-2" type="submit" name="acao" value="logar">Logar</button>
				</div>
			</form>
		</div>
		<div class="col">
			<h2>Cadastre-se</h2>
			<form method="POST">
			<?=$alertaCadastro?>
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control" required>
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary mt-2" type="submit" name="acao" value="cadastrar">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</main>