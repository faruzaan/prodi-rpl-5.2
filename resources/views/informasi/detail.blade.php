@push('style')
    <style>
        .reset-this {
            animation : none;
            animation-delay : 0;
            animation-direction : normal;
            animation-duration : 0;
            animation-fill-mode : none;
            animation-iteration-count : 1;
            animation-name : none;
            animation-play-state : running;
            animation-timing-function : ease;
            backface-visibility : visible;
            background : 0;
            background-attachment : scroll;
            background-clip : border-box;
            background-color : transparent;
            background-image : none;
            background-origin : padding-box;
            background-position : 0 0;
            background-position-x : 0;
            background-position-y : 0;
            background-repeat : repeat;
            background-size : auto auto;
            border : 0;
            border-style : none;
            border-width : medium;
            border-color : inherit;
            border-bottom : 0;
            border-bottom-color : inherit;
            border-bottom-left-radius : 0;
            border-bottom-right-radius : 0;
            border-bottom-style : none;
            border-bottom-width : medium;
            border-collapse : separate;
            border-image : none;
            border-left : 0;
            border-left-color : inherit;
            border-left-style : none;
            border-left-width : medium;
            border-radius : 0;
            border-right : 0;
            border-right-color : inherit;
            border-right-style : none;
            border-right-width : medium;
            border-spacing : 0;
            border-top : 0;
            border-top-color : inherit;
            border-top-left-radius : 0;
            border-top-right-radius : 0;
            border-top-style : none;
            border-top-width : medium;
            bottom : auto;
            box-shadow : none;
            box-sizing : content-box;
            caption-side : top;
            clear : none;
            clip : auto;
            color : inherit;
            columns : auto;
            column-count : auto;
            column-fill : balance;
            column-gap : normal;
            column-rule : medium none currentColor;
            column-rule-color : currentColor;
            column-rule-style : none;
            column-rule-width : none;
            column-span : 1;
            column-width : auto;
            content : normal;
            counter-increment : none;
            counter-reset : none;
            cursor : auto;
            direction : ltr;
            display : inline;
            empty-cells : show;
            float : none;
            font : normal;
            font-family : inherit;
            font-size : medium;
            font-style : normal;
            font-variant : normal;
            font-weight : normal;
            height : auto;
            hyphens : none;
            left : auto;
            letter-spacing : normal;
            line-height : normal;
            list-style : none;
            list-style-image : none;
            list-style-position : outside;
            list-style-type : disc;
            margin : 0;
            margin-bottom : 0;
            margin-left : 0;
            margin-right : 0;
            margin-top : 0;
            max-height : none;
            max-width : none;
            min-height : 0;
            min-width : 0;
            opacity : 1;
            orphans : 0;
            outline : 0;
            outline-color : invert;
            outline-style : none;
            outline-width : medium;
            overflow : visible;
            overflow-x : visible;
            overflow-y : visible;
            padding : 0;
            padding-bottom : 0;
            padding-left : 0;
            padding-right : 0;
            padding-top : 0;
            page-break-after : auto;
            page-break-before : auto;
            page-break-inside : auto;
            perspective : none;
            perspective-origin : 50% 50%;
            position : static;
            /* May need to alter quotes for different locales (e.g fr) */
            quotes : '\201C' '\201D' '\2018' '\2019';
            right : auto;
            tab-size : 8;
            table-layout : auto;
            text-align : inherit;
            text-align-last : auto;
            text-decoration : none;
            text-decoration-color : inherit;
            text-decoration-line : none;
            text-decoration-style : solid;
            text-indent : 0;
            text-shadow : none;
            text-transform : none;
            top : auto;
            transform : none;
            transform-style : flat;
            transition : none;
            transition-delay : 0s;
            transition-duration : 0s;
            transition-property : none;
            transition-timing-function : ease;
            unicode-bidi : normal;
            vertical-align : baseline;
            visibility : visible;
            white-space : normal;
            widows : 0;
            width : auto;
            word-spacing : normal;
            z-index : auto;
            /* basic modern patch */
            all: initial;
            all: unset;
        }

        /* basic modern patch */

        #reset-this-root {
            all: initial;
            * {
                all: unset;
            }
        }
    </style>
@endpush
@extends('templates/header')
@section('contents')
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img src="{{asset('assets')}}/images/artikelDanBerita/{{$result->image_path}}" class="img-responsive" alt="research">
                            <ul class="news-date1">
                                {{-- <li>{{ date('jS M Y',strtotime($result->updated_at)) }}</li> --}}
                            </ul>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a>{{$result->judul}}</a></h2>
                        <ul class="title-bar-high news-comments">
                            <li><a><i class="fa fa-user" aria-hidden="true"></i><span>By</span> Admin</a></li>
                            <li><a><i class="fa fa-comments-o" aria-hidden="true"></i><span>(00)</span> Comments</a></li>
                        </ul>
                        <p id="reset-this-root">
                            @php
                                echo $result->desc;
                            @endphp
                        </p>
                        <ul class="news-social">
                            <li><a href="https://www.facebook.com/rplupi" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/upi_rpl" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/school/universitaspendidikanindonesia-upi/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCueWOgTEtpw-mUmbIElRlMA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/rpl_upi/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="course-details-comments">
                            <h3 class="sidebar-title">(0) Comments</h3>
                            {{-- <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="Comments" src="img/course/16.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <h3><a href="#">Greg Christman</a></h3>
                                    <h4>Excellent course!</h4>
                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletogimply dummy and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="Comments" src="img/course/17.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <h3><a href="#">Lora Ekram</a></h3>
                                    <h4>Excellent course!</h4>
                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletogimply dummy and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="Comments" src="img/course/18.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <h3><a href="#">Mike Jones</a></h3>
                                    <h4>Excellent course!</h4>
                                    <p>Rimply dummy text of the printinwhen an unknown printer took eype and scramb relofeletogimply dummy and typesetting industry.</p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="leave-comments">
                            <h3 class="sidebar-title">Leave A Comment</h3>
                            <div class="row">
                                <div class="contact-form">
                                    <form>
                                        <fieldset>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Website" class="form-control">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group margin-bottom-none">
                                                    <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                            <h3 class="sidebar-title">Latest Posts</h3>
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
@endsection
