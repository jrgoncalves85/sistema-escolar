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
        $sql = "INSERT INTO alunos (nome, email, idade, turma_id) VALUES (
                    '" . $this->nome . "', 
                    '" . $this->email . "',
                    '" . $this->idade . "',
                    '" . $this->turma_id . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
        $conexao->exec($sql);
    }

    public function excluir()
    {
        $sql = "DELETE FROM alunos WHERE id=".$this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
        $conexao->exec($sql);
    }

}