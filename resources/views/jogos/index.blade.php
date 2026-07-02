<h1>Jogos</h1>

<a href="{{ route('jogos.create') }}">Novo Jogo</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Jogadores</th>
        <th>Duração</th>
        <th>Ações</th>
    </tr>

    @foreach($jogos as $jogo)
    <tr>
        <td>{{ $jogo->nome }}</td>
        <td>{{ $jogo->categoria }}</td>
        <td>{{ $jogo->jogadores_min }} - {{ $jogo->jogadores_max }}</td>
        <td>{{ $jogo->duracao_minutos }} min</td>
        <td>
            <a href="{{ route('jogos.edit', $jogo) }}">Editar</a>

            <form action="{{ route('jogos.destroy', $jogo) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>