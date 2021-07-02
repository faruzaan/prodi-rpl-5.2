@extends('templates/header')
@section('contents')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/c-57.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Jalur Masuk PTN UPI <br> Universitas Pendidikan Indonesia</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Jalur Masuk PTN UPI</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<div class="contact-us-page1-area">
    <div class="container">
        <div class="col-xl-12 height-card box-margin">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#snmptn" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                SELEKSI NASIONAL MASUK PERGURUAN TINGGI NEGERI (SNMPTN)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sbmptn" data-toggle="tab" aria-expanded="false" class="nav-link">
                                SELEKSI BERSAMA MASUK PERGURUAN TINGGI NEGERI (SBMPTN)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sm" data-toggle="tab" aria-expanded="false" class="nav-link">
                                SELEKSI MANDIRI (SM) UPI
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#prestasi" data-toggle="tab" aria-expanded="false" class="nav-link">
                                PRESTASI ISTIMEWA
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="snmptn">
                            <div class="container">
                                <h1>Ketentuan Umum</h1>
                                <ol>
                                    <li>SNMPTN dilakukan berdasarkan hasil penelusuran prestasi akademik dengan menggunakan rapor dan portofolio akademik. Rapor yang digunakan adalah semester satu sampai dengan semester lima bagi SMA/SMK/MA dengan masa belajar tiga tahun atau semester satu sampai dengan semester tujuh bagi SMK dengan masa belajar empat tahun.</li>
                                    <li>Sekolah yang siswanya mengikuti SNMPTN harus mempunyai Nomor Pokok Sekolah Nasional (NPSN) dan mengisikan data prestasi siswa di PDSS dengan lengkap dan benar.</li>
                                    <li>Siswa yang berhak mengikuti seleksi adalah <strong>siswa yang memiliki Nomor Induk Siswa Nasional (NISN)</strong>, memiliki prestasi unggul, dan rekam jejak prestasi akademik di PDSS.</li>
                                    <li>Siswa yang akan mendaftar SNMPTN wajib membaca informasi pada laman PTN pilihan tentang ketentuan terkait dengan penerimaan mahasiswa baru di PTN tersebut.</li>
                                </ol>
                                <h1>Ketentuan Khusus</h1>
                                <h3>Persyaratan Sekolah</h3>
                                <p>Sekolah yang siswanya berhak mengikuti SNMPTN adalah:</p>
                                <ol>
                                    <li>SMA/MA/SMK yang mempunyai NPSN.</li>
                                    <li>Mengisi Pangkalan Data Sekolah dan Siswa (PDSS).</li>
                                </ol>
                                <h3>Persyaratan Siswa Pendaftar</h3>
                                <p>Siswa pendaftar yang berhak mengikuti SNMPTN adalah:</p>
                                <li>Siswa SMA/MA/SMK kelas terakhir (kelas 12) pada tahun 2020 yang memiliki prestasi unggul.</li>
                                <li>Memiliki NISN yang terdaftar di PDSS</li>
                                <li>Memiliki nilai rapor semester 1 s.d. 5 yang telah diisikan oleh sekolah di PDSS atau memiliki nilai rapor semester 1 s.d. 7 bagi SMK dengan masa belajar empat tahun.</li>
                                <li>Memiliki prestasi akademik dan memenuhi persyaratan yang ditentukan oleh masing-masing PTN.</li>
                                <h3>Penerimaan di PTN</h3>
                                <p>Siswa pendaftar diterima di PTN, jika:</p>
                                <ol>
                                    <li>lulus satuan pendidikan SMA/SMK/MA;</li>
                                    <li>memiliki akun di LTMPT; dan</li>
                                    <li>dinyatakan lulus SNMPTN 2020; dan</li>
                                    <li>lolos verifikasi data serta memenuhi persyaratan lain yang ditentukan oleh masing-masing PTN penerima.</li>
                                </ol>
                            </div>

                        </div>
                        <div class="tab-pane" id="sbmptn">
                            <div class="container">
                                <h1>Persyaratan Peserta</h1>
                                <ol>
                                    <li>Siswa SMA/MA/SMK/Sederajat <strong>lulusan tahun 2018, 2019</strong> harus sudah memiliki ijazah.</li>
                                    <li>Bagi siswa SMA/MA/SMK/Sederajat <strong>lulusan tahun 2020</strong> memiliki Surat Keterangan Lulus Pendidikan Menengah, sekurang-kurangnya memuat informasi jati diri dan pasfoto berwarna terbaru yang bersangkutan dengan ditandatangani oleh kepala sekolah dan dibubuhi cap stempel yang sah.</li>
                                    <li><strong>Memiliki Nilai UTBK.</strong></li>
                                    <li>Memiliki kesehatan yang memadai sehingga tidak mengganggu kelancaran proses studi.</li>
                                    <li>Memiliki NISN.</li>
                                    <li>Biaya UTBK ditanggung oleh peserta dan subsidi pemerintah.</li>
                                    <li>Tidak lulus jalur SNMPTN 2020.</li>
                                </ol>
                                <h1>Tahapan Pendaftaran</h1>
                                <p>Tahapan pendaftaran SBMPTN 2019 dilakukan melalui laman <a href="www.pendaftaran-sbmptn.ltmpt.ac.id">www.pendaftaran-sbmptn.ltmpt.ac.id</a> dengan cara sebagai berikut.</p>
                                <ol>
                                    <li>Mengisi Biodata (kecuali peserta yang sudah terdaftar di SNMPTN 2020).</li>
                                    <li>Memilih PTN dan program studi dengan ketentuan bahwa pendaftar dapat memilih paling banyak dua PTN dan memilih paling banyak dua program studi dalam satu PTN atau dua PTN</li>
                                    <li>Mengunggah dokumen lain sesuai dengan persyaratan pendaftaran SBMPTN 2020.</li>
                                </ol>
                                <h1>Peserta Pelamar Program Bidikmisi</h1>
                                <p>Berikut adalah persyaratan pendaftar Bidikmisi:</p>
                                <ol>
                                    <li>Siswa pendaftar dari keluarga kurang mampu secara ekonomi dapat mengajukan bantuan biaya pendidikan Bidikmisi.</li>
                                    <li>Calon peserta penerima Bidikmisi terlebih dahulu harus mempelajari prosedur pendaftaran program Bidikmisi yang ada di laman <a href="www.bidikmisi.belmawa.ristekdikti.go.id/">www.bidikmisi.belmawa.ristekdikti.go.id/</a> </li>
                                    <li>Calon peserta penerima Bidikmisi terlebih dahulu mendaftar ke laman <a href="www.bidikmisi.belmawa.ristekdikti.go.id">www.bidikmisi.belmawa.ristekdikti.go.id</a></li>
                                    <li>Calon peserta penerima Bidikmisi yang dinyatakan memenuhi persyaratan oleh Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kemristekdikti mendaftar UTBK di laman<a href="www.pendaftaran-utbk.ltmpt.ac.id">www.pendaftaran-utbk.ltmpt.ac.id</a>  dan tidak dikenakan biaya ujian.</li>
                                    <li>Calon peserta penerima Bidikmisi yang dinyatakan tidak lulus SNMPTN 2020, menggunakan NISN dan NPSN untuk mendaftar UTBK dan tidak dikenakan biaya ujian.</li>
                                    <li>Calon peserta penerima Bidikmisi yang telah dinyatakan lulus SNMPTN 2020, tidak diperbolehkan mendaftar SBMPTN 2020.</li>
                                </ol>
                            </div>

                        </div>
                        <div class="tab-pane" id="sm">
                            <div class="container">
                                <p><em>Calon pendaftar diharapkan mempelajari panduan pendaftaran Seleksi Mandiri Universitas Pendidikan Indonesia (SM-UPI) di laman <a href="http://app.pmb.upi.edu/sm-pi/">http://app.pmb.upi.edu/sm-pi/</a></em></p>
                                <h1>Persyaratan Umum</h1>
                                <p>Peserta SM UPI harus memenuhi persyaratan umum sebagai berikut:</p>
                                <ol>
                                    <li>Lulusan SMA/MA/SMK/Paket C tahun 2019, 2018, dan 2017.</li>
                                    <li>Memiliki sertifikat nilai UTBK LTMPT 2019.</li>
                                    <li>Mempunyai kesehatan fisik yang tidak mengganggu kelancaran belajar di program studi pilihannya.</li>
                                </ol>
                                <h1>Ketentuan Pendaftaran</h1>
                                <ol>
                                    <li>Pendaftar SM UPI dapat memilih 2 (dua) Program Studi pada kelompok bidang minat yang sama.</li>
                                    <li>Pendaftaran dilakukan secara online pada laman <a href="www.pmb.upi.edu">www.pmb.upi.edu</a> </li>
                                    <li>Uang yang sudah disetor ke bank tidak dapat diminta kembali.</li>
                                    <li>Setiap pendaftar hanya diberikan satu kali kesempatan untuk melakukan pendaftaran secara daring (online).</li>
                                    <li>Jika peserta ingin merubah kembali pilihan program studi setelah proses pendaftaran selesai dilakukan, maka pendaftar harus melakukan proses dari awal serta melakukan pembayaran uang pendaftaran kembali ke bank.</li>
                                    <li>Mengisi Form Pernyataan Kesediaan Membayar Biaya Pendidikan dan mengunggahnya pada proses pendaftaran SM UPI.</li>
                                </ol>
                                <h1>Tata Cara Pendaftaran</h1>
                                <p>Pendaftaran dilakukan melalui tahapan berikut:</p>
                                <ol>
                                    <li>
                                        <p>Pengisian data meliputi:</p>
                                        <ul>
                                            <li>> Nama</li>
                                            <li>> Tempat, tanggal lahir</li>
                                            <li>> NISN</li>
                                            <li>> Asal Sekolah</li>
                                            <li>> No Peserta UTBK</li>
                                            <li>> Pilihan Prodi di SM UPI</li>
                                        </ul>
                                    </li>
                                    <li>Pendaftar mengisi form yang telah disediakan dalam aplikasi Ambil Nomor Bayar, diakhir proses sistem akan memberikan Kode Bayar dan informasi besaran biaya pendaftaran yang harus dibayarkan ke Bank BNI.</li>
                                    <li>
                                        <p>Pembayaran Biaya Pendaftaran :</p>
                                        <ul>
                                            <li>Pendaftar menyetorkan uang pendaftaran ke Bank Negara Indonesia (Persero) Tbk (BNI) terdekat dengan menyebutkan Kode Bayar SM UPI;</li>
                                            <li>
                                                <p>Pendaftar membayar biaya pendaftaran melalui ATM BNI dengan cara:</p>
                                                <ul>
                                                    <li>Pilih menu Pembayaran;</li>
                                                    <li>Pilih Menu Berikutnya;</li>
                                                    <li>Pilih Universitas;</li>
                                                    <li>Pilih SPC;</li>
                                                    <li>Masukan Kode <strong>UPI 9022 </strong>diikuti <strong>Nomor Bayar </strong>kemudian akan muncul nama dan jumlah yang harus dibayarkan;</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Pihak Bank akan memberikan PIN dan bukti pembayaran.</li>
                                    <li>Pendaftar kemudian melakukan pengisian biodata secara daring(online) kembali di laman www.upi.edu atau langsung melalui laman <a href="www.pmb.upi.edu">www.pmb.upi.edu</a> dengan memasukan Kode Bayar dan PIN (yang diperoleh pada saat pendaftar telah melakukan pembayaran uang pendaftaran di Bank).</li>
                                    <li>Pendaftar mengikuti proses pengisian biodata, mengunduh (download) dan mengunggah (upload) Form Kesediaan Membayar Biaya Pendidikan, dan melakukan upload photo.</li>
                                    <li>Pada akhir proses peserta akan mendapat nomor seleksi dan dapat mengunduh (download) kartu peserta ujian.</li>
                                </ol>
                                <h3>Penerimaan di PTN</h3>
                                <p>Siswa pendaftar diterima di PTN, jika:</p>
                                <ol>
                                    <li>lulus satuan pendidikan SMA/SMK/MA;</li>
                                    <li>memiliki akun di LTMPT; dan</li>
                                    <li>dinyatakan lulus SNMPTN 2020; dan</li>
                                    <li>lolos verifikasi data serta memenuhi persyaratan lain yang ditentukan oleh masing-masing PTN penerima.</li>
                                </ol>
                            </div>

                        </div>
                        <div class="tab-pane" id="prestasi">
                            <div class="container">
                                <p>Penerimaan mahasiswa baru UPI melalui jalur Prestasi Istimewa (PI) bertujuan memberikan penghargaan kepada siswa yang memiliki prestasi istimewa yang ditunjukan melalui karya seni atau teknologi monumental yang mendapat pengakuan masyarakat atau berupa prestasi akademik maupun non-akademik pada kompetisi di tingkat nasional maupun internasional.</p>
                                <h1>Persyaratan Umum</h1>
                                <ol>
                                    <li>Siswa memiliki karya seni atau teknologi monumental yang mendapatkan pengakuan masyarakat, siswa hafidz Al-Qur’an minimal 15Juz, atau memiliki prestasi juara berupa medali pada olimpiade, kejuaraan, atau MTQ tingkat Provinsi, Nasional atau Internasional.</li>
                                    <li>Lulusan SMA/MA/SMK/Paket C tahun 2019, 2018, dan 2017.</li>
                                    <li>Mempunyai kesehatan fisik yang tidak mengganggu kelancaran belajar di program studi pilihannya.</li>
                                </ol>
                                <h1>Cara Pendaftaran</h1>
                                <p>Pendaftaran dilakukan melalui tahapan berikut:</p>
                                <ol>
                                    <li>
                                        Pengisian data meliputi:
                                        <ul>
                                            <li>> Nama</li>
                                            <li>> Tempat, tanggal lahir</li>
                                            <li>> NISN</li>
                                            <li>> Asal Sekolah</li>
                                            <li>> No Peserta UTBK</li>
                                            <li>> Pilihan Program Studi</li>
                                            <li>> Mengunggah Portofolio PI yang berisi Biodata dan jejak rekam prestasi yang diraih, dilengkapi dengan bukti fisik antara lain berupa sertifikat atau rekaman.</li>
                                        </ul>
                                    </li>
                                    <li>Pendaftar mengisi form yang telah disediakan dalam aplikasi Ambil Nomor Bayar, diakhir proses, sistem akan memberikan Kode Bayar dan informasi besaran biaya pendaftaran yang harus dibayarkan ke Bank BNI.</li>
                                    <li>
                                        <p>Pembayaran Biaya Pendaftaran:</p>
                                        <ul>
                                            <li>Pendaftar menyetorkan uang pendaftaran ke Bank Negara Indonesia (Persero) Tbk (BNI) terdekat dengan menyebutkan Kode Bayar Prestasi Istimewa(PI);</li>
                                            <li>Pendaftar membayar biaya pendaftaran melalui ATM BNI dengan cara:
                                                <ul>
                                                    <li>> Pilih menu Pembayaran;</li>
                                                    <li>> Pilih Menu Berikutnya;</li>
                                                    <li>> Pilih Universitas;</li>
                                                    <li>> Pilih SPC;</li>
                                                    <li>> Masukan Kode <strong>UPI 9022</strong> diikuti <strong>Nomor Bayar</strong> kemudian akan muncul nama dan jumlah yang harus dibayarkan;</li>
                                                </ul>
                                            </li>
                                            <li>Pihak Bank akan memberikan PIN dan bukti pembayaran.</li>
                                            <li>Pendaftar kemudian melakukan pengisian biodata secara daring (online) kembali di website www.upi.edu atau langsung melalui laman www.pmb.upi.edu dengan memasukan Kode Bayar dan PIN (yang diperoleh pada saat pendaftar telah melakukan pembayaran uang pendaftaran di Bank).</li>
                                            <li>Pendaftar mengikuti proses pengisian biodata, mengunduh (download) dan mengunggah (upload) Form Kesediaan Membayar Biaya Pendidikan, dan melakukan unggah photo.</li>
                                            <li>Pada akhir proses peserta akan mendapat nomor seleksi dan dapat mengunduh (download) kartu peserta ujian.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>
                        </div>
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
