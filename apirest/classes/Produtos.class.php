<?php 

class Produtos{
    private $conn;
    private $tabela = "produtos";
    public $id;
    public $descricao;
    public $preco;
    public $categoria;

    //criando o constructor que recebe a conexão
    public function __construct($db){
        $this->conn = $db;
    }

    //método listar que busca todos os dados da tabela
    function Listar(){
        $query = "SELECT * FROM " . $this->tabela;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    //método que busca um valor específico na tabela
    function ListarFiltro($id){
        $query = "SELECT * FROM " . $this->tabela . " where id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    //método que insere registros na tabela 
    function Inserir(){
        $query = "INSERT INTO" . $this->tabela ."SET descricao=:descricao, preco=:preco, categoria=:categoria";
        $stmt = $this->conn->prepare($query);

        //limpando as entradas 
        $this->desicao = htmlspecialchars(strip_tags($this->descricao));
        $this->preco = htmlspecialchars(strip_tags($this->preco));
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));

        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":categoria", $this->categoria);
        if($stmt->execute()){
            return true;
        }
        return false; //confirmar identação
    }

    //método para apagar os registros 
    function Apagar(){
        $query = "DELETE FROM " . $this->tabela . "WHERE id = $this->id";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);
        if($stmt->execute()){
            return true;
        } 
        return false; //confirmar identação
    }

    //método para alterar registros 
    function Alterar(){
        $query = "UPDATE " . $this->tabela . "SET descricao = :descricao, preco = :preco, categoria = :categoria WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        $this->descricao = htmlspecialchars(strip_tags($this->descricao));
        $this->preco = htmlspecialchars(strip_tags($this->preco));
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));
        
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':preco', $this->preco);
        $stmt->bindParam(':categoria', $this->categoria);

        if($stmt->execute()){
            return true;
        }
        return false; //confirmar identação
    }
}