<x-layout title="Home page">
    <a href="{{ route('unidades.create') }}" class="btn btn-warning">Unidades</a>
    <a href="{{ route('colaboradores.create') }}" class="btn btn-warning">Colaboradores</a>
    <a href="{{ route('cargoColaboradores.create') }}" class="btn btn-warning">Cadastrar/Editar desempenho</a>

    <a href="{{ route('colaboradores.relatorio') }}" class="btn btn-warning">Relatorio Colaboradores</a>
</x-layout>
