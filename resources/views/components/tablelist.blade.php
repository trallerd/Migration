<div class="table-responsive" style="overflow-x: visible; overflow-y: visible;">
    <table class='table table-striped'>
        <thead>
            <tr style="text-align: center">
                @foreach ($header as $item)
                <th>{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr style="text-align: center">
                <td>{{ $item->nome }}</td>
                @if($header[0]=="Cliente" )
                <td>
                    <a href="{{ route('cliente.edit', $item->id) }}"><img src="{{ asset('img/icons/edit.svg') }}"></a>
                    <a href="{{ route('cliente.show', $item->id) }}"><img src="{{ asset('img/icons/info.svg') }}"></a>
                </td>
            </tr>
            @elseif($header[0]=="Veterinarios")
            <td>
                <a href="{{ route('veterinario.edit', $item->id) }}"><img src="{{ asset('img/icons/edit.svg') }}"></a>
                <a href="{{ route('veterinario.show', $item->id) }}"><img src="{{ asset('img/icons/info.svg') }}"></a>
            </td>
            </tr>
            @elseif($header[0]=="Especialidades")
            <td>
                <a href="{{ route('especialidade.edit', $item->id) }}"><img src="{{ asset('img/icons/edit.svg') }}"></a>
                <a href="{{ route('especialidade.show', $item->id) }}"><img src="{{ asset('img/icons/info.svg') }}"></a>
            </td>
            </tr>
            @endif

            </form>
            @endforeach
        </tbody>
    </table>
</div>