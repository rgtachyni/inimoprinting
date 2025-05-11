@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->nama }}</td>
        <td>
            <div class="d-flex align-items-center">
                <div class="symbol symbol-50px me-3">
                    <img src="{{ asset('public/uploads/galeri/' . $v->gambar) }}" class="" alt="">
                </div>
            </div>
        </td>
        <td>
            {!! Helper::btnAction($v->id, $title) !!}
        </td>
    </tr>
@endforeach
