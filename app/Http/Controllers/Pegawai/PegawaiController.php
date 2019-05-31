<?php

namespace App\Http\Controllers\Pegawai;

use App\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class PegawaiController extends Controller
{

    protected $redirectTo = '/pegawai/daftar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('pegawai.auth:pegawai');
    }

    /**
     * Show the Pegawai dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDaftarAnggaran() {
        return view('pegawai.daftar');
    }

}
