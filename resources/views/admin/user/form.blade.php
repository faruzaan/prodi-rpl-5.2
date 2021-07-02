
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
                        action="{{ empty($result) ? url('admin/user/add') : url("admin/user/$result->id/edit") }}"
                        method="POST">
                        {{csrf_field()}}
                        @if (!empty($result))
                            {{method_field('patch')}}
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail111">Nama Lengkap</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail111" placeholder="Masukan nama lengkap" value="{{ @$result->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail12">Alamat Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail12" placeholder="Masukan alamat email" value="{{ @$result->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword11">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword11" placeholder="Masukan Password" value="{{ @$result->password }}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{url('admin/user')}}" class="btn btn-danger">Cancel</a>
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
