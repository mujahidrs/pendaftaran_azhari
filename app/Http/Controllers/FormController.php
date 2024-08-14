<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FormController extends Controller
{
    public function index()
    {
        $form_1 = unserialize(request()->cookie('form_1'));

        return view('welcome', compact('form_1'));
    }

    public function store(Request $request)
    {
        //validate form_1 required
        // $request->validate([
        //     'info_dari' => 'required',
        //     'referensi' => 'required',
        //     'tahun_pelajaran' => 'required|max:10',
        //     'jenjang_tujuan' => 'required',
        // ]);

        $form_1 = [
            'info_dari' => $request->info_dari,
            'referensi' => $request->referensi,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'jenjang_tujuan' => $request->jenjang_tujuan,
        ];

        $cookie = cookie('form_1', serialize($form_1),3600);

        // dd($cookie);

        return response("Cookie has been set")->cookie($cookie);
    }
}
