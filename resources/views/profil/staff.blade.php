@extends('templates/header')
@section('contents')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/team/Dosen-RPL-Cibiru.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Dosen <br> Program Studi Rekayasa Perangkat Lunak</h1>
                <ul>
                    <li><a href="{{url('/')}}">Home</a> -</li>
                    <li>Staff</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Lecturers Page 2 Area Start Here -->
    <div class="lecturers-page2-area">
        <div class="container" id="inner-isotope">
            <div class="row featuredContainer">
                @foreach ($result as $dosen)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 diploma cse">
                    <div class="single-item">
                        <div class="lecturers-item-wrapper">
                            <a href="#"><img class="img-responsive" src="{{asset('assets')}}/images/dosen/{{$dosen->image_path}}" alt="team"></a>
                            <div class="lecturers-content-wrapper">
                                <h3><a href="#">{{$dosen->nama}}</a></h3>
                                <span>Dosen RPL</span>
                                <p style="color: transparent" class="unselectable">Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                <div class="apply-btn-area">
                                    <a href="{{url("dosen/$dosen->id_dosen")}}" class="apply-now-btn">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Lecturers Page 2 Area End Here -->
@endsection
