<h1>Nova dúvida</h1>

<form action="{{ route('suporte.store') }}" method="POST">
    <!-- {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}} -->
    @csrf()
    <input type="text" name="assunto" placeholder="Assunto">
    <!--<input type="text" name="is_admin" value="1">-->
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>