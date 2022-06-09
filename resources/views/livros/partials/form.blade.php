    <p> Título: <input name="titulo" value="{{old('titulo', $livro->titulo)}}"> </p>
    <p> Autor: <input name="autor" value="{{old('autor', $livro->autor)}}"> </p>
    <p> ISBN: <input name="isbn" value="{{old('isbn', $livro->isbn)}}"> </p>
    <p> Preço: <input name="preco" value="{{old('preco', $livro->preco)}}"> </p>
    <p> Resumo: <textarea name="resumo"> {{old('resumo', $livro->resumo)}} </textarea></p> <br>
