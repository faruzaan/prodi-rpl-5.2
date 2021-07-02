@push('style')
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/default-assets/select.bootstrap4.css">
@endpush
@extends('admin/templates/header')
@section('contents')
    <div class="row">
        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body">
                    @include('admin/templates/feedback')
                    <h4 class="card-title mb-2">Tabel Publikasi Dosen</h4>
                    <a class="btn btn-rounded btn-success" href="{{url('admin/publikasi-dosen/add')}}">Tambah</a>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publikasis as $publikasi)
                                <tr>
                                    <td>{{ !empty($i) ? ++$i : $i = 1}}</td>
                                    <td>{{ $publikasi->nama }}</td>
                                    <td>{{ $publikasi->dosen->nama }}</td>
                                    <td>
                                        <a href="{{url("/admin/publikasi-dosen/$publikasi->id_publikasi/edit")}}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{url("/admin/publikasi-dosen/$publikasi->id_publikasi/delete")}}"
                                            method="POST"
                                            style="display:inline">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
@push('script')
    <script src="{{asset('assets')}}/admin/js/default-assets/jquery.datatables.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/datatables.bootstrap4.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/datatable-responsive.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/datatable-button.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/button.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/button.html5.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/button.flash.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/button.print.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/datatables.keytable.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/datatables.select.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/demo.datatable-init.js"></script>
@endpush
