<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PermohonanInformasiController extends Controller
{
    public function store(Request $request)
    {
        // Menyimpan data tanpa validasi
        $permohonan = new PermohonanInformasi();
        $permohonan->nama_pemohon = $request->input('nama_pemohon');
        $permohonan->alamat_pemohon = $request->input('alamat_pemohon');
        $permohonan->no_telepon = $request->input('no_telepon');
        $permohonan->email_pemohon = $request->input('email_pemohon');
        $permohonan->informasi_diminta = $request->input('informasi_diminta');
        $permohonan->tujuan_permohonan = $request->input('tujuan_permohonan');
        $permohonan->tanggal_permohonan = $request->input('tanggal_permohonan');
        $permohonan->status_permohonan = $request->input('status_permohonan', 'Diajukan');
        $permohonan->lampiran = $request->input('lampiran'); // Asumsi ini hanya nama file
        $permohonan->tracking_code = 'TRK-' . strtoupper(Str::random(8));
        $permohonan->save();

        return redirect()->back()->with('success', 'Permohonan berhasil disimpan. Simpan no traking permohonan anda: ' . $permohonan->tracking_code);
    }

    public function cariPermohonan(Request $request)
    {
        $lampiran = $request->input('lampiran');
        $permohonan = PermohonanInformasi::where('lampiran', $lampiran)
            ->orderBy('created_at', 'desc')
            ->first();
    
        if ($permohonan) {
            return back()->with('success', 'Data Permohonan '.$permohonan->nama_pemohon.' telah ' .$permohonan->status_permohonan);
        } else {
            return back()->with('success', 'Data permohonan tidak ditemukan.');
        }
    }
}
