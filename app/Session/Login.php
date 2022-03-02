<?php


namespace App\Session;

class Login{

    private static function init(){
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();    
        }
    }

    public static function logarUsuario($obUsuario){
        self::init();
        $_SESSION['user'] = [
            'id'    => $obUsuario->id,
            'name'  => $obUsuario->name,
            'email' => $obUsuario->email
        ];

        header('location: index.php');
        exit;
    }

    public static function obterUsuarioLogado(){
        self::init();

        return self::estaLogado() ? $_SESSION['user'] : null;    
    }

    public static function estaLogado(){
        self::init();
        return isset($_SESSION['user']['id']);
    }

    public static function requerLogin(){
        if(!self::estaLogado()){
            header('location:login.php');
            exit;
        }
    }

    public static function deslogaUsuario(){
        self::init();
        session_destroy();

        header('location:login.php');
        exit;
    }

    public static function requerDeslogar(){
        if(self::estaLogado()){
            header('location:index.php');
        }
    }
}