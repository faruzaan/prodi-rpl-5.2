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
                                <p><h2>Ketentuan Umum</h2></p>
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">SNMPTN dilakukan berdasarkan hasil penelusuran prestasi akademik dengan menggunakan rapor dan portofolio akademik. Rapor yang digunakan adalah semester satu sampai dengan semester lima bagi SMA/SMK/MA dengan masa belajar tiga tahun atau semester satu sampai dengan semester tujuh bagi SMK dengan masa belajar empat tahun.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Sekolah yang siswanya mengikuti SNMPTN harus mempunyai Nomor Pokok Sekolah Nasional (NPSN) dan mengisikan data prestasi siswa di PDSS dengan lengkap dan benar.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify">Siswa yang berhak mengikuti seleksi adalah <strong>siswa yang memiliki Nomor Induk Siswa Nasional (NISN)</strong>, memiliki prestasi unggul, dan rekam jejak prestasi akademik di PDSS.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Siswa yang akan mendaftar SNMPTN wajib membaca informasi pada laman PTN pilihan tentang ketentuan terkait dengan penerimaan mahasiswa baru di PTN tersebut.</td>
                                    </tr>
                                </table></p>
                                                                
                                <p><h2>Ketentuan Khusus</h2></p>
                                <h4>Persyaratan Sekolah</h4>
                                Sekolah yang siswanya berhak mengikuti SNMPTN adalah :
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">SMA/MA/SMK yang mempunyai NPSN.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Mengisi Pangkalan Data Sekolah dan Siswa (PDSS).</td>
                                    </tr> 
                                </table></p>
                                
                                <h4>Persyaratan Siswa Pendaftar</h4>
                                Siswa pendaftar yang berhak mengikuti SNMPTN adalah:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Siswa SMA/MA/SMK kelas terakhir (kelas 12) pada tahun 2020 yang memiliki prestasi unggul.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Memiliki NISN yang terdaftar di PDSS</td>
                                    </tr> 
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify">Memiliki nilai rapor semester 1 s.d. 5 yang telah diisikan oleh sekolah di PDSS atau memiliki nilai rapor semester 1 s.d. 7 bagi SMK dengan masa belajar empat tahun.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Memiliki prestasi akademik dan memenuhi persyaratan yang ditentukan oleh masing-masing PTN.</td>
                                    </tr> 
                                </table></p>

                                <h4>Penerimaan di PTN</h4>
                                Siswa pendaftar diterima di PTN, jika:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Lulus satuan pendidikan SMA/SMK/MA;</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Memiliki akun di LTMPT; dan</td>
                                    </tr> 
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify">Dinyatakan lulus SNMPTN; dan</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Lolos verifikasi data serta memenuhi persyaratan lain yang ditentukan oleh masing-masing PTN penerima.</td>
                                    </tr> 
                                </table></p>
                            </div>
                        </div>

                        <div class="tab-pane" id="sbmptn">
                            <div class="container">
                                <p><h2>Persyaratan Peserta</h2></p>
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Siswa SMA/MA/SMK/Sederajat <strong>lulusan tahun 2018, 2019</strong> harus sudah memiliki ijazah.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Bagi siswa SMA/MA/SMK/Sederajat <strong>lulusan tahun 2020</strong> memiliki Surat Keterangan Lulus Pendidikan Menengah, sekurang-kurangnya memuat informasi jati diri dan pasfoto berwarna terbaru yang bersangkutan dengan ditandatangani oleh kepala sekolah dan dibubuhi cap stempel yang sah.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Memiliki Nilai UTBK.</strong></td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Memiliki kesehatan yang memadai sehingga tidak mengganggu kelancaran proses studi.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">5.</td>
                                        <td style="text-align:justify"><strong>Biaya UTBK ditanggung oleh peserta dan subsidi pemerintah.</strong></td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">6.</td>
                                        <td style="text-align:justify">Tidak lulus jalur SNMPTN 2020.</td>
                                    </tr>
                                </table></p>

                                <p><h2>Tahapan Pendaftaran</h2></p>
                                Tahapan pendaftaran SBMPTN 2019 dilakukan melalui laman <a href="www.pendaftaran-sbmptn.ltmpt.ac.id">www.pendaftaran-sbmptn.ltmpt.ac.id</a> dengan cara sebagai berikut.
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Mengisi Biodata (kecuali peserta yang sudah terdaftar di SNMPTN).</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Memilih PTN dan program studi dengan ketentuan bahwa pendaftar dapat memilih paling banyak dua PTN dan memilih paling banyak dua program studi dalam satu PTN atau dua PTN.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Mengunggah dokumen lain sesuai dengan persyaratan pendaftaran SBMPTN</strong></td>
                                    </tr>
                                </table></p>

                                <p><h2>Peserta Pelamar Program Bidikmisi</h2></p>
                                Berikut adalah persyaratan pendaftar Bidikmisi:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Siswa pendaftar dari keluarga kurang mampu secara ekonomi dapat mengajukan bantuan biaya pendidikan Bidikmisi.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Calon peserta penerima Bidikmisi terlebih dahulu harus mempelajari prosedur pendaftaran program Bidikmisi yang ada di laman <a href="www.bidikmisi.belmawa.ristekdikti.go.id/">www.bidikmisi.belmawa.ristekdikti.go.id/</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Calon peserta penerima Bidikmisi terlebih dahulu mendaftar ke laman <a href="www.bidikmisi.belmawa.ristekdikti.go.id">www.bidikmisi.belmawa.ristekdikti.go.id</strong></td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Calon peserta penerima Bidikmisi yang dinyatakan memenuhi persyaratan oleh Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kemristekdikti mendaftar UTBK di laman<a href="www.pendaftaran-utbk.ltmpt.ac.id">www.pendaftaran-utbk.ltmpt.ac.id</a>  dan tidak dikenakan biaya ujian.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">5.</td>
                                        <td style="text-align:justify">Calon peserta penerima Bidikmisi yang dinyatakan tidak lulus SNMPTN, menggunakan NISN dan NPSN untuk mendaftar UTBK dan tidak dikenakan biaya ujian.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">6.</td>
                                        <td style="text-align:justify"><strong>Calon peserta penerima Bidikmisi yang telah dinyatakan lulus SNMPTN, tidak diperbolehkan mendaftar SBMPTN.</td>
                                    </tr>
                                </table></p>
                            </div>

                        </div>
                        <div class="tab-pane" id="sm">
                            <div class="container">
                                Calon pendaftar diharapkan mempelajari panduan pendaftaran Seleksi Mandiri Universitas Pendidikan Indonesia (SM-UPI) di laman <a href="http://app.pmb.upi.edu/sm-pi/">http://app.pmb.upi.edu/sm-pi/</a>
                                <p><h2>Persyaratan Umum</h2></p>
                                Peserta SM UPI harus memenuhi persyaratan umum sebagai berikut:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Lulusan SMA/MA/SMK/Paket C 3 Tahun Terakhir</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Memiliki sertifikat nilai UTBK LTMPT</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Mempunyai kesehatan fisik yang tidak mengganggu kelancaran belajar di program studi pilihannya.</td>
                                    </tr>
                                    
                                </table></p>

                                <p><h2>Ketentuan Pendaftaran</h2></p>
                                Peserta SM UPI harus memenuhi persyaratan umum sebagai berikut:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Pendaftar SM UPI dapat memilih 2 (dua) Program Studi pada kelompok bidang minat yang sama.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Pendaftaran dilakukan secara online pada laman <a href="www.pmb.upi.edu">www.pmb.upi.edu</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Uang yang sudah disetor ke bank tidak dapat diminta kembali.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Setiap pendaftar hanya diberikan satu kali kesempatan untuk melakukan pendaftaran secara daring (online).</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">5.</td>
                                        <td style="text-align:justify">Jika peserta ingin merubah kembali pilihan program studi setelah proses pendaftaran selesai dilakukan, maka pendaftar harus melakukan proses dari awal serta melakukan pembayaran uang pendaftaran kembali ke bank.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">6.</td>
                                        <td style="text-align:justify">Mengisi Form Pernyataan Kesediaan Membayar Biaya Pendidikan dan mengunggahnya pada proses pendaftaran SM UPI.</td>
                                    </tr>
                                </table></p>

                                <p><h2>Tata Cara Pendaftaran</h2></p>
                                Pendaftaran dilakukan melalui tahapan berikut:Pendaftaran dilakukan melalui tahapan berikut:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Pengisian data meliputi:
                                        <table>
                                            <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Nama</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Tempat, tanggal lahir</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">NISN</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Asal Sekolah</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">No Peserta UTBK</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilihan Prodi di SM UPI</td>
                                             </tr>
                                        </table></td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Pendaftar mengisi form yang telah disediakan dalam aplikasi Ambil Nomor Bayar, diakhir proses sistem akan memberikan Kode Bayar dan informasi besaran biaya pendaftaran yang harus dibayarkan ke Bank BNI.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify">Pembayaran Biaya Pendaftaran, pendaftar menyetorkan uang pendaftaran ke Bank Negara Indonesia (Persero) Tbk (BNI) terdekat dengan menyebutkan Kode Bayar SM UPI;</br>
                                        Pendaftar membayar biaya pendaftaran melalui ATM BNI dengan cara:
                                        <table>
                                            <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih menu Pembayaran;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih Menu Berikutnya;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih Universitas;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih SPC;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Masukan Kode UPI 9022 diikuti Nomor Bayar kemudian akan muncul nama dan jumlah yang harus dibayarkan;</td>
                                             </tr>
                                             
                                        </table>
                                        </td>
                                    
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Pihak Bank akan memberikan PIN dan bukti pembayaran.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">5.</td>
                                        <td style="text-align:justify">Pendaftar kemudian melakukan pengisian biodata secara daring(online) kembali di laman www.upi.edu atau langsung melalui laman www.pmb.upi.edu dengan memasukan Kode Bayar dan PIN (yang diperoleh pada saat pendaftar telah melakukan pembayaran uang pendaftaran di Bank).</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">6.</td>
                                        <td style="text-align:justify">Pendaftar mengikuti proses pengisian biodata, mengunduh (download) dan mengunggah (upload) Form Kesediaan Membayar Biaya Pendidikan, dan melakukan upload photo.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">7.</td>
                                        <td style="text-align:justify">Pada akhir proses peserta akan mendapat nomor seleksi dan dapat mengunduh (download) kartu peserta ujian.</td>
                                    </tr>
                                    </tr>
                                    
                                </table></p>

                            </div>

                        </div>
                        <div class="tab-pane" id="prestasi">
                            <div class="container">
                                

                                Penerimaan mahasiswa baru UPI melalui jalur Prestasi Istimewa (PI) bertujuan memberikan penghargaan kepada siswa yang memiliki prestasi istimewa yang ditunjukan melalui karya seni atau teknologi monumental yang mendapat pengakuan masyarakat atau berupa prestasi akademik maupun non-akademik pada kompetisi di tingkat nasional maupun internasional.                                                
                                <p><h2>Persyaratan Umum</h2></p>
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Siswa memiliki karya seni atau teknologi monumental yang mendapatkan pengakuan masyarakat, siswa hafidz Al-Qur’an minimal 15Juz, atau memiliki prestasi juara berupa medali pada olimpiade, kejuaraan, atau MTQ tingkat Provinsi, Nasional atau Internasional.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Lulusan SMA/MA/SMK/Paket C 3 Tahun Terakhir.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify"><strong>Mempunyai kesehatan fisik yang tidak mengganggu kelancaran belajar di program studi pilihannya.</strong></td>
                                    </tr>
                                </table></p>

                                <p><h2>Tata Cara Pendaftaran</h2></p>
                                Pendaftaran dilakukan melalui tahapan berikut:Pendaftaran dilakukan melalui tahapan berikut:
                                <p><table>
                                    <tr>   
                                        <td style="width:20px">1.</td>
                                        <td style="text-align:justify">Pengisian data meliputi:
                                        <table>
                                            <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Nama</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Tempat, tanggal lahir</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">NISN</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Asal Sekolah</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">No Peserta UTBK</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilihan Prodi di SM UPI</td>
                                             </tr>
                                        </table></td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">2.</td>
                                        <td style="text-align:justify">Pendaftar mengisi form yang telah disediakan dalam aplikasi Ambil Nomor Bayar, diakhir proses sistem akan memberikan Kode Bayar dan informasi besaran biaya pendaftaran yang harus dibayarkan ke Bank BNI.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">3.</td>
                                        <td style="text-align:justify">Pembayaran Biaya Pendaftaran, pendaftar menyetorkan uang pendaftaran ke Bank Negara Indonesia (Persero) Tbk (BNI) terdekat dengan menyebutkan Kode Bayar SM UPI;</br>
                                        Pendaftar membayar biaya pendaftaran melalui ATM BNI dengan cara:
                                        <table>
                                            <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih menu Pembayaran;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih Menu Berikutnya;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih Universitas;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Pilih SPC;</td>
                                             </tr>
                                             <tr>   
                                                <td style="width:20px">-</td>
                                                <td style="text-align:justify">Masukan Kode UPI 9022 diikuti Nomor Bayar kemudian akan muncul nama dan jumlah yang harus dibayarkan;</td>
                                             </tr>
                                             
                                        </table>
                                        </td>
                                    
                                    <tr>   
                                        <td style="width:20px">4.</td>
                                        <td style="text-align:justify">Pihak Bank akan memberikan PIN dan bukti pembayaran.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">5.</td>
                                        <td style="text-align:justify">Pendaftar kemudian melakukan pengisian biodata secara daring(online) kembali di laman www.upi.edu atau langsung melalui laman www.pmb.upi.edu dengan memasukan Kode Bayar dan PIN (yang diperoleh pada saat pendaftar telah melakukan pembayaran uang pendaftaran di Bank).</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">6.</td>
                                        <td style="text-align:justify">Pendaftar mengikuti proses pengisian biodata, mengunduh (download) dan mengunggah (upload) Form Kesediaan Membayar Biaya Pendidikan, dan melakukan upload photo.</td>
                                    </tr>
                                    <tr>   
                                        <td style="width:20px">7.</td>
                                        <td style="text-align:justify">Pada akhir proses peserta akan mendapat nomor seleksi dan dapat mengunduh (download) kartu peserta ujian.</td>
                                    </tr>
                                    </tr>
                                    
                                </table></p>

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
