<?php
class Aluno
{
    public $id;
    public $nome;
    public $email;
    public $idade;
    public $turma_id;

    public function __construct($id = false)
    {
        if (isset($id)){
            $this->id = $id;
        }
    }
    
    public function listar()
    {
        $sql = "SELECT * FROM alunos";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $sql = 'INSERT INTO alunos (nome, email, idade, turma_id) VALUES ' .
               '(:nome, :email, :idade, :turma_id);
        
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
        $stmt = $conexao->prepare($sql);
        
        $stmt->bindValue('nome', $this->nome);
        $stmt->bindValue('email', $this->email);
        $stmt->bindValue('idade', $this->idade, PDO::PARAM_INT);
        $stmt->bindValue('turma_id', $this->turma_id, PDO::PARAM_INT);
        
        $stmt->execute();
    }

    public function excluir()
    {
        $sql = 'DELETE FROM alunos WHERE id = :id';
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue('id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
    }

}
