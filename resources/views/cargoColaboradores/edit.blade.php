<x-layout title="Cadastrar / Editar Desempenho">
    <form action="{{ route('cargoColaboradores.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class="col-5">
                <label for="colaborador" class="form-label">Colaboradores</label>
                <select class="form-select" name="colaborador_id">
                    <option value="{{ null }}" selected>Selecione o colaborador</option>
                    @foreach ($colaboradores as $colaborador)
                    <option value="{{ $colaborador->id }}">{{ $colaborador->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="desempenho" class="form-label">Desempenho</label>
                <input type="number" class="form-control" name="nota_desempenho">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Concluir</button>
    </form>
</x-layout>
