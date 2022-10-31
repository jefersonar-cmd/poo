<?php
// Getters and Setters

class Login {
     private $email, $senha;

     public function getEmail () {
          return $this->email;
     }

     public function setEmail($e) {
          $email = filter_var($e, FILTER_SANITIZE_EMAIL);
          $this->email = $email;
     }

     public function getSenha () {
          return $this->senha;
     }

     public function setSenha($s) {
          $this->senha = $s;
     }

     public function Logar () {
          if($this->email == 'teste@teste.com' and $this->senha == '123') :
               echo 'Logado com sucesso';
          else :
               echo 'Dados inválidos';
          endif;
     }
}

$logar = new Login();
$logar->setEmail('teste()/@teste.com');
$logar->setSenha('123');
$logar->Logar();
echo "<br>";
var_dump($logar);