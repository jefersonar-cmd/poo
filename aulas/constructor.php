<?php
//  Constructor

class Login {
     private $email, $senha, $nome;

     public function __construct($email, $senha, $nome){
          $this->nome = $nome;
          $this->setEmail($email);
          $this->setSenha($senha);
     }

     public function getNome () {
          return   $this->nome;
     }

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
               echo 'Logado com sucesso!';
          else :
               echo 'Dados inválidos';
          endif;
     }
}

$logar = new Login('teste()/@teste.com', '123', 'Jefferson');
$logar->Logar();
echo "<br>";
var_dump($logar);
echo "<br>";