<?php

// echo'<pre>';
// print_r($_POST);
// echo'</pre>';

session_start();

// $texto = $_POST['titulo'] . $_POST['categoria'] . $_POST['descricao'];

$titulo = str_replace('#','-', $_POST['titulo']);
$categoria = str_replace('#','-', $_POST['categoria']);
$descricao = str_replace('#','-', $_POST['descricao']);

$texto = $_SESSION['Id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// echo $texto;

//ABRIR ARQUIVO
$arquivo = fopen('arquivo.txt', 'a');
//EXCREVA O TEXTO NO ARQUIVO
fwrite($arquivo, $texto);
//FECHANDO ARQUIVO
fclose($arquivo);
//REDIRECIONAR
header('Location: abrir_chamado.php');

?>