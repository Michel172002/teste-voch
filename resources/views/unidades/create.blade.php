<x-layout title="Cadastro de Unidade">
    <form action="{{ route('unidades.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
        </div>
        <div class="mb-3">
            <label for="razaoSocial" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="razaoSocial" name="razao_social">
          </div>
        <div class="mb-3">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" name="cnpj">
          <div id="cnpjHelp" class="form-text">Somente numeros! Ex: 00000000000000</div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</x-layout>
