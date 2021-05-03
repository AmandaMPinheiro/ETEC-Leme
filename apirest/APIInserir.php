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

//recebe os dados no formato json
$data = json_decode(file_get_contents("php://input"));

//verifica se os campos não estão vazios 
if(!empty($data->descricao) && !empty($data->preco) && !empty($data->categoria)){
    //atribui os valores aos atributos 
    $produtos->descricao = $data->descricao;
    $produtos->preco = $data->preco;
    $produtos->categoria = $data->categoria;

    //tenta inserir os registros 
    if($produtos->Inserir()){
        echo json_encode(array("Mensagem" => "Produto criado. Descricao:$data->descricao - Preco: $data->preco - Categoria: $data->categoria"));
    } else {
        echo json_encode(array("Mensagem" => "Erro ao criar o produto."));
    } 
} else {
    //se os campos estiverem em branco
    echo json_encode(array("Mensagem" => "Não foi possível criar produto. Dados incompletos. Descricao:$data->descricao - Preco: $data->preco - Categoria: $data->categoria"));
}