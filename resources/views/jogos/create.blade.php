<h1>Novo Jogo</h1>

<form action="{{ route('jogos.store') }}" method="POST">
    @csrf

    @include('jogos.form')

    <br>

    <a href="{{ route('jogos.index') }}">Voltar</a>
</form>