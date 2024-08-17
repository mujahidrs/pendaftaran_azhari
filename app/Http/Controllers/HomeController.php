<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $forms = Form::all();

        return view('home', compact('forms'));
    }

    //show
    public function show($id)
    {
        $form = Form::find($id);

        return view('detail', compact('form'));
    }

    //confirm
    public function confirm($id)
    {
        $form = Form::find($id);

        return view('confirm', compact('form'));
    }

    //complete
    public function complete($id)
    {
        $form = Form::find($id);
        $form->update(['status' => 'completed']);

        return redirect()->route('home')->with('status', "Pendaftaran atas nama $form->nama_lengkap sudah diselesaikan");
    }

    public function uncomplete($id)
    {
        $form = Form::find($id);
        $form->update(['status' => 'pending']);

        return redirect()->route('home')->with('status', "Pendaftaran atas nama $form->nama_lengkap sudah dibatalkan");
    }
}
