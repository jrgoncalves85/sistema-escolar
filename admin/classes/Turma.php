<?php
class Turma
{
	public function listar()
	{
		$sql = "select * from turmas";
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=escolar','root','');
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}
}