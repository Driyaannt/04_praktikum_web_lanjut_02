<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
//        return view('pengalaman');
        $data = post::all();
        return view('pengalaman',compact('data'));
    }
}
