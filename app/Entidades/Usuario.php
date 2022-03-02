<?php


namespace App\Entidades;
use \App\Db\Database;
use \PDO;

class Usuario{
    public $nome;
    public $email;
    public $senha;
    public $date;

    public function cadastrar(){
        $obDatabase = new Database('users');
        $obDatabase->insert([
            'name'=>$this->nome,
            'email'=>$this->email,
            'password'=>$this->senha,
            'created_at'=>$this->date
        ]);

        return true;
    }

    public static function obterUsuarioPorEmail($email){
        return (new Database('users'))->select('email = "'.$email.'"',null,null)->fetchObject(self::class);
    }
}