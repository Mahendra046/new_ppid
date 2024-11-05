<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function image($konten)
    {
        $data['konten'] = Konten::find($konten);
        return view('depan.konten.image',$data);
    }

    public function pdf($konten)
    {
        $data['konten'] = Konten::find($konten);
        return view('depan.konten.pdf',$data);
    }

    public function teks($konten)
    {
        $data['konten'] = Konten::find($konten);
        return view('depan.konten.teks',$data);
    }
}
