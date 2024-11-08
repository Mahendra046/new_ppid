<?php

namespace App\Http\Controllers\Admin\Permohonan;

use App\Http\Controllers\Controller;
use App\Models\PermohonanKeberatan;
use Illuminate\Http\Request;

class KeberatanController extends Controller
{
    public function index()
    {
        $data['list_permohonan'] = PermohonanKeberatan::all();
        return view('admin.permohonan-keberatan.index',$data);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $permohonan = PermohonanKeberatan::find($id);
        return view('admin.permohonan-keberatan.edit',compact('permohonan'));
    }

    public function update(Request $request, string $id)
    {
        $permohonan = PermohonanKeberatan::find($id);
        $permohonan->status_permohonan = $request->status_permohonan;
        $permohonan->save();
        return back()->with('success','permohonan '.$request->status_permohonan);
    }
    
    public function destroy(string $id)
    {
        //
    }
}
