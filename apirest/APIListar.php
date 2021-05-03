<?php 

//liberando no apache acesso de qualquer domínio 
//developer.mozilla.org/pt-BR/docs/Web/HTTP/Headers/Access-Control-Allow-Origin 
header("Access-Control-Allow-Origin: *");

//formatando o cabecalho no padrão json/utf-8 
header("Content-type: application/json");

//arquivo que carrega as classes por demanda 
require_once 'autoload.php';

$con = Conexao::Open();
$produtos = new Produtos($con);
$stmt = $produtos->Listar();
$num = $stmt->rowCount(); 

if($num > 0){
    $produtos_arr["registros"] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        array_push($produtos_arr["registros"], $row);
    }

//mostra produtos no formato json
echo json_encode($produtos_arr);
} else{
    //MSG 
    echo json_encode(array("Mensagem" => "Produtos não encontrados"));
}