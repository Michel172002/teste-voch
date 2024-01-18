<x-layout title="Relatorio de Unidades">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Razão Social</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Total de colaboradores</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $unidade)
                <tr>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td>{{ $unidade->quantidade_colaboradores }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
