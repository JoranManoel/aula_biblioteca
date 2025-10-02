<h1>Lista de livros</h1>

<div class="row">

<?php
include 'conexao.php';
$livros = $conn->query('select * from livros');

while($livro = $livros->fetch_object())
echo "<div class='card m-2' style='width: 18rem;'>
  <img src='https://static.vecteezy.com/ti/vetor-gratis/p1/7442146-ilustracao-simples-com-pilha-de-livros-em-fundo-isolado-vetor.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$livro->titulo</h5>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href='apagar.php?isbn=$livro->isbn' class='btn btn-danger'>apagar</a>
  </div>
</div>"
?>

</div>