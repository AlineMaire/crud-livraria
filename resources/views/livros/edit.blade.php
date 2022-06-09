<h1>Cadastro de Livros</h1>
<form method='POST' action="/livros/{{$livro->id}}">
    @csrf
    @include('livros.partials.form')
    <button type='submit'> Editar</button>

</form>
