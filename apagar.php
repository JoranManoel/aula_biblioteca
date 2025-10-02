<?php 

include 'conexao.php';

$isbn = $_GET['isbn'];

$conn->query("delete from livros where isbn = $isbn");

header('location:index.php');

?>