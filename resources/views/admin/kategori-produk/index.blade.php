@extends('admin._layouts.index')

@push('cssScript')
    @include('admin._layouts.css.css')
@endpush

@push('user-setting')
    menu-item-open menu-item-here
@endpush

@push('aktif-user-setting')
    text-primary
@endpush

@push($title)
    menu-item-active
@endpush

@section('content')
    <!--begin::Content wrapper-->

    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ Helper::head($title) }}</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('/admin') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">{{ Helper::head($title) }}</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Data</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">

                <!--begin::Tables Widget 11-->
                <div class="card mb-5 mb-xl-8">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Per Page" id="jumlah">
                                {{-- <option value=""></option> --}}
                                <option value="5" selected>5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <!--end::Select2-->
                        </div>

                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" class="form-control form-control-solid w-250px ps-14"
                                    placeholder="Search" id="cari" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Add product-->
                            <a onclick="createForm()" class="btn btn-primary">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Add New
                            </a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>


                    <!--begin::Body-->
                    <div class="card-body py-3">

                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <div class="py-5">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-300 gy-4">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="datatabel">
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex flex-wrap py-2 mr-3">
                                    <div class="text-center pagination">
                                        <div id="contentx"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-3">
                                    <ul class="pagination twbs-pagination">
                                    </ul>
                                </div>
                            </div>


                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->

                </div>
                <!--end::Tables Widget 11-->


            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->


    @include('admin.' . $title . '._form')
@endsection

@push('jsScript')
    @include('admin._layouts.js.js')

    <script type="text/javascript">
        $(document).ready(function() {
            loadpage('', 5);

            var $pagination = $('.twbs-pagination');
            var defaultOpts = {
                totalPages: 1,
                prev: '&#8672;',
                next: '&#8674;',
                first: '&#8676;',
                last: '&#8677;',
            };
            $pagination.twbsPagination(defaultOpts);

            function loaddata(page, cari, jml) {
                $.ajax({
                    url: '{{ route($title . '.data') }}',
                    data: {
                        "page": page,
                        "cari": cari,
                        "jml": jml
                    },
                    type: "GET",
                    datatype: "json",
                    success: function(data) {
                        $(".datatabel").html(data.html);
                    }
                });
            }

            function loadpage(cari, jml) {
                $.ajax({
                    url: '{{ route($title . '.data') }}',
                    data: {
                        "cari": cari,
                        "jml": jml
                    },
                    type: "GET",
                    datatype: "json",
                    success: function(response) {
                        console.log(response);
                        if ($pagination.data("twbs-pagination")) {
                            $pagination.twbsPagination('destroy');
                            $(".datatabel").html('<tr><td colspan="4">Data not found</td></tr>');
                        }
                        $pagination.twbsPagination($.extend({}, defaultOpts, {
                            startPage: 1,
                            totalPages: response.total_page,
                            visiblePages: 8,
                            prev: '&#8672;',
                            next: '&#8674;',
                            first: '&#8676;',
                            last: '&#8677;',
                            onPageClick: function(event, page) {
                                if (page == 1) {
                                    var to = 1;
                                } else {
                                    var to = page * jml - (jml - 1);
                                }
                                if (page == response.total_page) {
                                    var end = response.total_data;
                                } else {
                                    var end = page * jml;
                                }
                                $('#contentx').text('Showing ' + to + ' to ' + end +
                                    ' of ' +
                                    response.total_data + ' entries');
                                loaddata(page, cari, jml);
                            }
                        }));
                    }
                });
            }

            // $("#pencarian, #show").keyup(function (event) {
            $("#cari, #jumlah").on('keyup change', function(event) {
                let cari = $('#cari').val();
                let jml = $('#jumlah').val() || 5;
                loadpage(cari, jml);
            });

            // proses simpan
            $('#saveBtn').click(function(e) {
                var valid = this.form.checkValidity();
                if (valid) {
                    e.preventDefault();
                    let formData = new FormData(formInput);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        url: "{{ route($title . '.store') }}",
                        type: "POST",
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            $('#formInput').trigger("reset");
                            $('#kt_modal_new_target').modal('hide');
                            loadpage('', 5);
                            toastr.success("Successful save data!");
                        },
                        error: function(data) {
                            console.log('Error:', data);
                            $('#formInput').trigger("reset");
                            $('#kt_modal_new_target').modal('hide');
                            toastr.error("Failed to save data!");
                        }
                    });
                }
            });

            // proses update
            $('#updateBtn').click(function(e) {
                var valid = this.form.checkValidity();
                if (valid) {
                    let id = $('#formId').val();
                    e.preventDefault();
                    let formData = new FormData(formInput);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        url: '{{ $title }}' + '/' + id,
                        type: "POST",
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            $('#formInput').trigger("reset");
                            $('#kt_modal_new_target').modal('hide');
                            loadpage('', 5);
                            toastr.success("Successful update data!");
                        },
                        error: function(data) {
                            console.log('Error:', data);
                            $('#formInput').trigger("reset");
                            $('#kt_modal_new_target').modal('hide');
                            toastr.error("Failed to update data!");
                        }
                    });
                }
            });

            // proses delete data
            $('body').on('click', '.deleteData', function() {
                var id = $(this).data("id");
                Swal.fire({
                    title: "Are you sure to Delete?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!"
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "DELETE",
                            url: '{{ $title }}' + '/' + id,
                            success: function(data) {
                                loadpage('', 5);
                                toastr.success("Successful delete data!");
                            },
                            error: function(data) {
                                toastr.error("Failed delete data!");
                            }
                        });
                    }
                });
            });


        });
    </script>
@endpush
