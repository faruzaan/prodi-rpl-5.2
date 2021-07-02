@extends('templates/header')
@section('contents')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/c-57.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Prospek Karir <br> Program Studi Rekayasa Perangkat Lunak</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Prospek Karir</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <h1 class="mx-auto">Bidang Ilmu yang Dipelajari</h1>
                    <div class="col-lg-6 pt-5">
                        <p><span class="fa fa-user-circle-o"></span> Arsitektur Komputer <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Game Development <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Augmented Reality <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Augmented Reality <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Project Management <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Matematika dan Statistika <br></p>
                    </div>
                    <div class="col-lg-6 pt-5">
                        <p><span class="fa fa-user-circle-o"></span> Algoritma dan Pemrograman <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Data Mining <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Internet of Things <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Technopreneur <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Artificial Intelligence <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Software Quality Assurance <br></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <img src="{{asset('assets')}}/img/undraw_teaching_f1cm.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="{{asset('assets')}}/img/undraw_businessman_97x4.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="mx-auto">Prospek Kerja Lulusan</h1>
                <div class="row">
                    <div class="col-lg-6 pt-5">
                        <p><span class="fa fa-user-circle-o"></span> Project Manager <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Web Programmer <br></p>
                        <p><span class="fa fa-user-circle-o"></span> IT Consultant <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Researcher <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Software Engineer / Programmer <br></p>
                    </div>
                    <div class="col-lg-6 pt-5">
                        <p><span class="fa fa-user-circle-o"></span> System Analyst <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Software Tester <br></p>
                        <p><span class="fa fa-user-circle-o"></span> IT Trainer <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Game/Multimedia Developer <br></p>
                        <p><span class="fa fa-user-circle-o"></span> Embedded System Developer <br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
