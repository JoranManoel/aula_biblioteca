<h1>Cadastrar Livro</h1>
<form action="inserirLivro.php">
    <div class="row">
        <div class="col-4">
            <input type="text" class="form-control mb-2" name="titulo" placeholder="Título do livro" id="">
        </div>
        <div class="col-2">
            <input type="number" class="form-control" name="isbn" placeholder="ISBN" id="">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="text" class="form-control mb-2" name="autor" placeholder="Autor" id="">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <input type="text" class="form-control mb-2" name="editora" placeholder="Editora" id="">
        </div>
        <div class="col-2">
            <input type="date" class="form-control mb-2" name="ano" id="">
        </div>
        <div class="col-1">
            <input type="number" class="form-control mb-2" name="qtd" placeholder="Quantidade" id="">
        </div>
    </div>
    <div class="row">
        <input type="submit" class="btn btn-primary col-6" value="Cadastrar">
    </div>
</form>