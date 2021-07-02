
@extends('admin/templates/header')
@section('contents')
<div class="row">
    <div class="col-xl-12 box-margin height-card">
        <div class="card card-body">
            <h4 class="card-title">
                {{ empty($result) ? 'Tambah' : 'Edit'}}
                User
            </h4>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form
                        action="{{ empty($result) ? url('admin/dosen/add') : url("admin/dosen/$result->id_dosen/edit") }}"
                        method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        @if (!empty($result))
                            {{method_field('patch')}}
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail111">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail111" placeholder="Masukan nama lengkap" value="{{ @$result->nama }}">
                        </div>
                        @if (empty($result))
                        <div class="form-group mb-20">
                            <label for="exampleInputFile">File input</label>
                            <input name="image" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="{{asset('assets')}}/images/dosen/{{ @$result->image_path }}">
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{url('admin/dosen')}}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script src="js/default-assets/file-upload.js"></script>
    <script src="js/default-assets/basic-form.js"></script>
@endpush
