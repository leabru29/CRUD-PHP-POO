<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;
use \App\Entidades\Usuario;

Login::requerDeslogar();

$alertaLogin = '';
$alertaCadastro = '';

if(isset($_POST['acao'])){
    switch ($_POST['acao']) {
        case 'logar':
            
            $obUsuario = Usuario::obterUsuarioPorEmail($_POST['email']);
            if (!$obUsuario instanceof Usuario || !password_verify($_POST['senha'],$obUsuario->password)) {
                $alertaLogin = 'O E-mail ou senha não conferem';
                break;
            }
            Login::logarUsuario($obUsuario);
        break;
        
        case 'cadastrar':
                $obUsuario = Usuario::obterUsuarioPorEmail($_POST['email']);
                if ($obUsuario instanceof Usuario) {
                    $alertaCadastro .= 'E-mail já cadastrado';
                    break;
                }
                $obUsuario = new Usuario;
                $obUsuario->nome = $_POST['nome'];
                $obUsuario->email = $_POST['email'];
                $obUsuario->senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
                $obUsuario->date = date('Y-m-d H:i:s');
                $obUsuario->cadastrar();
                Login::logarUsuario($obUsuario);
              
        break;
    }
}


include __DIR__.'/includes/header.php';

include __DIR__.'/includes/login-formulario.php';

include __DIR__.'/includes/footer.php';

?>