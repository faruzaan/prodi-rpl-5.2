<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiDosenController extends Controller
{
    public function index()
    {
        $data['publikasis'] = \App\PublikasiDosen::all();
        return view('admin.publikasi-dosen.index')->with($data);
    }

    public function create()
    {
        return view('admin/publikasi-dosen/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = \App\PublikasiDosen::create($input);

        if($status) return redirect('/admin/publikasi-dosen')->with('success','Publikasi Dosen Telah ditambah');
        else return redirect('/admin/publikasi-dosen')->with('error','Publikasi Dosen gagal ditambah');
    }

    public function edit($id)
    {
        $data['result'] = \App\PublikasiDosen::where('id_publikasi',$id)->first();
        return view('admin/publikasi-dosen/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $result = \App\PublikasiDosen::where('id_publikasi',$id)->first();
        $status = $result->update($input);

        if($status) return redirect('/admin/publikasi-dosen')->with('success','Publikasi Dosen Telah diubah');
        else return redirect('/admin/publikasi-dosen')->with('error','Publikasi Dosen gagal diubah');
    }

    public function destroy($id)
    {
        $result = \App\PublikasiDosen::where('id_publikasi',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/publikasi-dosen')->with('success','Publikasi Dosen Telah dihapus');
        else return redirect('/admin/publikasi-dosen')->with('error','Publikasi Dosen gagal dihapus');
    }
}
