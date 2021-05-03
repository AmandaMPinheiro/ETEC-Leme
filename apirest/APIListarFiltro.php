<?php 

//liberando no apache acesso de qualquer domínio
header("Access-Control-Allow-Origin: *");

//formatando o cabeçalho no padrão json/utf-8 
header("Content-type: application/json");

//carregando o autoload
require_once 'autoload.php';

//recebe os dados no formato JSON 
$data = json_decode(file_get_contents("php://input"));

//se não conseguir pegar no formato JSON, pega pela URI
if(!$data){
    //echo "$_SERVER[REQUEST_URI]";
    $dados = explode("/", $_SERVER["REQUEST_URI"]);
    //print_r($dados);
    $data = new stdClass;
    $valor = explode("=", $dados[2]);
    //print_r($valor);
    $data->id = $valor[1];
}

//Usando a classe conexão para conectar no banco
$con = Conexao::Open();

//criando o objeto da classe produtos
$produtos = new Produtos($con);

//chamando o método ListarFiltro passando o id para pesquisa
$stmt = $produtos->ListarFiltro($data->id);

//retornando a quantidade de registros
$num = $stmt->rowCount();

//se a quantidade for maior que zero
if($num > 0){
    //cria um array para armazenar os registros
    $produtos_arr["registros"] = array();

    //loop para pegar cada linha da tabela produtos
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        //adicionando os registros no array
        array_push($produtos_arr["registros"], $row);
    }
    //mostra produtos no formato Json
    echo json_encode($produtos_arr);
} else{
    //mensagem caso não tenha registos na tabela
    echo json_encode(arry("Mensagem" => "Produtos não encontrado."));
}
