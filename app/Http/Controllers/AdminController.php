<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['users'] = \App\User::all();
        return view('admin/index')->with($data);
    }
}
