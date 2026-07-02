<div class="space-y-6">

    <div>
        <label class="block mb-2 text-sm font-semibold text-gray-700">
            Nome
        </label>

        <input
            type="text"
            name="nome"
            value="{{ old('nome', $jogo->nome ?? '') }}"
            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
            required
        >
    </div>

    <div>
        <label class="block mb-2 text-sm font-semibold text-gray-700">
            Categoria
        </label>

        <input
            type="text"
            name="categoria"
            value="{{ old('categoria', $jogo->categoria ?? '') }}"
            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
            required
        >
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">
                Jogadores mínimos
            </label>

            <input
                type="number"
                name="jogadores_min"
                value="{{ old('jogadores_min', $jogo->jogadores_min ?? '') }}"
                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            >
        </div>

        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">
                Jogadores máximos
            </label>

            <input
                type="number"
                name="jogadores_max"
                value="{{ old('jogadores_max', $jogo->jogadores_max ?? '') }}"
                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            >
        </div>

        <div>
            <label class="block mb-2 text-sm font-semibold text-gray-700">
                Duração (min)
            </label>

            <input
                type="number"
                name="duracao_minutos"
                value="{{ old('duracao_minutos', $jogo->duracao_minutos ?? '') }}"
                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required
            >
        </div>

    </div>

</div>