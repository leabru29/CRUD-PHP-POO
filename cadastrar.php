<?php 

include __DIR__.'/vendor/autoload.php';

define('TITLE','Novo Grupo');

use \App\Entidades\grupoProduto;

$obGrupo = new grupoProduto;

if (isset($_POST['name-prod'],$_POST['statusProduto'])) {

	$obGrupo->name = $_POST['name-prod'];
	$obGrupo->statusGrupo = $_POST['statusProduto'];

	$obGrupo->cadastrar();

	header("location:index.php?status=success");
	exit;
	
}



include __DIR__.'/includes/header.php';

include __DIR__.'/includes/formulario.php';

include __DIR__.'/includes/footer.php';

?>