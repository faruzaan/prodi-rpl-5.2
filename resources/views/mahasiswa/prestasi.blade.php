@extends('templates/header')
@section('contents')
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/f-36.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Prestasi</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Prestasi</li>
            </ul>
        </div>
    </div>
</div>
@endsection
