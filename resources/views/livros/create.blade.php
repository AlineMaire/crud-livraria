<h1> Cadastro de Livros </h1>

<form method="POST" action="/livros">
@csrf
@include('livros.partials.form')

<button type="submit"> Salvar </button>

</form>