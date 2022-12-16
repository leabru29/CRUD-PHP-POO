<?php

namespace App\Entidades;

use \App\Db\Database;
use \PDO;

class grupoProduto{
	public $id;
	
	public $name;

	public $statusGrupo;

	public function cadastrar(){
		$obDatabase = new Database('grupo_produto');
		$obDatabase->insert([
								'nome_grupo'=> $this->name,
								'ativo'		=> $this->statusGrupo
							]);
		return true;

	}

	public static function getGrupos($where = null, $order = null, $limit = null){
		return (new Database('grupo_produto'))->select($where,$order,$limit)
											  ->fetchAll(PDO::FETCH_CLASS,self::class);
	}

	public static function getQuantidadeGrupos($where = null, $order = null, $limit = null){
		return (new Database('grupo_produto'))->select($where,$order,$limit,'COUNT(*) as qtd')
											  ->fetchObject()
											  ->qtd;
	}

	public static function getGrupo($id){
		return (new Database('grupo_produto'))->select('id = '.$id,null,null)->fetchObject(self::class);
	}

	public function editar(){
		
		return (new Database('grupo_produto'))->update('id='.$this->id,[
																			'nome_grupo'=> $this->name,
																			'ativo'		=> $this->statusGrupo
																		]);
		
	}

	public function excluir(){
		return (new Database('grupo_produto'))->delete('id='.$this->id);
	}
}