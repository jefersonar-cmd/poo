<?php
// message, code, file, line
class Newsletter {
     public function cadastrarEmail($email) {
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               throw new Exception("Este email é inválido", 1);
          }else{
               echo "Email cadastrado com sucesso";
          }
     }
}

$Newsletter = new Newsletter();
try {
     $Newsletter->cadastrarEmail('contato@');
}catch(Exception $e){
     echo "Mesangem: ".$e->getMessage()."<br/>";
     echo "Código: ".$e->getCode()."<br/>";
     echo "Linha: ".$e->getLine()."<br/>";
     echo "Arquivo: ".$e->getFile()."<br/>";
}