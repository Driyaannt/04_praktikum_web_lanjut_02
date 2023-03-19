<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function index()
    {
        $data = post::all();
         return view('profile',compact('data'));
    }
}
