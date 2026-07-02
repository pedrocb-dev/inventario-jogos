<div>
    <div>
        <label>Nome</label><br>
        <input type="text" name="nome" value="{{ old('nome', $jogo->nome ?? '') }}" required>
    </div>

    <div>
        <label>Categoria</label><br>
        <input type="text" name="categoria" value="{{ old('categoria', $jogo->categoria ?? '') }}" required>
    </div>

    <div>
        <label>Jogadores Mínimos</label><br>
        <input type="number" name="jogadores_min" value="{{ old('jogadores_min', $jogo->jogadores_min ?? '') }}" required>
    </div>

    <div>
        <label>Jogadores Máximos</label><br>
        <input type="number" name="jogadores_max" value="{{ old('jogadores_max', $jogo->jogadores_max ?? '') }}" required>
    </div>

    <div>
        <label>Duração (minutos)</label><br>
        <input type="number" name="duracao_minutos" value="{{ old('duracao_minutos', $jogo->duracao_minutos ?? '') }}" required>
    </div>

    <br>

    <button type="submit">Salvar</button>
</div>