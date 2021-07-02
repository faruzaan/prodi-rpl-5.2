@extends('templates/header')
@section('contents')
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/Gedung-Biru.jpeg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Penelitian <br> Program Studi Rekayasa Perangkat Lunak</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Penelitian</li>
            </ul>
        </div>
    </div>
</div>
@endsection
