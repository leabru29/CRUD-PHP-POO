<?php 

include __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Grupo');

use \App\Entidades\grupoProduto;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header("location:index.php?status=error");
    exit;
}

$obGrupo = grupoProduto::getGrupo($_GET['id']);

if (!$obGrupo instanceof grupoProduto) {
    header("location:index.php?status=error");
    exit;
}

if (isset($_POST['name-prod'],$_POST['statusProduto'])) {

	$obGrupo = new grupoProduto;

	$obGrupo->id = $_GET[id];
	$obGrupo->name = $_POST['name-prod'];
	$obGrupo->statusGrupo = $_POST['statusProduto'];

	$obGrupo->editar();

	header("location:index.php?status=success");
	exit;
	
}



include __DIR__.'/includes/header.php';

include __DIR__.'/includes/formulario.php';

include __DIR__.'/includes/footer.php';

?>