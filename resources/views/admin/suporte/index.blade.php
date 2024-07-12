<h1>Listagem dos suportes</h1>

<a href="{{ route('suporte.create') }}">Criar dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($lista_suportes as $suporte)
            <tr>
                <td>{{ $suporte->assunto }}</td>
                <td>{{ $suporte->status }}</td>
                <td>{{ $suporte->body }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>