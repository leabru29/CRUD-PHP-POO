<main>
	<section>
		
	</section>

	<h2 class="mt-4"><?php echo TITLE; echo ' <strong>'.$obGrupo->nome_grupo.'</strong>';?></h2>

	<form method="POST">
		
		<div class="form-group">
			<p>Deseja realmente excluir o grupo de produto </p>
		</div>

		<div class="form-group col-4">
        	<a href="index.php" class="btn btn-success">Voltar</a>
			<button type="submit" name="excluir-grupo" class="btn btn-danger">Excluir</button>
		</div>
	
	</form>
</main>