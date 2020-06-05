<?php
class Turma
{
	public $id;
	public $descTurma;
	public $ano;

	public function __construct($id = false)
	{
		if (isset($id)){
			$this->id = $id;
		}
	}

	public function listar()
	{
		$sql = "SELECT * FROM turmas";
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	public function inserir()
	{
		$sql = "INSERT INTO turmas (descTurma, ano) VALUES (
					'" .$this->descTurma. "' ,
					'" .$this->ano. " '
			)";
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
		$conexao->exec($sql);
	}

	public function excluir()
	{
		$sql = "DELETE FROM turmas WHERE id=".$this->id;
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
		$conexao->exec($sql);
	}
}