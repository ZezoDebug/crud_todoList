<?php
$host = 'localhost';
$tarefa = 'root';
$senha = '';
$banco = 'tarefa';

$conn = mysqli_connect($host, $tarefa, $senha, $banco) or die('Não foi possível enviar a tarefa');

?>