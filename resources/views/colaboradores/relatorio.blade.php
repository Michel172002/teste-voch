<x-layout title="Relatorio de Colaboradores">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Unidade</th>
                <th scope="col">Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $colaborador)
                <tr>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->nome_fantasia }}</td>
                    <td>{{ $colaborador->cargo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
