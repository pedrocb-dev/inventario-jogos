<h1>Editar Jogo</h1>

<form action="{{ route('jogos.update', $jogo) }}" method="POST">
    @csrf
    @method('PUT')

    @include('jogos.form')

    <br>

    <a href="{{ route('jogos.index') }}">Voltar</a>
</form>