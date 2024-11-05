<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function image()
    {

    }

    public function pdf()
    {

    }

    public function teks($konten)
    {
        $data['konten'] = Konten::find($konten);
        return view('depan.konten.teks',$data);
    }
}
