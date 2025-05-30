@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->namaProduk }}</td>
        <td>{{ $v->harga }}</td>
        <td>{{ $v->deskripsi }}</td>
        <td>
            <div class="d-flex align-items-center">
                <div class="symbol symbol-50px me-3">
                    <img src="{{ asset('storage/produk/' . $v->gambar) }}" class="" alt="">
                </div>
            </div>
        </td>
        <td>
            <a onclick="editForm({{ $v->id }})" class="">
                <button type="button" class="btn btn-icon btn-round btn-warning btn-sm">
                    <i class="fa fa-pencil-alt"></i>
                </button>
            </a>
            <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{ $v->id }}" title="Delete" class="deleteData">
                <button type="button" class="btn btn-icon btn-round btn-danger btn-sm">
                    <i class="fa fa-trash-alt"></i>
                </button>
            </a>
        </td>
    </tr>
@endforeach
