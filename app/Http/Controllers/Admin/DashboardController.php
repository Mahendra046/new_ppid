<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $data['konten_teks'] = Konten::where('jenis_file','teks')->count();
        $data['konten_image'] = Konten::where('jenis_file','image')->count();
        $data['konten_pdf'] = Konten::where('jenis_file','pdf')->count();
        return view('admin.dashboard.index',$data);
    }

}
