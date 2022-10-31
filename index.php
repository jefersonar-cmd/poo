<?php
include 'components/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link rel="stylesheet" href="assets/index.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <?php ListFolder('aulas'); ?>
        </div>
        <div class="body">
            <h1>Resultado: </h1>
            <hr />
            <div class="content">
                <?php
                    $page = @$_GET['page'];
                    $links = ListFiles('aulas');
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
                        ?>
                            <p>Aqui está o certificado de conclusão do curso: <i>PHP Orientado a Objetos</i></p>
                            <hr />
                            <h2>Certificado</h2>
                            <img src="./assets/certif.png" alt="CERTIFICADO" class="cert" disabled="disabled" />
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>