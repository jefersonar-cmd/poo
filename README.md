# PHP Orientado a Objetos

Este é o repositório destinado ao estudo de Orientação a Objetos no PHP.

---

Foi feito uma tela na página index, onde é apresentado todos os arquivos .php gerados, seus resultados e seus código fonte.

#### Pages:

- HOME
  
  - ![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-12-27-13-image.png)

- Other Pages:
  
  - Compuser:
    
    - ![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-12-31-59-image.png)
  
  - Constructor:
    
    - ![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-12-37-52-image.png)

---

## Funções responsáveis pelo navbar, apresentação do resultado e código fonte de cada arquivo

Esta função abaixo é responsável em verificar dentro da pasta **aulas/** cada arquivo.php e criar uma um menu (lista) com o nome de cada arquivo.

```php
function ListFolder($path){
        $dir_handle = opendir($path) or die("Erro");
        $tmp = explode('/', $path);
        $dirname = end($tmp);

        //echo ("<li> $dirname");
        echo "<ul>";
        echo "<li><a href='?page=home'>Home</a></li>";
        while (false !== ($file = readdir($dir_handle))) {
            if($file!="." && $file!=".."){
                if (is_dir($path."/".$file)){
                    //ListFolder($path."/".$file);
                }
                else{
                    $replace = str_replace(".php", "", $file);
                    $replace = str_replace('_', ' ', $replace);
                    $replace = ucwords(strtolower($replace));
                    //if ($replace != 'produto'){
                        echo "<li><a href='?page=$file'>$replace</a></li>";
                    //}
                }
            }
        }
        echo "</ul>";
        //echo "</li>";

        closedir($dir_handle);
}
```

A outra função abaixo faz relativamente a mesma coisa que o anterior. Porém, ele pega cada arquivo e armazena em um array.

```php
function ListFiles($path){
    $dir_handle = opendir($path) or die("Erro");
    $tmp = explode('/', $path);
    $dirname = end($tmp);
    $array = array();

    while (false !== ($file = readdir($dir_handle))) {
        if ($file != "." && $file != ".."){
            if(is_dir($path."/".$file)){
                //ListFiles($path."/".$file);
            }else{
                $array[] = $file;
            }
        }
    }

    return $array;
    closedir($dir_handle);
}
```

Indo para a página index.

Foi criado várias formas de tratar esses dados retirados das funções anteriores.

A primeira delas:

```php
$page = @$_GET['page'];
$links = ListFiles('aulas');
foreach ( $links as $link ) {
  if ($link == $page) {
      $link = str_replace('.php', '', $link);
      $link = str_replace('_', ' ', $link);
      $link = ucwords(strtolower($link));
      echo $link;
      break;
  }
}
```

Usada para tratar o nome de cada arquivo, deixando do o mais legível na hora de apresentá-lo.

![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-13-50-13-image.png)

O segundo:

```php
if ($page != '' and $page != 'home'){
     for ($i = 0; $i < count($links); $i++){
         if($links[$i] == $page){
             include 'aulas/'.$links[$i];
             echo '<br />';
            
             break;
         }
     }
     echo '<hr />';
     echo '<h3>Código Fonte<h3> <br />';
     echo "<textarea disabled='disabled' cols='100' rows='20'>";
     for ($i = 0; $i < count($links); $i++) {
         if($links[$i] == $page){
             $file = './aulas/'.$links[$i];
             $document = file_get_contents($file);
             echo htmlentities($document);
         }
     }
     echo "</textarea>";
}elseif($page=='home' or $page==''){
     echo '
         <p>Aqui está o certificado de conclusão do curso: <i>PHP Orientado a Objetos</i></p>
         <hr />
         <h2>Certificado</h2>
         <img src="./assets/certif.png" alt="CERTIFICADO" class="cert" disabled="disabled" />
     ';
}
```

Este irá tratar o array criado na função **ListFiles()**, incluindo na index o conteúdo do arquivo puxado pela função e seu código fonte. Onde tem uma condição caso $page tenha algum valor dentro da variável, irá apresentar o conteúdo e caso não tenha ou seja igual a 'Home', será apresentado o certificado de conclusão:

![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-14-21-49-image.png)

![](C:\Users\lordo\AppData\Roaming\marktext\images\2022-10-31-14-22-22-image.png)

---

Caso queiram usufruir do projeto. Irei criar uma versão dela limpa, sem os arquivos das aulas e certificado.