<?php 

include __DIR__.'/vendor/autoload.php';
use \App\Session\Login;
Login::requerLogin();

define('TITLE','Excluir grupo');

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

if (isset($_POST['excluir-grupo'])) {
	
	$obGrupo->excluir();

	header("location:index.php?status=success");
	exit;
	
}



include __DIR__.'/includes/header.php';

include __DIR__.'/includes/confirmar-exclusao.php';

include __DIR__.'/includes/footer.php';

?>