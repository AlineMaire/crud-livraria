<a href="livros/create"> Cadastre um novo Livro </a>
<br>
Lista de livros cadastrados no sistema: <br><br>
@foreach($livros as $livro)
Título: <a href="livros/{{$livro->id}}"> {{$livro->titulo}} </a> <br>
Autor: {{$livro->autor}} <br><br>
<a href="livros/{{$livro->id}}/edit"> Editar </a>
<form method="POST" action="livros/{{$livro->id}}"> 
    @csrf
    @method('DELETE')
    <button type="submit"> Deletar </button>
</form>
 <br>
    <br>
@endforeach