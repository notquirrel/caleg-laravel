<?php

namespace App\Http\Controllers;
use App\Models\Setting;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $setting = Setting::all();

        return view('admin.setting', compact('setting'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'partai'    => 'required',
        //     'warna'   => 'required',
        // ]);

        Setting::insert([
            'partai'    => $request->partai,
            'warna'   => $request->warna,
        ]);
        return redirect('admin/setting')->with('success', 'setting Berhasil Dibuat');
    }
    public function update(Request $request)
    {
        // $request->validate([
        //     'partai'    => 'required',
        //     'warna'   => 'required',
        // ]);

        Setting::where('id', $request->id)->update([
            'partai'    => $request->partai,
            'warna'   => $request->warna,
        ]);
        return redirect('admin/setting')->with('success', 'setting Berhasil Diedit');
    }

    public function delete(Request $request)
    {
        $del = Setting::where('id', $request->id)->delete();
        if ($del) {
            return redirect('admin/setting')->with('success', 'setting Berhasil Dihapus');
        }
    }
}
