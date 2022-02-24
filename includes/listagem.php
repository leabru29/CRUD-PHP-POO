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

?>
<main>
	<section><?=$mensagem?></section>
	<section>
		<a href="cadastrar.php">
			<button class="btn btn-success mt-3">Novo</button>
		</a>
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
</main>