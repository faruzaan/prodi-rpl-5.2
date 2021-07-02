@extends('templates/header')
@push('style')
    <link rel="stylesheet" href="{{asset('assets')}}/admin/style.css">
@endpush
@section('contents')
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/f-36.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Kurikulum</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Kurikulum</li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-us-page1-area">
    <div class="container">
        <div class="col-xl-12 height-card box-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Mata Kuliah</h2>
                    <ul class="nav nav-tabs nav-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#semester1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                Semester 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester3" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester4" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester5" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 5
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester6" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 6
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester7" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 7
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#semester8" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Semester 8
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="semester1">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="6" class="text-center">1</td>
                                            <td class="text-center">KU100</td>
                                            <td class="text-center">PENDIDIKAN AGAMA ISLAM*</td>
                                            <td rowspan="6" class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU101</td>
                                            <td class="text-center">PENDIDIKAN AGAMA KRISTEN PROTESTAN*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU102</td>
                                            <td class="text-center">PENDIDIKAN AGAMA KATOLIK*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU103</td>
                                            <td class="text-center">PENDIDIKAN AGAMA HINDU*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU104</td>
                                            <td class="text-center">PENDIDIKAN AGAMA BUDHA*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU109</td>
                                            <td class="text-center">PENDIDIKAN AGAMA KHONGHUCU*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">KU105</td>
                                            <td class="text-center">PENDIDIKAN KEWARGANEGARAAN</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">KU106</td>
                                            <td class="text-center">PENDIDIKAN BAHASA INDONESIA</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">MA100</td>
                                            <td class="text-center">MATEMATIKA, SAINS, TEKNOLOGI, DAN REKAYASA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL100</td>
                                            <td class="text-center">PENGANTAR REKAYASA PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL101</td>
                                            <td class="text-center">BAHASA INGGRIS</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">RL102</td>
                                            <td class="text-center">DASAR PEMROGRAMAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center">RL103</td>
                                            <td class="text-center">KALKULUS</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">22</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester2">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td  class="text-center">1</td>
                                            <td class="text-center">KU110</td>
                                            <td class="text-center">PENDIDIKAN PANCASILA</td>
                                            <td  class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="text-center">2</td>
                                            <td class="text-center">KU108</td>
                                            <td class="text-center">PENDIDIKAN JASMANI DAN OLAHRAGA*</td>
                                            <td rowspan="2" class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU119</td>
                                            <td class="text-center">PENDIDIKAN KESENIAN*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">MA200</td>
                                            <td class="text-center">APLIKASI MATEMATIKA, SAINS, TEKNOLOGI, DAN REKAYASA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">HU300</td>
                                            <td class="text-center">PENGANTAR PENDIDIKAN</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL104</td>
                                            <td class="text-center">PENGANTAR TEKNOLOGI INFORMASI</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL105</td>
                                            <td class="text-center">STRUKTUR DATA DAN ALGORITMA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">RL106</td>
                                            <td class="text-center">MATEMATIKA DISKRIT</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center">RL107</td>
                                            <td class="text-center">PEMODELAN PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">20</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL200</td>
                                            <td class="text-center">BASIS DATA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL201</td>
                                            <td class="text-center">INTERAKSI MANUSIA DAN KOMPUTER</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL202</td>
                                            <td class="text-center">ANALISIS KEBUTUHAN DAN PERANCANGAN PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL203</td>
                                            <td class="text-center">KOMPUTER DAN MASYARAKAT</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL204</td>
                                            <td class="text-center">ARSITEKTUR DAN ORGANISASI KOMPUTER</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL205</td>
                                            <td class="text-center">LOGIKA INFORMATIKA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">RL206</td>
                                            <td class="text-center">ALJABAR LINIER</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">19</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL207</td>
                                            <td class="text-center">SISTEM OPERASI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL208</td>
                                            <td class="text-center">TEKNOLOGI BASIS DATA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL209</td>
                                            <td class="text-center">PEMROGRAMAN BERORIENTASI OBJEK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL210</td>
                                            <td class="text-center">PEMROGRAMAN WEB</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL211</td>
                                            <td class="text-center">JARINGAN KOMPUTER</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL212</td>
                                            <td class="text-center">KONSTRUKSI PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">RL213</td>
                                            <td class="text-center">BISNIS TEKNOLOGI INFORMASI</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">20</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL300</td>
                                            <td class="text-center">PENGEMBANGAN APLIKASI TERDISTRIBUSI</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL301</td>
                                            <td class="text-center">PEMROGRAMAN MOBILE</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL302</td>
                                            <td class="text-center">KONSEP VERIFIKASI DAN VALIDASI PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL303</td>
                                            <td class="text-center">KECERDASAN BUATAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL304</td>
                                            <td class="text-center">MANAJEMEN PROYEK PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL305</td>
                                            <td class="text-center">UBIQUITOUS COMPUTING</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">RL306</td>
                                            <td class="text-center">SISTEM INFORMASI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">20</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester6">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="6" class="text-center">1</td>
                                            <td class="text-center">KU300</td>
                                            <td class="text-center">PENDIDIKAN AGAMA ISLAM*</td>
                                            <td rowspan="6" class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU301</td>
                                            <td class="text-center">SEMINAR PENDIDIKAN AGAMA KRISTEN PROTESTAN*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU302</td>
                                            <td class="text-center">SEMINAR PENDIDIKAN AGAMA KATOLIK*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU303</td>
                                            <td class="text-center">SEMINAR PENDIDIKAN AGAMA HINDU*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU304</td>
                                            <td class="text-center">SEMINAR PENDIDIKAN AGAMA BUDHA*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">KU309</td>
                                            <td class="text-center">SEMINAR PENDIDIKAN AGAMA KHONGHUCU*</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">KU400</td>
                                            <td class="text-center">KULIAH KERJA NYATA</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL307</td>
                                            <td class="text-center">PROBABILITAS DAN STATISTIKA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL308</td>
                                            <td class="text-center">PENJAMINAN DAN KEAMANAN INFORMASI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">19</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester7">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL400</td>
                                            <td class="text-center">ETIKA PROFESI</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL401</td>
                                            <td class="text-center">KAPITA SELEKTA</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL402</td>
                                            <td class="text-center">METODOLOGI PENELITIAN REKAYASA PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">MATA KULIAH PILIHAN</td>
                                            <td class="text-center">3</td>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">16</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="semester8">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL590</td>
                                            <td class="text-center">PRAKTIK PENGALAMAN LAPANGAN (PPL)</td>
                                            <td class="text-center">4</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL598</td>
                                            <td class="text-center">SKRIPSI</td>
                                            <td class="text-center">6</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">SIDANG</td>
                                            <td class="text-center">0</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th colspan="3" class="text-center">TOTAL SKS</th>
                                            <th class="text-center">10</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <p>* Pilih Salah Satu</p>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
        <div class="col-xl-12 height-card box-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Mata Kuliah Keahlian Pilihan</h2>
                    <ul class="nav nav-tabs nav-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#rdib" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                Bidang Rekayasa Data & Inteligensi Bisnis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pmg" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Pemrograman Multimedia & Game
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#uc" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Bidang Ubiquitous Computing
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="rdib">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL411</td>
                                            <td class="text-center">PEMBELAJARAN MESIN</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL412</td>
                                            <td class="text-center">DATA MINING DAN WAREHOUSE</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL413</td>
                                            <td class="text-center">TEXT & WEB MINING</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL414</td>
                                            <td class="text-center">INFORMATION RETRIEVAL</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL415</td>
                                            <td class="text-center">ANALISIS BIG DATA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL416</td>
                                            <td class="text-center">BISNIS INTELIGENSI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="pmg">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL421</td>
                                            <td class="text-center">SISTEM MULTIMEDIA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL422</td>
                                            <td class="text-center">PENGENALAN DESAIN GAME</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL423</td>
                                            <td class="text-center">TEKNIK ANIMASI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL424</td>
                                            <td class="text-center">PENGEMBANGAN GAME</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL425</td>
                                            <td class="text-center">PENGEMBANGAN APLIKASI MEDIA INTERAKTIF</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL426</td>
                                            <td class="text-center">TEORI INTELIGENSI GAME</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="uc">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="  text-white" style="background: #426CF4;">
                                            <th class="text-center" style="color: #ffffff">NO</th>
                                            <th class="text-center" style="color: #ffffff">KODE MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">NAMA MATA KULIAH</th>
                                            <th class="text-center" style="color: #ffffff">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">RL431</td>
                                            <td class="text-center">KOMPUTASI AWAN</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">RL432</td>
                                            <td class="text-center">MIXED REALITY</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">RL433</td>
                                            <td class="text-center">INTERNET OF THINGS</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">RL434</td>
                                            <td class="text-center">DESAIN INTERAKSI PENGGUNA</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">RL435</td>
                                            <td class="text-center">SISTEM KENDALI</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">RL436</td>
                                            <td class="text-center">	PRIVASI & KEAMANAN PERANGKAT LUNAK</td>
                                            <td class="text-center">3</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>4</th>
                                            <td>Larry</td>
                                            <td>Jellybean</td>
                                            <td>@lajelly</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p>* Pilih Salah Satu</p>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>


@endsection
@push('script')
    <!-- Plugins Js -->
    <script src="{{asset('assets')}}/admin/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/bundle.js"></script>

    <!-- Active JS -->
    <script src="{{asset('assets')}}/admin/js/canvas.js"></script>
    <script src="{{asset('assets')}}/admin/js/collapse.js"></script>
    <script src="{{asset('assets')}}/admin/js/settings.js"></script>
    <script src="{{asset('assets')}}/admin/js/template.js"></script>
    <script src="{{asset('assets')}}/admin/js/default-assets/active.js"></script>
@endpush
