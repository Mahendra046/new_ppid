<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use App\Models\PermohonanKeberatan;
use Illuminate\Http\Request;

class PermohonanKeberatanController extends Controller
{
    public function store(Request $request)
    {
        $permohonan = PermohonanInformasi::where('lampiran', $request->input('lampiran'))
        ->orderBy('created_at', 'desc') 
        ->first();

        if ($permohonan) {
            $keberatan = new PermohonanKeberatan();
            $keberatan->id_permohonan = $permohonan->id;
            $keberatan->lampiran = $request->input('lampiran');
            $keberatan->nama_pemohon = $request->input('nama_pemohon');
            $keberatan->alamat_pemohon = $request->input('alamat_pemohon');
            $keberatan->no_telepon = $request->input('no_telepon');
            $keberatan->email_pemohon = $request->input('email_pemohon');
            $keberatan->alasan_keberatan = $request->input('alasan_keberatan');
            $keberatan->tanggal_keberatan = $request->input('tanggal_keberatan');
            $keberatan->status_keberatan = 'Diajukan';
            $keberatan->save();

            return redirect()->back()->with('success', 'Keberatan berhasil diajukan.');
        } else {
            return redirect()->back()->with('success', 'Permohonan tidak ditemukan untuk NIK tersebut.');
        }
    }
}
