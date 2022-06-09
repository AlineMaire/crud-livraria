<h1> Cadastro de Livros </h1>

<form method="POST" action="/livros">
@csrf

<p> Título: <input name="titulo" > </p>
<p> Autor: <input name="autor" > </p>
<p> ISBN: <input name="isbn"> </p>
<p> Preço: <input name="preco" > </p>
<p> Resumo: <textarea name="resumo"> </textarea></p>

<button type="submit"> Salvar </button>

</form>