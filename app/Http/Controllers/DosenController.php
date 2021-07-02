<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data['dosens'] = \App\Dosen::all();
        return view('admin.dosen.index')->with($data);
    }

    public function create()
    {
        return view('admin/dosen/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);

        $newImageName = uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/dosen'),$newImageName);
        
        $input = $request->all();
        $input["image_path"] = $newImageName;
        $status = \App\Dosen::create($input);

        if($status) return redirect('/admin/dosen')->with('success','Dosen Telah ditambah');
        else return redirect('/admin/dosen')->with('error','Dosen gagal ditambah');
    }

    public function edit($id)
    {
        $data['result'] = \App\Dosen::where('id_dosen',$id)->first();
        return view('admin/dosen/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);

        if(isset($request->image))
        {
            $newImageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'),$newImageName);

            $input = $request->all();
            $input["image_path"] = $newImageName;
            $result = \App\Dosen::where('id_dosen',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/dosen')->with('success','Dosen Telah diubah');
            else return redirect('/admin/dosen')->with('error','Dosen gagal diubah');
        }else{
            $input = $request->all();
            $result = \App\Dosen::where('id_dosen',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/dosen')->with('success','Dosen Telah diubah');
        else return redirect('/admin/dosen')->with('error','Dosen gagal diubah');
        }
    }

    public function destroy($id)
    {
        $result = \App\Dosen::where('id_dosen',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/dosen')->with('success','Dosen Telah dihapus');
        else return redirect('/admin/dosen')->with('error','Dosen gagal dihapus');
    }
}
