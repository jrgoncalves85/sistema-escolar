<?php 
require_once 'classes/Aluno.php';

$id = $_GET['id'];
$aluno = new Aluno($id);

$aluno->excluir();

header('Location: alunos-listar.php');
?>