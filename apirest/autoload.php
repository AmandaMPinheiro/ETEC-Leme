<?php 

//função que carrega as classes necessárias quando invocadas
function carregar_classes($classe)
{
    //testa se existe a classe na pasta classes
    if(file_exists("classes/".$classe.".class.php")){
        //se existe, carrega ela 
        include("classes/".$classe.".class.php");
    }
}

//faz o resgistro da função para o PHP utilizá-la
spl_autoload_register("carregar_classes");