
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
                        action="{{ empty($result) ? url('admin/pendidikan-dosen/add') : url("admin/pendidikan-dosen/$result->id_dosen/edit") }}"
                        method="POST">
                        {{csrf_field()}}
                        @if (!empty($result))
                            {{method_field('patch')}}
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail111">Nama Pendidikan</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail111" placeholder="Masukan pendidikan dosen" value="{{ @$result->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="Dosen">Dosen</label>
                            <select name="id_dosen" class="form-control" id="Dosen">
                                <option value="" style="display:none;">Pilih Dosen</option>
                                @foreach (\App\Dosen::all() as $dosen)
                                <option value="{{$dosen->id_dosen}}" {{ @$result->id_dosen == $dosen->id_dosen ? 'selected' : '' }}>{{$dosen->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{url('admin/pendidikan-dosen')}}" class="btn btn-danger">Cancel</a>
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
