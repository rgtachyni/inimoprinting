@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->role }}</td>
        <td>{{ $v->name }}</td>
        <td>
            {!! Helper::btnAction($v->id, $title) !!}
        </td>
    </tr>
@endforeach
