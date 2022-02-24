<main>
	<section>
		<a href="index.php">
			<button class="btn btn-success">Voltar</button>
		</a>
	</section>

	<h2 class="mt-4"><?=TITLE?></h2>

	<form method="POST">
		
		<div class="form-group">
			<label>Nome Grupo de Produto</label>
			<input type="text" class="form-control" name="name-prod" value=<?=$obGrupo->nome_grupo?>>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-select form-select-lg mb-3" name="statusProduto">
			  <option selected value="1">Ativo</option>
			  <option value="0" <?=$obGrupo->ativo == 0 ? 'selected' : ''?>>Inativo</option>
			</select>
		</div>

		

		<div class="form-group col-4">
			<button type="submit" class="btn btn-success">Cadastrar</button>
		</div>
	
	</form>
</main>