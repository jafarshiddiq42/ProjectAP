<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class AdminController extends Controller
{
    //1. dashboard

    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    //2.list akun user
    public function listuser()
    {
        $nomor = 1;
        $users = User::orderBy('id', 'DESC')->get()->except(Auth::id()); 
        return view('pages.admin.akunuser.index',compact('users','nomor'));
    }

    // 3.listprofiluser
    public function listprofil()
    {
        $users = User::all()->except(Auth::id()); 
        return view('pages.admin.profilsantri.index',compact('users'));

    }
    // 3.2profil peruser
    public function profil($id)
    {
        // $users = User::
        // join('siswas','users.id_santri','siswas.id')
        // ->where('siswas.confirmed','=',1); 
        $user = User::find($id); 
        return view('pages.admin.profilsantri.profil' ,compact('user'));

        
    }
    public function batalkonfirmasiformulir(Request $request)
    {
        $siswa = siswa::find($request->idsiswa);
        $siswa->confirmed = 0;
        $siswa->save();
        return redirect()->back();
    }
    public function printformulir($id )
    {
        $siswa = Siswa::find($id);

        // dd($siswa);
        return view('pages.admin.profilsantri.print' ,compact('siswa'));

    }

    // 3.3 berkas user
    public function berkas($id)
    {
        // $users = User::
        // join('siswas','users.id_santri','siswas.id')
        // ->where('siswas.confirmed','=',1); 
        $user = User::find($id); 
        return view('pages.admin.profilsantri.berkas' ,compact('user'));

        
    }




    // 4.kelulusan pendaftar
    public function listkelulusan()
    {
        $users = User::all()->except(Auth::id()); 
        return view('pages.admin.kelulusansantri.index' ,compact('users'));
    }
    
    // 4.2 menentukan kelulusan
    public function updatestatus(Request $request ,$id)
    {
        $user = User::find($id);
        $user->id_lewat = $request->statuslulus;
        $user->save();
        return redirect()->back();
    }

    public function listberkas()
    {
        $users = User::all()->except(Auth::id()); 
        return view('pages.admin.daftarulang.index',compact('users'));
    }
}
