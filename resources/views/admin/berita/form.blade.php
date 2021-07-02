
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
                        action="{{ empty($result) ? url('admin/berita/add') : url("admin/berita/$result->id_berita/edit") }}"
                        method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        @if (!empty($result))
                            {{method_field('patch')}}
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail111">Judul</label>
                            <input name="judul" type="text" class="form-control" id="exampleInputEmail111" placeholder="Masukan judul" value="{{ @$result->judul }}">
                        </div>
                        
                        <div class="form-group g-mb-20">
                            <label class="g-mb-10" for="inputGroup2_1">Deskripsi</label><br>
                            <label for="">Gambar belum bisa diisi di dalam deskripsi</label>
                            <textarea name="desc" id="inputGroup2_1" class="form-control form-control-md g-resize-none rounded-0" rows="3" placeholder="Deskripsi"></textarea>
                        </div>
                        @if (empty($result))
                        <div class="form-group mb-20">
                            <label for="exampleInputFile">File input</label>
                            <input name="image" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" value="{{asset('assets')}}/images/{{ @$result->image_path }}">
                        </div>
                        @endif

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword11">Gambar</label>
                            <input name="password" type="text" class="form-control" id="exampleInputPassword11" placeholder="Masukan Password" value="{{ @$result->password }}">
                        </div> --}}
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{url('admin/berita')}}" class="btn btn-danger">Cancel</a>
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
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'desc' );
    </script>
@endpush
