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

//recebe os dados formato JSON 
$data = json_decode(file_get_contents("php://input"));

if(!$data){
    $data = new stdClass;
    $data->id = $_GET['id'];
    $data->descricao = $_GET['descricao'];
    $data->preco = $_GET['preco'];
    $data->categoria = $_GET['categoria'];
}

//atribui os valores para os atributos 
$produtos->id = $data->id;
$produtos->descricao = $data->descricao;
$produtos->preco = $data->preco;
$produtos->categoria = $data->categoria;

//tenta gravar as alterações 
if($produtos->Alterar()){
    //mensagem caso consiga gravar
    echo json_encode(array("Mensagem" => "Produto alterado."));  
} else{
    //mensagem caso não consiga gravar
    echo json_encode(array("Mensagem" => "Erro ao alterar o produto."));
}