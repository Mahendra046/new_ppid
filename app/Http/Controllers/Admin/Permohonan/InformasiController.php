<?php

namespace App\Http\Controllers\Admin\Permohonan;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_permohonan'] = PermohonanInformasi::all();
        return view('admin.permohonan-informasi.index',$data);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $permohonan = PermohonanInformasi::find($id);
        return view('admin.permohonan-informasi.edit',compact('permohonan'));
    }

    public function update(Request $request, string $id)
    {
        $permohonan = PermohonanInformasi::find($id);
        $permohonan->status_permohonan = $request->status_permohonan;
        $permohonan->save();
        return back()->with('success','permohonan '.$request->status_permohonan);
    }

    public function destroy(string $id)
    {
        //
    }
}
