<?php 
    include 'conexao.php';

    $titulo = $_GET['titulo'];
    $isbn = $_GET['isbn'];
    $autor = $_GET['autor'];
    $editora = $_GET['editora'];
    $ano = $_GET['ano'];
    $qtd = $_GET['qtd'];


    $inserir = "insert into livros values($isbn,'$titulo','$editora','$autor','$ano',$qtd)";

    $conn->query($inserir);

    header('Location:index.php')

?>