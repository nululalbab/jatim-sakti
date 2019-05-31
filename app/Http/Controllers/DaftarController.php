<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class DaftarController extends Controller
{

    protected $redirectTo = 'admin/daftar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          $this->middleware('auth:admin');
    }

    /**
     * Show the Pegawai dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDaftarAnggaran() {
        return view('vendor.multiauth.daftar');
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
