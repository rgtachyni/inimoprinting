<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form class="form" action="" id="formInput" name="formInput" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="formId">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"><label id="headForm"></label> {{ Helper::head($title) }}</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Nama</span>
                            </label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="namaProduk" id="namaProduk" />
                            </div>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Harga</span>
                            </label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="harga" id="harga" />
                            </div>
                        </div>
                        <div class="col-md-12 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Deskripsi</span>
                            </label>
                            <div class="position-relative">
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Upload Gambar</label>
                            <input type="file" class="form-control" placeholder="pilih gambar" name="gambar"
                                id="gambar" />
                            <input type="hidden" name="gambar_old" id="gambar_old" />
                        </div>


                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center mt-5">
                            <button type="button" id="cancelBtn" class="btn btn-light me-3"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                            <button type="submit" class="btn btn-primary" id="updateBtn" value="update">Update</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

@push('jsScriptAjax')
    <script type="text/javascript">
        //Tampilkan form input
        function createForm() {
            $("#headForm").empty();
            $("#headForm").append("Form Input");
            $('#saveBtn').show();
            $('#updateBtn').hide();
            $('#formId').val('');
            $('#formInput').trigger("reset");
            $('#kt_modal_new_target').modal('show');
        }

        //Tampilkan form edit
        function editForm(id) {
            $.ajax({
                url: '{{ $title }}' + '/' + id + '/edit',
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $("#headForm").empty();
                    $("#headForm").append("Form Edit");
                    $('#formInput').trigger("reset");
                    $('#kt_modal_new_target').modal('show');
                    $('#saveBtn').hide();
                    $('#updateBtn').show();
                    $('#formId').val(data.id);
                    $('#namaProduk').val(data.namaProduk);
                    $('#harga').val(data.harga);
                    $('#deskripsi').val(data.deskripsi);
                    $('#gambar_old').val(data.gambar);
                },
                error: function() {
                    toast("Tidak dapat menampilkan data", "error", 1500);
                }
            });

            //     $(document).ready(function() {
            //         $('#formInput').submit(function(e) {
            //             e.preventDefault(); // stop form dari reload halaman

            //             var formData = new FormData(this);
            //             let id = $('#formId').val(); // ambil id, kalau kosong = create
            //             let url = id ? '{{ $title }}/' + id : '{{ $title }}';
            //             let method = id ? 'POST' : 'POST'; // bisa ganti PUT/PATCH kalau perlu

            //             //         $.ajax({
            //             url: url,
            //                 type: method,
            //                 data: formData,
            //                 contentType: false,
            //                 processData: false,
            //                 success: function(response) {
            //                     $('#kt_modal_new_target').modal('hide');
            //                     toast("Data berhasil disimpan!", "success", 2000);
            //                     // refresh tabel atau data list kalau ada
            //                 },
            //                 error: function(xhr) {
            //                     toast("Terjadi kesalahan saat menyimpan", "error", 2000);
            //                     console.error(xhr.responseText);
            //                 }
            //         });
            //     });
            // });

        }
    </script>
@endpush
