<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitted;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index()
    {
        // // clear all cookies
        // Cookie::queue(Cookie::forget('form_1'));
        // Cookie::queue(Cookie::forget('form_2'));
        // Cookie::queue(Cookie::forget('form_3'));
        // Cookie::queue(Cookie::forget('form_4'));
        // Cookie::queue(Cookie::forget('form_5'));
        // Cookie::queue(Cookie::forget('page'));

        // return view('welcome');

        $form_1 = unserialize(request()->cookie('form_1'));
        $form_2 = unserialize(request()->cookie('form_2'));
        $form_3 = unserialize(request()->cookie('form_3'));
        $form_4 = unserialize(request()->cookie('form_4'));
        $form_5 = unserialize(request()->cookie('form_5'));
        
        $page = request()->cookie('page') == null ? 1 : request()->cookie('page');

        return view('welcome', compact('page', 'form_1', 'form_2', 'form_3', 'form_4', 'form_5'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        if($request->page == '1'){
            // form_1 validation
            $request->validate([
                'info_dari' => ['required'],
                'jenis_pendaftaran' => ['required'],
                'tahun_pelajaran' => ['required'],
                'jenjang_tujuan' => ['required'],
            ]);
        }

        if($request->page == '2'){
            $request->validate([
                'nama_lengkap' => ['required'],
                'nama_panggilan' => ['required'],
                'no_kk' => ['required', 'integer'],
                'nik' => ['required', 'integer'],
                'jenis_kelamin' => ['required'],
                'tempat_lahir' => ['required'],
                'tanggal_lahir' => ['required'],
                'anak_ke' => ['required'],
                'alamat_1' => ['required'],
                'kota' => ['required'],
                'provinsi' => ['required'],
                'kode_pos' => ['required', 'integer'],
                'agama' => ['required'],
                'golongan_darah' => ['required'],
                'tinggi_badan' => ['required'],
                'berat_badan' => ['required'],
            ]);
        }

        if($request->page == '3'){
            $request->validate([
                'sekolah_asal' => ['required'],
                'alamat_sekolah_1' => ['required'],
                'alamat_sekolah_2' => ['required'],
                'kota_sekolah' => ['required'],
                'provinsi_sekolah' => ['required'],
                'kode_pos_sekolah' => ['required'],
                'no_telp_sekolah' => ['required'],
                'no_wa_kepala_sekolah' => ['required'],
                'no_wa_walas_sekolah' => ['required'],
            ]);
        }

        if($request->page == '4'){
            $request->validate([
                'nama_lengkap_ayah' => ['required'],
                'tempat_lahir_ayah' => ['required'],
                'tanggal_lahir_ayah' => ['required'],
                'agama_ayah' => ['required'],
                'kewarganegaraan_ayah' => ['required'],
                'no_hp_ayah' => ['required'],
                'email_ayah' => ['required', 'email'],
                'masih_hidup_ayah' => ['required'],
                'nama_lengkap_ibu' => ['required'],
                'tempat_lahir_ibu' => ['required'],
                'tanggal_lahir_ibu' => ['required'],
                'agama_ibu' => ['required'],
                'kewarganegaraan_ibu' => ['required'],
                'no_hp_ibu' => ['required'],
                'alamat_email_ibu' => ['required', 'email'],
                'masih_hidup_ibu' => ['required'],
                // 'email_wali' => ['email'],
            ]);
        }

        $form_1 = [
            'info_dari' => $request->info_dari,
            'referensi' => $request->referensi,
            'jenis_pendaftaran' => $request->jenis_pendaftaran,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'jenjang_tujuan' => $request->jenjang_tujuan,
        ];

        $form_2 = [
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'no_kk' => $request->no_kk,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'anak_ke' => $request->anak_ke,
            'alamat_1' => $request->alamat_1,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'penyakit' => $request->penyakit,
            'kelainan' => $request->kelainan,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
        ];

        $form_3 = [
            'nisn' => $request->nisn,
            'sekolah_asal' => $request->sekolah_asal,
            'alamat_sekolah_1' => $request->alamat_sekolah_1,
            'alamat_sekolah_2' => $request->alamat_sekolah_2,
            'kota_sekolah' => $request->kota_sekolah,
            'provinsi_sekolah' => $request->provinsi_sekolah,
            'kode_pos_sekolah' => $request->kode_pos_sekolah,
            'no_telp_sekolah' => $request->no_telp_sekolah,
            'no_wa_kepala_sekolah' => $request->no_wa_kepala_sekolah,
            'no_wa_walas_sekolah' => $request->no_wa_walas_sekolah,
            'nilai_uasbn' => $request->nilai_uasbn,
            'matematika' => $request->matematika,
            'bahasa_indonesia' => $request->bahasa_indonesia,
            'ipa' => $request->ipa,
            'no_sttb' => $request->no_sttb,
            'prestasi' => $request->prestasi,
        ];

        $form_4 = [
            'nama_lengkap_ayah' => $request->nama_lengkap_ayah,
            'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'agama_ayah' => $request->agama_ayah,
            'kewarganegaraan_ayah' => $request->kewarganegaraan_ayah,
            'no_hp_ayah' => $request->no_hp_ayah,
            'email_ayah' => $request->email_ayah,
            'masih_hidup_ayah' => $request->masih_hidup_ayah,
            'nama_lengkap_ibu' => $request->nama_lengkap_ibu,
            'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'agama_ibu' => $request->agama_ibu,
            'kewarganegaraan_ibu' => $request->kewarganegaraan_ibu,
            'no_hp_ibu' => $request->no_hp_ibu,
            'alamat_email_ibu' => $request->alamat_email_ibu,
            'masih_hidup_ibu' => $request->masih_hidup_ibu,
            'nama_lengkap_wali' => $request->nama_lengkap_wali,
            'tempat_lahir_wali' => $request->tempat_lahir_wali,
            'tanggal_lahir_wali' => $request->tanggal_lahir_wali,
            'agama_wali' => $request->agama_wali,
            'kewarganegaraan_wali' => $request->kewarganegaraan_wali,
            'pendidikan_terakhir_wali' => $request->pendidikan_terakhir_wali,
            'no_hp_wali' => $request->no_hp_wali,
            'email_wali' => $request->email_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'hubungan_wali' => $request->hubungan_wali,
        ];
        

        $page = $request->page;

        $cookie_page = cookie('page', $page + 1,3600);
        $cookie1 = cookie('form_1', serialize($form_1),3600);
        $cookie2 = cookie('form_2', serialize($form_2),3600);
        $cookie3 = cookie('form_3', serialize($form_3),3600);
        $cookie4 = cookie('form_4', serialize($form_4),3600);

        // dd($cookie);

        return redirect()->back()->withCookies([$cookie_page, $cookie1, $cookie2, $cookie3, $cookie4]);
    }

    //function submitForm
    public function submitForm(Request $request)
    {
        $form_1 = unserialize(request()->cookie('form_1'));
        $form_2 = unserialize(request()->cookie('form_2'));
        $form_3 = unserialize(request()->cookie('form_3'));
        $form_4 = unserialize(request()->cookie('form_4'));
        

        

        // $cookie3 = cookie('form_3', serialize($form_3),3600);
        $form_5 = [
            'no_telp_darurat' => $request->no_telp_darurat,
            'nama_darurat' => $request->nama_darurat,
            'hubungan_darurat' => $request->hubungan_darurat,
        ];

        //validation
        $request->validate([
            'no_telp_darurat' => ['required'],
            'nama_darurat' => ['required'],
            'hubungan_darurat' => ['required'],
        ]);
        
        $form = Form::create(array_merge($form_1, $form_2, $form_3, $form_4, $form_5));
        // $form = Form::create(array_merge($form_1, $form_2, $form_3, $form_4));

        //clear all cookies
        $cookie = cookie('page', null, -1);
        $cookie1 = cookie('form_1', null, -1);
        $cookie2 = cookie('form_2', null, -1);
        $cookie3 = cookie('form_3', null, -1);
        $cookie4 = cookie('form_4', null, -1);
        $cookie5 = cookie('form_5', null, -1);


        //check if email is not empty
        if (!empty($form_4['email_ayah'])) {
            Mail::to($form_4['email_ayah'])->send(new FormSubmitted($form));
        }
        if (!empty($form_4['alamat_email_ibu'])) {
            Mail::to($form_4['alamat_email_ibu'])->send(new FormSubmitted($form));
        }
        if (!empty($form_4['email_wali'])) {
            Mail::to($form_4['email_wali'])->send(new FormSubmitted($form));
        }

        //send email to admin
        // Mail::to('admin@example.com')->send(new FormSubmitted($form));

        return redirect()->back()
                    ->with('status', 'Berhasil mengisi form pendaftaran, silahkan cek email untuk melanjutkan proses berikutnya')
                    ->withCookies([$cookie, $cookie1, $cookie2, $cookie3, $cookie4, $cookie5]);    
    }

    public function goToPage($page)
    {
        $form_1 = unserialize(request()->cookie('form_1'));
        $form_2 = unserialize(request()->cookie('form_2'));
        $form_3 = unserialize(request()->cookie('form_3'));
        $form_4 = unserialize(request()->cookie('form_4'));
        $form_5 = unserialize(request()->cookie('form_5'));
        
        $cookie = cookie('page', $page,3600);
        $cookie1 = cookie('form_1', serialize($form_1),3600);
        $cookie2 = cookie('form_2', serialize($form_2),3600);
        $cookie3 = cookie('form_3', serialize($form_3),3600);
        $cookie4 = cookie('form_4', serialize($form_4),3600);
        $cookie5 = cookie('form_5', serialize($form_5),3600);

        return redirect()->route('form')->withCookies([$cookie, $cookie1, $cookie2, $cookie3, $cookie4, $cookie5]);
    }
}
