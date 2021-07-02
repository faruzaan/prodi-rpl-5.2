@extends('templates/header')
@section('contents')
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/c-57.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Visi dan Misi <br> Program Studi Rekayasa Perangkat Lunak</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Visi dan Misi</li>
            </ul>
        </div>
    </div>
</div>
<div class="about-page1-area">
    <div class="container">
        <div class="row about-page1-inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-content-holder">
                    <div class="content-box">
                        <h2>Visi</h2>
                        <p class="text-justify">Visi Program Studi Rekayasa Perangkat Lunak Kampus UPI Cibiru adalah menjadi program studi pelopor dan unggul dalam pengembangan keilmuan rekayasa perangkat lunak tahun 2029.</p>
                    </div>
                    <div class="content-box">
                        <h2>Misi</h2>
                        <p class="text-justify">Misi Program Studi Rekayasa Perangkat Lunak Kampus UPI Cibiru merupakan penjabaran penyelenggaraan kegiatan pendidikan dan pengajaran, penelitian, dan pengabdian kepada masyarakat yang dilakukan dalam upaya mewujudkan visi UPI. Misi Program Studi Rekayasa Perangkat Lunak adalah sebagai berikut.</p>
                        <ol>
                            <li>Menyelenggarakan layanan pendidikan dan pengajaran bidang keahlian rekayasa perangkat lunak untuk menghasilkan lulusan dengan kompetensi akademik yang tinggi, memiliki kemampuan kreatif dan inovatif, dan profesional, serta memiliki jiwa wirausaha;</li>
                            <li>Melaksanakan program penelitian untuk mendukung proses pembelajaran yang bermutu tinggi serta berkontribusi pada pengembangan keilmuan, aplikasi, dan produk-produk berbasis teknologi informasi dan komunikasi, serta melakukan publikasi hasil penelitian;</li>
                            <li>Memanfaatkan ilmu dan produk teknologi informasi dan komunikasi dalam melaksanakan pengabdian kepada masyarakat berbasis hasil penelitian yang dapat memberikan kontribusi untuk memajukan masyarakat dalam meningkatkan pengetahuan dan pemanfaatan teknologi informasi; dan</li>
                            <li>Mengembangkan, menerapkan, dan menyebarluaskan teknologi di bidang rekayasa perangkat lunak yang berbasis pada kebutuhan masyarakat, dunia usaha, dan industri.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-img-holder">
                    <img src="{{asset('assets')}}/img/d-56.jpg" class="img-responsive" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
