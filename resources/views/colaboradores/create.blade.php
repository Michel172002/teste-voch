<x-layout title="Cadastro de Colaborador">
    <form action="{{ route('colaboradores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf">
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label for="cpf" class="form-label">Unidade</label>
                <select class="form-select" name="unidade_id">
                    <option selected>Selecione a unidade</option>
                    @foreach ($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="cpf" class="form-label">Cargo</label>
                <select class="form-select" name="cargo_id">
                    <option selected>Selecione o cargo</option>
                    @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</x-layout>
