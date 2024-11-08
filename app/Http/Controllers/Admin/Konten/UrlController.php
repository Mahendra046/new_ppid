<?php

namespace App\Http\Controllers\Admin\Konten;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use App\Models\Menu;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index()
    {
        $menu = Menu::where('level','1')->get();
        $url = Konten::where('jenis_file','url')->get();
        return view('admin.konten.url.index',compact('url','menu'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $konten = new Konten;
        $konten->id_menu = $request->id_menu;
        $konten->judul = $request->judul;
        $konten->jenis_file = 'url';
        $konten->link_konten = $request->link_konten;
        $konten->save();
        return back()->with('success','konten berhasil ditambahkan');
    }

    public function update(Request $request, string $id)
    {
        $konten = Konten::find($id);
        $konten->id_menu = $request->id_menu;
        $konten->judul = $request->judul;
        $konten->jenis_file = 'url';
        $konten->link_konten = $request->link_konten;
        $konten->save();
        return back()->with('success','konten berhasil ditambahkan');
    }

    public function destroy(string $id)
    {
        $konten = Konten::find($id);
        $konten->delete();
        return back()->with('success','konten telah dihapus');
    }
}
