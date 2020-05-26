<?php
require_once 'classes/Turma.php';
$turma = new Turma();

$turma->descTurma = $_POST['txtturma'];
$turma->ano = $_POST['txtano'];
$turma->inserir();

header('Location: turmas-listar.php');
?>