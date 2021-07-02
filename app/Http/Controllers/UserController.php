<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = \App\User::all();
        return view('admin.user.index')->with($data);
    }

    public function create()
    {
        return view('admin/user/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = \App\User::create($input);

        if($status) return redirect('/admin/user')->with('success','User Telah ditambah');
        else return redirect('/admin/user')->with('error','User gagal ditambah');
    }

    public function edit($id)
    {
        $data['result'] = \App\User::where('id',$id)->first();
        return view('admin/user/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $result = \App\User::where('id',$id)->first();
        $status = $result->update($input);

        if($status) return redirect('/admin/user')->with('success','User Telah diubah');
        else return redirect('/admin/user')->with('error','User gagal diubah');
    }

    public function destroy($id)
    {
        $result = \App\User::where('id',$id)->first();
        $status = $result->delete();

        if($status) return redirect('/admin/user')->with('success','User Telah dihapus');
        else return redirect('/admin/user')->with('error','User gagal dihapus');
    }
}
