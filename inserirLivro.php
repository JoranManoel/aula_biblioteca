<?php 
    $titulo = $_GET['titulo'];
    $inserir = "insert into livro values('$titulo')";

    echo $titulo;

?>