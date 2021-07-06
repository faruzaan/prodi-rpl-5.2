<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $data['articles'] = DB::table('tb_artikel')->orderBy('created_at','DESC')->limit(3)->get();
        $data['newses'] = DB::table('tb_berita')->orderBy('created_at','DESC')->limit(3)->get();
        $data['dosens'] = DB::table('tb_dosen')->get();
        return view('home')->with($data);
    }

    public function sejarah()
    {
        return view('profil/tentang/sejarah');
    }
    public function kamda()
    {
        return view('profil/tentang/kamda');
    }
    public function rpl()
    {
        return view('profil/tentang/rpl');
    }

    public function visimisi()
    {
        return view('profil/visimisi');
    }
    public function staff()
    {
        $data['result'] = DB::table('tb_dosen')->get();
        return view('profil/staff')->with($data);
    }
    public function detaildosen($id)
    {
        $data['dosen']=DB::table('tb_dosen')->where('id_dosen',$id)->first();
        $data['publikasi']=DB::table('tb_publikasi_dosen')->where('id_dosen',$id)->get();
        $data['pengajaran']=DB::table('tb_pengajaran_dosen')->where('id_dosen',$id)->get();
        $data['pendidikan']=DB::table('tb_pendidikan_dosen')->where('id_dosen',$id)->get();
        return view('profil/detailstaff')->with($data);

    }
    public function struktur()
    {
        return view('profil/struktur');
    }
    public function fasilitas()
    {
        return view('profil/fasilitas');
    }

    public function prestasi()
    {
        return view('mahasiswa/prestasi');
    }
    public function alumni()
    {
        return view('mahasiswa/alumni');
    }

    public function penelitian()
    {
        return view('akademik/penelitian');
    }
    public function pengabdian()
    {
        return view('akademik/pengabdian');
    }
    public function kurikulum()
    {
        return view('akademik/kurikulum');
    }

    public function artikel()
    {
        $data['posts']=DB::table('tb_berita')->limit(4)->get();
        $data['articles']=DB::table('tb_artikel')->get();
        return view('informasi/artikel')->with($data);
    }
    public function berita()
    {
        $data['posts']=DB::table('tb_artikel')->limit(4)->get();
        $data['newses']=DB::table('tb_berita')->get();
        return view('informasi/berita')->with($data);
    }
    public function detail_berita($id)
    {
        $data['posts'] = DB::table('tb_artikel')->orderBy('created_at','DESC')->limit(4)->get();
        $data['result']=DB::table('tb_berita')->where('id_berita',$id)->first();
        return view('informasi/detail')->with($data);
    }
    public function detail_artikel($id)
    {
        $data['posts'] = DB::table('tb_artikel')->orderBy('created_at','DESC')->limit(4)->get();
        $data['result']=DB::table('tb_artikel')->where('id_artikel',$id)->first();
        return view('informasi/detail')->with($data);
    }
    public function prospek()
    {
        return view('informasi/prospek');
    }
    public function seleksi()
    {
        return view('informasi/seleksi');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
