<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use App\Models\User;
use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class PegawaiController extends Controller
{

    protected $redirectTo = '/daftar';

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
     * Show the Pegawai dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDaftarAnggaran() {

      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::where('id_user',Auth::user()->id)->get();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('anggaran.daftar')->with($data);
    }

    public function showFormAnggaran() {
      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::all();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('anggaran.form')->with($data);
    }

    public function createFormAnggaran(Request $request) {

      $validatedData = $request->validate([
        'file' => 'required|mimes:png,jpg'
      ]);


      $filename = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);

      $uniqueFilename = $filename.'_MemoNo'.$request->input('memo').'.'.$request->file('file')->getClientOriginalExtension();

      $path = $request->file('file')->storeAs('public/file',$uniqueFilename);

      Anggaran::create([
        'id_user' => Auth::user()->id,
        'id_admin' => NULL,
        'progress' => NULL,
        'tanggal_progress' => NULL,
        'perihal' => $request->perihal,
        'memo' => $request->memo,
        'tanggal_anggaran' => $request->tanggal,
        'jumlah' => $request->jumlah,
        'coa' => $request->coa,
        'status' => $request->status,
        'dokumen' => $uniqueFilename
      ]);

        return redirect()->back()->with('success','Anggaran berhasil diinput');
    }


}
