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
      $anggaran = Anggaran::all();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('anggaran.daftar')->with($data);
    }

    public function showFormAnggaran() {
        return view('anggaran.form');
    }

    protected function create(array $data)
    {
        return Pegawai::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
