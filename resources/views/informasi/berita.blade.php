@extends('templates/header')
@section('contents')
    <!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/c-57.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Berita <br> Program Studi Rekayasa Perangkat Lunak</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Berita</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- News Page Area Start Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    @foreach ($newses as $news)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-img-holder">
                                <img src="{{asset('assets')}}/images/artikelDanBerita/home/{{ $news->image_path }}" class="img-responsive" alt="research" >
                                <ul class="news-date1">
                                    {{-- <li>{{ date('jS M Y',strtotime($news->updated_at)) }}</li> --}}
                                </ul>
                            </div>
                            <h2 class="title-default-left-bold"><a href="{{url("berita/$news->id_berita")}}">{{ $news->judul }}</a></h2>
                            <ul class="title-bar-high news-comments">
                                <li><a><i class="fa fa-user" aria-hidden="true"></i><span>By</span> Admin</a></li>
                                <li><a><i class="fa fa-comments-o" aria-hidden="true"></i><span>(00)</span> Comments</a></li>
                            </ul>
                            <p>
                                <?php
                                echo substr($news->desc,0,150);
                                ?>.....
                            </p>
                            <a href="{{url("berita/$news->id_berita")}}" class="default-big-btn">Read MOre</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form">
                                    <div class="form-group course-name">
                                        <input id="first-name" placeholder="Type Here . . .." class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn-full disabled" type="submit" value="Login">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Artikel RPL</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    @foreach ($posts as $post)
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="{{url("artikel/$post->id_artikel")}}"><img src="{{asset('assets')}}/images/artikelDanBerita/{{$post->image_path}}" class="img-responsive" alt="skilled" width="200" height="40"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>{{ date('jS M Y',strtotime($post->updated_at)) }}</h4>
                                            <p class="module"><?php
                                                echo substr($post->desc,0,50);
                                                ?>.....</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Page Area End Here -->

@endsection
@push('script')
<script src="{{asset('assets')}}/js/select2.min.js" type="text/javascript"></script>
<!-- Nouislider Js -->
<script src="{{asset('assets')}}/vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
<!-- Validator js -->
<script src="{{asset('assets')}}/js/validator.min.js" type="text/javascript"></script>
@endpush
