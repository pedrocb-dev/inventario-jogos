<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Jogos</h2>
    </x-slot>

    <div class="py-6 max-w-6xl mx-auto">

        <a href="{{ route('jogos.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            Novo Jogo
        </a>

        @if(session('success'))
            <div class="mt-4 p-3 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full mt-6 border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2 text-left">Nome</th>
                    <th class="p-2 text-left">Categoria</th>
                    <th class="p-2 text-left">Jogadores</th>
                    <th class="p-2 text-left">Duração</th>
                    <th class="p-2 text-left">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($jogos as $jogo)
                    <tr class="border-t">
                        <td class="p-2">{{ $jogo->nome }}</td>
                        <td class="p-2">{{ $jogo->categoria }}</td>
                        <td class="p-2">{{ $jogo->jogadores_min }} - {{ $jogo->jogadores_max }}</td>
                        <td class="p-2">{{ $jogo->duracao_minutos }} min</td>
                        <td class="p-2">
                            <a class="text-blue-600"
                               href="{{ route('jogos.edit', $jogo) }}">
                                Editar
                            </a>

                            <form action="{{ route('jogos.destroy', $jogo) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-600"
                                        type="submit">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>