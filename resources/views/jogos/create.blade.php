<x-app-layout>

<x-slot name="header">
    <h2 class="text-2xl font-bold text-gray-800">
        Novo Jogo
    </h2>
</x-slot>

<div class="py-8">

<div class="max-w-4xl mx-auto">

<div class="bg-white shadow-xl rounded-xl">

<div class="p-8">

<form action="{{ route('jogos.store') }}" method="POST">

@csrf

@include('jogos.form')

<div class="mt-8 flex justify-end gap-3">

<a href="{{ route('jogos.index') }}"
class="px-5 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">

Cancelar

</a>

<button
class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-blue-700">

Salvar

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</x-app-layout>