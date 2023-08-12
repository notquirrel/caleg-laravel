<?php

namespace App\Http\Controllers;

use App\Models\Dukungan;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Profile;

class BerandaController extends Controller
{
    public function caleg()
    {
        $profile = Profile::where('id_caleg', 62)->first(); // Menggunakan first() untuk mengambil satu data
        $partai = Setting::where('id_partai', 23)->get(); // Menggunakan get() untuk mengambil data
        $jumlah = Dukungan::get()->count();

        return view('pages.app', compact('profile', 'partai', 'jumlah'));
    }
}
