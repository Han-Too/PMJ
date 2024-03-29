@extends('adminpage.index')

@extends('adminpage.adminlayout.headhtml')
@section('headjudul', 'Jumbotron')

@section('tambahan')
    <style>
        .table-row {
            cursor: pointer;
        }
        td {
            vertical-align: middle;
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
                                <span class="card-label fw-bold fs-3 mb-1">List Gambar Jumbotron</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Tambah atau Edit Data Jumbotron</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <a href="/admin/jumbotron/create"
                                    class="btn btn-success btn-active-color-primary justify-content-center">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    Tambah
                                    <!--end::Svg Icon-->
                                </a>
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
                                            <th class="p-0 min-w-350px text-center">Judul</th>
                                            <th class="p-0 min-w-400px text-center">Foto</th>
                                            <th class="p-0 min-w-150px text-center">Tools</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @forelse ($jumbotron as $key => $jumbo)
                                            <tr>
                                                {{-- <td class="text-start">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-45px me-5">
                                                            <img alt="Pic" src="{{ asset('Images/uploads/jumbotron') }}/{{ $jumbo->foto }}" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Name-->
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <span class="text-dark fw-bold  mb-1 fs-6">
                                                                {{ $jumbo->judul }}
                                                            </span>
                                                            <span class="text-muted  fw-semibold text-muted d-block fs-7">
                                                                <span class="text-dark">Kode</span>:
                                                                {{ $jumbo->id }}</span>
                                                        </div>
                                                        <!--end::Name-->
                                                    </div>
                                                </td> --}}
                                                <td class="text-center">
                                                    <span class="text-dark fw-bold  d-block mb-1 fs-6">
                                                        {{ $jumbo->judul }}
                                                    </span>
                                                </td>
                                                <td class="text-start">
                                                    <img alt="Pic" width="500" height="auto" src="{{ asset('Images/uploads/jumbotron') }}/{{ $jumbo->foto }}" />
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex flex-row justify-content-center">
                                                        <div class="p-2"><a href="/admin/jumbotron/{{ $jumbo->id }}/edit"
                                                            class="btn btn-success btn-lg">Edit</a></div>
                                                        <div class="p-2"><a onclick="deleteConfirmation({{ $jumbo->id }})"
                                                            id="delete-canopy" class="btn btn-danger btn-lg"
                                                            data-kt-ecommerce-product-filter="delete_row">Hapus</a></div>
                                                    </div>
                                                    {{-- <a href="/admin/jumbotron/{{ $jumbo->id }}/edit"
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
                                                    <button onclick="deleteConfirmation({{$jumbo->id}})" id="delete-canopy"
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
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center">
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
                        url: `{{ url('/admin/jumbotron/${id}/destroy') }}`,
                        success: function(data) {
                            setTimeout(function() {
                                location.reload(1);
                            }, 300);
                            Toast.fire({
                                icon: 'success',
                                title: 'Data Jumbotron has been deleted !'
                            });
                        }
                    });

                }
            })
        }
    </script>
@endsection
