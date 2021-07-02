<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanDosenController extends Controller
{
    public function index()
    {
        $data['pendidikans'] = \App\PendidikanDosen::all();
        return view('admin.pendidikan-dosen.index')->with($data);
    }

    public function create()
    {
        return view('admin/pendidikan-dosen/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = \App\PendidikanDosen::create($input);

        if($status) return redirect('/admin/pendidikan-dosen')->with('success','Pendidikan Dosen Telah ditambah');
        else return redirect('/admin/pendidikan-dosen')->with('error','Pendidikan Dosen gagal ditambah');
    }

    public function edit($id)
    {
        $data['result'] = \App\PendidikanDosen::where('id_pendidikan',$id)->first();
        return view('admin/pendidikan-dosen/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'id_dosen' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $result = \App\PendidikanDosen::where('id_pendidikan',$id)->first();
        $status = $result->update($input);

        if($status) return redirect('/admin/pendidikan-dosen')->with('success','Pendidikan Dosen Telah diubah');
        else return redirect('/admin/pendidikan-dosen')->with('error','Pendidikan Dosen gagal diubah');
    }

    public function destroy($id)
    {
        $result = \App\PendidikanDosen::where('id_pendidikan',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/pendidikan-dosen')->with('success','Pendidikan Dosen Telah dihapus');
        else return redirect('/admin/pendidikan-dosen')->with('error','Pendidikan Dosen gagal dihapus');
    }
}
