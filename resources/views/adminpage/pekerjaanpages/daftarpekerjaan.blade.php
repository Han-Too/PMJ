@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Pekerjaan')

@section('tambahan')
    <style>
        .table-row {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <!--begin::Content wrapper-->
    <div id="kt_app_content" class="content d-flex flex-column flex-column-fluid">
        <!--begin::Content container-->

        <div id="kt_app_content_container" class="container-fluid">
            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-bold mb-10">

            </ol>
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables widget 14-->
                    <div class="card shadow-lg">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">List Pekerjaan</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Pekerjaan</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn"
                                            class="btn btn-success justify-content-center">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span>
                                                Tambah
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-800px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            data-bs-dismiss="modal">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--begin::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y pt-0 pb-15">
                                                        <!--begin::Wrapper-->
                                                        <div class="mw-lg-600px mx-auto">
                                                            <!--begin::Heading-->
                                                            <div class="mb-13 text-center">
                                                                <!--begin::Title-->
                                                                <h1 class="mb-3">Masukan Jumlah Pekerjaan</h1>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Input group-->
                                                            <form action="/pekerjaan/kolomstore" method="post">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="mb-10">
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex">
                                                                        <input id="kt_share_earn_link_input" type="text"
                                                                            class="form-control form-control-solid me-3 flex-grow-1"
                                                                            name="kolom"
                                                                            placeholder="Masukan Jumlah Kolom" required />
                                                                    </div>
                                                                    <div class="d-grid gap-2 mt-10">
                                                                        <button type="submit" class="btn btn-success"
                                                                            type="button">Lanjutkan</button>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                            </form>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                    </div>
                                    {{-- <div class="p-2">
                                        <a href="/admin/kerja/cetak"
                                            class="btn btn-icon btn-info btn-active-color-primary justify-content-center">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path fill="#FFF"
                                                        d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div> --}}
                                </div>


                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class='table table-bordered table-condensed table-striped table-hover'>
                                    <!--begin::Table head-->
                                    <thead class="fw-bold bg-success">
                                        <tr style="line-height: 40px">
                                            <th class="p-0 min-w-150px text-center">Judul Pekerjaan</th>
                                            <th class="p-0 min-w-200px text-center">Total Harga Pekerjaan</th>
                                            {{-- <th class="p-0 min-w-150px text-center">Bahan</th>
                                            <th class="p-0 min-w-100px text-center">Luas</th>
                                            <th class="p-0 min-w-100px text-center">Harga</th> --}}
                                            <th class="p-0 min-w-150px text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($kerja as $key => $kerja)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $kerja->judul }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                Rp. {{ $kerja->totalharga }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2"><a
                                                                href="/admin/pekerjaan/{{ $kerja->id }}/edit"
                                                                class="btn btn-success btn-lg">Edit</a></div>
                                                        <div class="p-2"><a
                                                                onclick="deleteConfirmation({{ $kerja->id }})"
                                                                id="delete-canopy" class="btn btn-danger btn-lg"
                                                                data-kt-ecommerce-product-filter="delete_row">Hapus</a>
                                                        </div>
                                                        <div class="p-2"><a target="_blank"
                                                            href="/admin/pekerjaan/{{ $kerja->id }}/cetak" class="btn btn-info btn-lg">Cetak</a>
                                                    </div>
                                                    </div>
                                                    {{-- <a href="/admin/pekerjaan/{{ $kerja->id }}/edit"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <button onclick="deleteConfirmation({{ $kerja->id }})"
                                                        id="delete-canopy"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button> --}}
                                                </td>
                                            </tr>

                                            {{-- <tr>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $kerja->judul }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $kerja->email }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $kerja->telepon }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    @if ($kerja->status == 'aktif')
                                                        <span class="badge badge-light-success">Aktif</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Tidak Aktif</span>
                                                    @endif

                                                </td>
                                                <td class="text-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                <path fill="currentColor"
                                                                    d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM432 256c0 79.5-64.5 144-144 144s-144-64.5-144-144s64.5-144 144-144s144 64.5 144 144zM288 192c0 35.3-28.7 64-64 64c-11.5 0-22.3-3-31.6-8.4c-.2 2.8-.4 5.5-.4 8.4c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6z" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="/admin/kerja/{{ $kerja->id }}/edit"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <button onclick="deleteConfirmation({{ $kerja->id }})"
                                                        id="delete-canopy"
                                                        class="btn btn-icon btn-bg-light btn-active-color-success btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr> --}}

                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <span class="fw-bold">
                                                        Data Masih Kosong
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>

                            <div class="my-4">
                                <div class="fw-bold fs-3">Data Pesanan</div>
                            </div>
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class='table table-bordered table-condensed table-striped table-hover'>
                                    <!--begin::Table head-->
                                    <thead class="fw-bold bg-success">
                                        <tr style="line-height: 40px">
                                            <th class="p-0 min-w-150px text-center">Pemesan</th>
                                            <th class="p-0 min-w-150px text-center">Judul Pesanan</th>
                                            <th class="p-0 min-w-150px text-center">Total Harga</th>
                                            <th class="p-0 min-w-150px text-center">Status</th>
                                            <th class="p-0 min-w-150px text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($pesanan as $key => $pesanan)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ $pesanan->name }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                {{ substr($pesanan->namapekerjaan,3) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                                Rp. {{ $pesanan->totalharga }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-4">
                                                            @if ($pesanan->status == 'pending')
                                                                <div class="badge badge-warning">Pending</div>
                                                            @else
                                                            <div class="badge badge-success">Disetujui</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                @if ($pesanan->status == 'pending')
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2">
                                                                
                                                            <a href="/admin/pekerjaan/{{ $pesanan->namapekerjaan }}/acc"
                                                                class="btn btn-success">Setujui</a></div>
                                                                {{-- <div class="p-2"><a
                                                                    onclick="deleteConfirmation({{ $pesanan->id }})"
                                                                    id="delete-canopy" class="btn btn-danger btn-lg"
                                                                    data-kt-ecommerce-product-filter="delete_row">Hapus</a>
                                                                </div>
                                                                <div class="p-2"><a target="_blank"
                                                                    href="/admin/pekerjaan/{{ $pesanan->id }}/cetak" class="btn btn-info btn-lg">Cetak</a> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <span class="fw-bold">
                                                        Data Masih Kosong
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end: Card Body-->
                        <div class="card-footer border-top p-9">

                        </div>
                    </div>

                </div>
                <!--end::Tables widget 14-->
            </div>
            <!--end::Col-->

        </div>

        <!--end::Row-->

    </div>
    <!--end::Content wrapper-->
@endsection

@section('script')
    <script>
        $(document).ready(function($) {
            $(".table-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
    </script>
    <script>
        // ini untuk konfirmasi delete
        function deleteConfirmation(id) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                width: '350px',
            })
            Swal.fire({
                title: 'Are you sure ?',
                text: "Data Yang Telah Dihapus Tidak Akan Bisa DiKembalikan !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: "get",
                        url: `{{ url('/admin/pekerjaan/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Data pekerjaan has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
