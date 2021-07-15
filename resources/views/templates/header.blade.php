<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rekayasa Perangkat Lunak - UPI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/cropped-Fav.-UPI-150x150.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    
    @stack('style')
    <!-- Modernizr Js -->
    <script src="{{asset('assets')}}/js/modernizr-2.8.3.min.js"></script>
    <style>
        .unselectable {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:022-7801840"> +62 (22) 7801840 </a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">rpl_cibiru@upi.edu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-textPrimary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="{{url('/')}}"><img class="img-responsive" src="{{asset('assets')}}/images/upilogo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="{{url('/')}}"><img class="img-responsive" src="{{asset('assets')}}/images/newlogo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <nav id="desktop-nav">
                                    <ul>
                                        <li class=""><a href="{{url('/')}}" style="font-family: 'Roboto', sans-serif;">Home</a></li>
                                        <li><a class="unselectable" style="font-family: 'Roboto', sans-serif;">Profil</a>
                                            <ul>
                                                <li class="has-child-menu"><a class="unselectable" style="font-family: 'Roboto', sans-serif;">Tentang Kami</a>
                                                    <ul class="thired-level">
                                                        <li class=""><a href="{{url('/sejarah-upi')}}" style="font-family: 'Roboto', sans-serif;">Sejarah Upi</a></li>
                                                        <li><a href="{{url('/upi-kampus-cibiru')}}" style="font-family: 'Roboto', sans-serif;">UPI Kampus Cibiru</a></li>
                                                        <li><a href="{{url('/program-studi-rpl')}}" style="font-family: 'Roboto', sans-serif;">Program Studi RPL</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('/visi-dan-misi')}}" style="font-family: 'Roboto', sans-serif;">Visi dan Misi</a></li>
                                                <li><a href="{{url('/staff')}}" style="font-family: 'Roboto', sans-serif;">Staff</a></li>
                                                <li><a href="{{url('/struktur-organisasi')}}" style="font-family: 'Roboto', sans-serif;">Struktur Organisasi</a></li>
                                                <li><a href="{{url('/fasilitas')}}" style="font-family: 'Roboto', sans-serif;">Fasilitas</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable" style="font-family: 'Roboto', sans-serif;">Mahasiswa</a>
                                            <ul>
                                                <li><a href="http://ormawa.kd-cibiru.upi.edu/" target="_blank" style="font-family: 'Roboto', sans-serif;">Kegiatan Mahasiswa</a></li>
                                                <li><a href="{{url('/prestasi')}}" style="font-family: 'Roboto', sans-serif;">Prestasi</a></li>
                                                <li><a href="http://pmb.upi.edu/beasiswa/" target="_blank" style="font-family: 'Roboto', sans-serif;">Beasiswa</a></li>
                                                <li><a href="{{url('/alumni')}}" style="font-family: 'Roboto', sans-serif;">Alumni</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable" style="font-family: 'Roboto', sans-serif;">Akademik</a>
                                            <ul>
                                                <li><a href="{{url('/kurikulum')}}" style="font-family: 'Roboto', sans-serif;">Kurikulum</a></li>
                                                <li><a href="{{url('/penelitian')}}" style="font-family: 'Roboto', sans-serif;">Penelitian</a></li>
                                                <li><a href="{{url('/pengabdian')}}" style="font-family: 'Roboto', sans-serif;">Pengabdian</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable" style="font-family: 'Roboto', sans-serif;">Informasi</a>
                                            <ul>
                                                <li><a href="{{url('/berita')}}" style="font-family: 'Roboto', sans-serif;">Berita</a></li>
                                                <li><a href="{{url('/artikel')}}" style="font-family: 'Roboto', sans-serif;">Artikel</a></li>
                                                <li><a href="{{url('/prospek-karir')}}" style="font-family: 'Roboto', sans-serif;">Prospek Karir</a></li>
                                                <li><a href="{{url('/jalur-seleksi-masuk-ptn-upi')}}" style="font-family: 'Roboto', sans-serif;">Jalur Seleksi Masuk PTN UPI</a></li>
                                                <li><a href="http://pmb.upi.edu" target="_blank" style="font-family: 'Roboto', sans-serif;">Pendaftaran Mahasiswa Baru</a></li>
                                                <li><a href="http://ppid.upi.edu" target="_blank" style="font-family: 'Roboto', sans-serif;">Informasi Publik</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/kontak')}}" style="font-family: 'Roboto', sans-serif;">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                        <li><a class="unselectable">Profil</a>
                                            <ul>
                                                <li class="has-child-menu"><a class="unselectable">Tentang Kami</a>
                                                    <ul class="thired-level">
                                                        <li class="active"><a href="{{url('/sejarah-upi')}}">Sejarah Upi</a></li>
                                                        <li><a href="{{url('/upi-kampus-cibiru')}}">UPI Kampus Cibiru</a></li>
                                                        <li><a href="{{url('/program-studi-rpl')}}">Program Studi RPL</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('/visi-dan-misi')}}">Visi dan Misi</a></li>
                                                <li><a href="{{url('/staff')}}">Staff</a></li>
                                                <li><a href="{{url('/struktur-organisasi')}}">Struktur Organisasi</a></li>
                                                <li><a href="{{url('/fasilitas')}}">Fasilitas</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable">Mahasiswa</a>
                                            <ul>
                                                <li><a href="http://ormawa.kd-cibiru.upi.edu/" target="_blank">Kegiatan Mahasiswa</a></li>
                                                <li><a href="{{url('/prestasi')}}">Prestasi</a></li>
                                                <li><a href="{{url('/beasiswa')}}">Beasiswa</a></li>
                                                <li><a href="{{url('/alumni')}}">Alumni</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable">Akademik</a>
                                            <ul>
                                                <li><a href="{{url('/alumni')}}">Kurikulum</a></li>
                                                <li><a href="{{url('/alumni')}}">Penelitian</a></li>
                                                <li><a href="{{url('/alumni')}}">Pengabdian</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="unselectable">Informasi</a>
                                            <ul>
                                                <li><a href="{{url('/berita')}}">Berita</a></li>
                                                <li><a href="{{url('/artikel')}}">Artikel</a></li>
                                                <li><a href="{{url('/prospek-karir')}}">Prospek Karir</a></li>
                                                <li><a href="{{url('/jalur-seleksi-masuk-ptn-upi')}}">Jalur Seleksi Masuk PTN UPI</a></li>
                                                <li><a href="pmb.upi.edu" target="_blank">Pendaftaran Mahasiswa Baru</a></li>
                                                <li><a href="ppid.upi.edu" target="_blank">Informasi Publik</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/kontak')}}">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        @yield('contents')
        @include('templates/footer')
    </div>
    @include('templates/script')
</body>
</html>
