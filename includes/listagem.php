<?php

$resultados = '';

$mensagem = '';

if (isset($_GET['status'])) {
	switch ($_GET['status']) {
		case 'success':
			$mensagem ='<div class="alert alert-success">Ação executada com sucesso!</div>';
		break;

		case 'error':
			$mensagem ='<div class="alert alert-danger">Erro ao executar a ação!</div>';
		break;
	}
}

foreach ($grupos as $grupo) {
	$resultados .='
	<tr>
		<th scope="row">'.$grupo->id.'</th>
		<td>'.$grupo->nome_grupo.'</td>
		<td>'.($grupo->ativo == 1 ? 'Ativo' : 'INATIVO').'</td>
		<td>
			<a href="editar.php?id='.$grupo->id.'" class="btn btn-primary">Editar</a>
			<a href="excluir.php?id='.$grupo->id.'" class="btn btn-danger">Excluir</a>
		</td>
	</tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
												   		<td colspan="4" class="text-center">Nenhum grupo encontrado</td>
												   </tr>';
unset($_GET['status']);
unset($_GET['pagina']);

$gets = http_build_query($_GET);

$paginacao = '';
$pages = $obPaginacao->getPagina();
foreach ($pages as $key => $pagina) {
	$class = $pagina['atual'] ? 'btn-primary' : 'btn-light';
	$paginacao .='<a href="?pagina='.$pagina['pagina'].'&'.$gets.'">
					<button class="btn '.$class.'" type="button">'.$pagina['pagina'].'</button>
				  </a>';
}
?>
<main>
	<section><?=$mensagem?></section>
	<section>
		<a href="cadastrar.php">
			<button class="btn btn-success mt-3">Novo</button>
		</a>
	</section>
	<section>
		<form method="GET">
			<div class="row mt-6">
				<div class="col-4">
					<input type="text" placeholder="Digite o nome do grupo" name="busca" class="form-control" value="<?=$busca?>"/>
				</div>
				<div class="col-3">
					<select class="form-select" name="filtroStatus">
						<option value="" selected>Ativo/Inativo</option>
						<option value="1" <?=$filtroStatus==1 ? 'selected' : ''?>>Ativo</option>
						<option value="0" <?=$filtroStatus==0 ? 'selected' : ''?>>Inativo</option>
					</select>
				</div>
				<div class="col-1 p-0">
					<button type="submit" class="btn btn-primary">Buscar</button>
				</div>
			</div>
		</form>
	</section>
	<section>
		<table class="table bg-light mt-3 table-striped">
			<thead>
				<tr>
					<th scope="col-1">#</th>
					<th scope="col-5">Nome Grupo</th>
					<th scope="col-1">Status</th>
					<th scope="col-2">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php echo $resultados; ?>
			</tbody>
		</table>
	</section>
	<section>
		<?=$paginacao?>
	</section>
</main>