<?php 

require __DIR__.'/vendor/autoload.php';
use \App\Session\Login;
Login::requerLogin();
use \App\Entidades\grupoProduto;
use \App\Db\Paginacao;

$busca = filter_input(INPUT_GET,'busca',FILTER_SANITIZE_STRING);

$filtroStatus = filter_input(INPUT_GET,'filtroStatus',FILTER_SANITIZE_NUMBER_INT);
$filtroStatus = in_array($filtroStatus,['0','1']) ? $filtroStatus : '';

$condicoes = [
    strlen($busca) ? 'nome_grupo like "%'.str_replace(' ','%',$busca).'%"' : null,
    strlen($filtroStatus) ? 'ativo = '.$filtroStatus : null
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ',$condicoes);

$quatidadesGrupos = grupoProduto::getQuantidadeGrupos($where);

$obPaginacao = new Paginacao($quatidadesGrupos,$_GET['pagina'] ?? 1,2);

$grupos = grupoProduto::getGrupos($where,null,$obPaginacao->getLimite());

include __DIR__.'/includes/header.php';

include __DIR__.'/includes/listagem.php';

include __DIR__.'/includes/footer.php';

?>