<?php

class Login {
     public static $user;

     public static function verificaLogin(){
          echo "O usuário ".self::$user." está logado.";
     }

     public function sairSistema(){
          echo "Usuário ".self::$user." Deslogou";
     }
}

Login::$user = 'Adm';
Login::verificaLogin();
echo "<br>";
$login = new Login();
$login->sairSistema();