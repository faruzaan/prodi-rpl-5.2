<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class BeritaController extends Controller
{
    public function index()
    {
        $data['newses'] = \App\Berita::all();
        return view('admin.berita.index')->with($data);
    }

    public function create()
    {
        return view('admin/berita/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'desc' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);

        $newImageName = uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/artikelDanBerita'),$newImageName);
        $gambar = Image::make(public_path('assets/images/artikelDanBerita/'. $newImageName))->fit(920,415)
        ->save(public_path('assets/images/artikelDanBerita/'.$newImageName));
        $gambar = Image::make(public_path('assets/images/artikelDanBerita/'. $newImageName))->fit(150,200)
        ->save(public_path('assets/images/artikelDanBerita/home/'.$newImageName));

        
        $input = $request->all();
        $input["image_path"] = $newImageName;
        $status = \App\Berita::create($input);

        if($status) return redirect('/admin/berita')->with('success','Berita Telah ditambah');
        else return redirect('/admin/berita')->with('error','Berita gagal ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['result'] = \App\Berita::where('id_berita',$id)->first();
        return view('admin/berita/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'judul' => 'required',
            'desc' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);
        if(isset($request->image))
        {
            $newImageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'),$newImageName);

            $input = $request->all();
            $input["image_path"] = $newImageName;
            $result = \App\Berita::where('id_berita',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/berita')->with('success','Berita Telah diubah');
            else return redirect('/admin/berita')->with('error','User Berita diubah');
        }else{
            $input = $request->all();
            $result = \App\Berita::where('id_berita',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/berita')->with('success','Berita Telah diubah');
            else return redirect('/admin/berita')->with('error','User Berita diubah');
        }   
    }

    public function destroy($id)
    {
        $result = \App\Berita::where('id_berita',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/berita')->with('success','Berita Telah dihapus');
        else return redirect('/admin/berita')->with('error','Berita gagal dihapus');    
    }
}
