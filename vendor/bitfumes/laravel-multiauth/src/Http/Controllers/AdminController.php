<?php

namespace Bitfumes\Multiauth\Http\Controllers;


use App\Models\Anggaran;
use App\Models\User;
use App\Models\Unit;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    public function index()
    {
        return view('multiauth::admin.home');
    }

    public function show()
    {
        $admins = Admin::where('id', '!=', auth()->id())->get();
        return view('multiauth::admin.show', compact('admins'));
    }

    public function showChangePasswordForm()
    {
        return view('multiauth::admin.passwords.change');
    }

    public function showDaftarAnggaran() {
      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::whereNull('id_admin',)->get();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('vendor.multiauth.daftar')->with($data);
    }

    public function showProgressAnggaran() {
      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::whereNotNull('progress')->get();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('vendor.multiauth.progress')->with($data);
    }

    public function showPencairanAnggaran() {
      $user = User::all();
      $unit = Unit::all();
      $anggaran = Anggaran::where('status',0)->get();
      $data = array(
        'user' => $user,
        'unit' => $unit,
        'anggaran' => $anggaran
      );
        return view('vendor.multiauth.pencairan')->with($data);
    }

    public function cairkanAnggaran(Request $request) {
      $idadmin=auth('admin')->user()->id;
      Anggaran::where('id_anggaran', $request->id_anggaran)->update([
        'status'=> 1
      ]);
        return redirect()->back();
    }


    public function editAnggaran(Request $request) {
      $idadmin=auth('admin')->user()->id;
      Anggaran::where('id_anggaran', $request->id_anggaran)->update([
        'status'=> 1
      ]);
        return redirect()->back();
    }

    public function ambilAnggaran(Request $request) {
      $idadmin=auth('admin')->user()->id;
      $id_anggaran1 = $request->id_anggaran;
      Anggaran::where('id_anggaran', $id_anggaran1)->update([
        'id_admin'=> $idadmin,
        'progress'=>'Validasi',
        'tanggal_progress'=>now()
      ]);
      return redirect()->back();
    }


    public function changePassword(Request $request)
    {
        $data = $request->validate([
            'oldPassword'   => 'required',
            'password'      => 'required|confirmed',
        ]);
        auth()->user()->update(['password' => bcrypt($data['password'])]);

        return redirect(route('admin.home'))->with('message', 'Your password is changed successfully');
    }
}
