<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashMessageController extends Controller
{
    public function index()
    {
   return view('pesan');
    }

    public function pesan()
    {
     return redirect('/pesan')->with(['success' => 'Pesan Berhasil']);
    }
}
