<x-app-layout>

<x-slot name="header">

<div class="flex justify-between items-center">

<h2 class="text-2xl font-bold text-gray-800">

Inventário de Jogos

</h2>

<a href="{{ route('jogos.create') }}"
class="bg-blue-600 hover:bg-blue-700 text-blue px-5 py-2 rounded-lg">

Novo Jogo

</a>

</div>

</x-slot>

<div class="py-8">

<div class="max-w-7xl mx-auto">

@if(session('success'))

<div class="mb-5 p-4 rounded-lg bg-green-100 text-green-700">

{{ session('success') }}

</div>

@endif

<div class="bg-white shadow-xl rounded-xl overflow-hidden">

<table class="min-w-full">

<thead class="bg-gray-100">

<tr>

<th class="px-6 py-4 text-left">Nome</th>

<th class="px-6 py-4 text-left">Categoria</th>

<th class="px-6 py-4 text-left">Jogadores</th>

<th class="px-6 py-4 text-left">Duração</th>

<th class="px-6 py-4 text-center">Ações</th>

</tr>

</thead>

<tbody>

@forelse($jogos as $jogo)

<tr class="border-t hover:bg-gray-50">

<td class="px-6 py-4">

{{ $jogo->nome }}

</td>

<td class="px-6 py-4">

{{ $jogo->categoria }}

</td>

<td class="px-6 py-4">

{{ $jogo->jogadores_min }} - {{ $jogo->jogadores_max }}

</td>

<td class="px-6 py-4">

{{ $jogo->duracao_minutos }} min

</td>

<td class="px-6 py-4">

<div class="flex justify-center gap-3">

<a href="{{ route('jogos.edit',$jogo) }}"
class="px-4 py-2 bg-yellow-400 rounded-lg hover:bg-yellow-500">

Editar

</a>

<form action="{{ route('jogos.destroy',$jogo) }}"
method="POST">

@csrf
@method('DELETE')

<button
onclick="return confirm('Excluir este jogo?')"
class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">

Excluir

</button>

</form>

</div>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center py-10 text-gray-500">

Nenhum jogo cadastrado.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

</x-app-layout>