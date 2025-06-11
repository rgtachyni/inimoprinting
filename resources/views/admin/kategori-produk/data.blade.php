@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->nama }}</td>
        <td> <img src="{{ asset('storage/kategori/' . $v->gambar) }}" alt="1" width="10%"></td>
        {{-- <td>{{ $v->gambar }}</td> --}}

        <td>
            <a onclick="editForm({{ $v->id }})" class="">
                <button type="button" class="btn btn-icon btn-round btn-warning btn-sm">
                    <i class="fa fa-pencil-alt"></i>
                </button>
            </a>
            <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{ $v->id }}" title="Delete"
                class="deleteData">
                <button type="button" class="btn btn-icon btn-round btn-danger btn-sm">
                    <i class="fa fa-trash-alt"></i>
                </button>
            </a>
        </td>
    </tr>
@endforeach
