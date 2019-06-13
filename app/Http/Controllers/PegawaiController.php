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
      $totalAnggaran = Anggaran::where('id_user',Auth::user()->id)->sum('jumlah');
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran,
        'totalAnggaran' => $totalAnggaran
      );
        return view('anggaran.daftar')->with($data);
    }

    public function showDaftarAnggaranUnit($id) {

      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::with('user')
      ->whereHas('user',function ($query) use ($id){
        $query->where('id_unit',$id);
      })->get();

      $totalAnggaran = Anggaran::with('user')
      ->whereHas('user',function ($query) use ($id){
        $query->where('id_unit',$id)->where('status',1);
      })->sum('jumlah');

      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran,
        'totalAnggaran' => $totalAnggaran
      );
        return view('anggaran.daftarUnit')->with($data);
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

    public function showAnggaranUnit() {
      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::all();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );

        return view('anggaran.unit')->with($data);
    }



    public function createFormAnggaran(Request $request) {
      $file= $request->file;
                // nama file
          echo 'File Name: '.$file->getClientOriginalName();
          echo '<br>';

                // ekstensi file
          echo 'File Extension: '.$file->getClientOriginalExtension();
          echo '<br>';

                // real path
          echo 'File Real Path: '.$file->getRealPath();
          echo '<br>';

                // ukuran file
          echo 'File Size: '.$file->getSize();
          echo '<br>';

                // tipe mime
          echo 'File Mime Type: '.$file->getMimeType();

                // isi dengan nama folder tempat kemana file diupload
          $tujuan_upload = 'data_file';

                // upload file
          $file->move($tujuan_upload,$file->getClientOriginalName());
          $alamatfile = $file->getClientOriginalName();

      Anggaran::create([
        'id_user' => Auth::user()->id,
        'perihal' => $request->perihal,
        'memo' => $request->memo,
        'tanggal_anggaran' => $request->tanggal,
        'jumlah' => $request->jumlah,
        'coa' => $request->coa,
        'status' => $request->status,
        'dokumen' => $alamatfile
      ]);



        return redirect()->back();
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');


	}

}
