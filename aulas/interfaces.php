<?php


// basicamente a interface funciona assim
// tu declara uma interface, que basicamente é uma "classe" pai (ou podemos chamar de interface modelo / padronizador, sei lá)
// que o intuito dela é obrigar as classes filhas que irão herdar métodos do pai
// a usarem esses métodos

// no exemplo a baixo foi criado a interface crud onde ela tem vários métodos que é necessário para um crud funcionar corretamente
interface Crud {
     public function create();
     public function read();
     public function update();
     public function delete();
}


// aqui foi criado a classe Noticias onde está sendo implementado as funções criadas na interface Crud
// e se por algum acaso, esquecer de criar algum método dentro da classe, automáticamente o código irá retornar um erro
// impedindo que use a classe até que seja implementada todos os métodos que estão na interface Crud dentro da classe Noticias
class Noticias implements Crud {
     public function create() {
          // lógica para criar uma noticia
     }
     
     public function read() {
          // lógica para ler uma noticia
     }
     public function update() {
          // lógica para atualizar uma noticia
     }
     public function delete() {
          // lógica para deletar uma noticia
     }

}