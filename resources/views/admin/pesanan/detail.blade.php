{{-- <h3>Detail Transaksi: {{ $transaksi->order_id }}</h3>
<p>Nama User: {{ $transaksi->user->name }}</p>
<p>Total Harga: Rp{{ number_format($transaksi->total_price, 0, ',', '.') }}</p>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produkList as $index => $produk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $produk->namaProduk }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}

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
                        Detail Transaksi {{ $transaksi->order_id }}</h1>
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
                        <li class="breadcrumb-item text-muted">Detail Transaksi {{ $transaksi->order_id }}</li>
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
                            <p>Nama User: {{ $transaksi->user->name }}</p>
                            <p>Total Harga: Rp{{ number_format($transaksi->total_price, 0, ',', '.') }}</p>
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
                                    placeholder="Search" id="pencarian" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        {{-- <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <!--begin::Add product-->
                            <a onclick="createForm()" class="btn btn-primary">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Add New
                            </a>
                            <!--end::Add product-->
                        </div> --}}
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
                                                <th>Nama Produk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produkList as $index => $produk)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $produk->namaProduk }}</td>
                                                </tr>
                                            @endforeach
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
@endsection

@push('jsScript')
    @include('admin._layouts.js.js')
@endpush
