<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class ArtikelController extends Controller
{
    public function index()
    {
        $data['articles'] = \App\Artikel::all();
        return view('admin.artikel.index')->with($data);
    }

    public function create()
    {
        return view('admin/artikel/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'desc' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);

        $newImageName = uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/artikelDanBerita/'),$newImageName);
        $gambar = Image::make(public_path('assets/images/artikelDanBerita/'. $newImageName))->fit(920,415)
        ->save(public_path('assets/images/artikelDanBerita/'.$newImageName));
        $gambar = Image::make(public_path('assets/images/artikelDanBerita/'. $newImageName))->fit(150,101)
        ->save(public_path('assets/images/artikelDanBerita/home/'.$newImageName));

        
        $input = $request->all();
        $input["image_path"] = $newImageName;
        $input["user_id"] = 1;
        $status = \App\Artikel::create($input);

        if($status) return redirect('/admin/artikel')->with('success','Artikel Telah ditambah');
        else return redirect('/admin/artikel')->with('error','Artikel gagal ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['result'] = \App\Artikel::where('id_artikel',$id)->first();
        return view('admin/artikel/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'judul' => 'required',
            'desc' => 'required',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:5048'
        ];
        $this->validate($request,$rules);
        if(isset($request->image))
        {
            $newImageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'),$newImageName);

            $input = $request->all();
            $input["image_path"] = $newImageName;
            $result = \App\Artikel::where('id_artikel',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/artikel')->with('success','Artikel Telah diubah');
            else return redirect('/admin/artikel')->with('error','User Artikel diubah');
        }else{
            $input = $request->all();
            $result = \App\Artikel::where('id_artikel',$id)->first();
            $status = $result->update($input);

            if($status) return redirect('/admin/artikel')->with('success','Artikel Telah diubah');
            else return redirect('/admin/artikel')->with('error','User Artikel diubah');
        }   
    }

    public function destroy($id)
    {
        $result = \App\Artikel::where('id_artikel',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/artikel')->with('success','Artikel Telah dihapus');
        else return redirect('/admin/artikel')->with('error','Artikel gagal dihapus');    
    }
}
