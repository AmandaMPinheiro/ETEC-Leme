<?php 

//liberando no apache acesso de qualquer domínio
header("Access-Control-Allow-Origin: *");

//formatando o cabeçalho no padrão json/utf-8 
header("Content-type: application/json");

//carregando o autoload
require_once 'autoload.php';

//usando a classe conexão para conectar no banco
$con = Conexao::Open();

//criando o objeto da classe produtos 
$produtos = new Produtos($con);

//recebe o id formato JSON 
$data = json_decode(file_get_contents("php://input"));

//atribui o id ao atributo 
$produtos->id = $data->id;

//tenta apagar o registro 
if ($produtos->Apagar()){
    //mensagem caso obtenha sucesso 
    echo json_encode(array("Mensagem" => "Produto apagado."));
} else{
    //mensagem caso não consiga apagar 
    echo json_encode(array("Mensagem" => "Erro ao apagar produto."));
}