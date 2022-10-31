<?php
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
?>