<?php
require_once 'classes/Aluno.php';
$aluno = new Aluno();

$aluno->nome = $_POST['txtnome'];
$aluno->email = $_POST['txtemail'];
$aluno->idade = $_POST['txtidade'];
$aluno->turma_id = $_POST['selturma'];
$aluno->inserir();

header('Location: alunos-listar.php');
?>