<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajaranDosenController extends Controller
{
    public function index()
    {
        $data['pengajarans'] = \App\PengajaranDosen::all();
        return view('admin.pengajaran-dosen.index')->with($data);
    }

    public function create()
    {
        return view('admin/pengajaran-dosen/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = \App\PengajaranDosen::create($input);

        if($status) return redirect('/admin/pengajaran-dosen')->with('success','Pengajaran Dosen Telah ditambah');
        else return redirect('/admin/pengajaran-dosen')->with('error','Pengajaran Dosen gagal ditambah');
    }

    public function edit($id)
    {
        $data['result'] = \App\PengajaranDosen::where('id_pengajaran',$id)->first();
        return view('admin/pengajaran-dosen/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $result = \App\PengajaranDosen::where('id_pengajaran',$id)->first();
        $status = $result->update($input);

        if($status) return redirect('/admin/pengajaran-dosen')->with('success','Pengajaran Dosen Telah diubah');
        else return redirect('/admin/pengajaran-dosen')->with('error','Pengajaran Dosen gagal diubah');
    }

    public function destroy($id)
    {
        $result = \App\PengajaranDosen::where('id_pengajaran',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/pengajaran-dosen')->with('success','Pengajaran Dosen Telah dihapus');
        else return redirect('/admin/pengajaran-dosen')->with('error','Pengajaran Dosen gagal dihapus');
    }
}
