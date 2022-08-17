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
        // $hitungtaktentu = User::where('id_lewat','=',1)->where('is_admin','!=',1)->count();
        $hitungtaktentu = User::join('siswas','siswas.id','users.id_santri')
            ->where('users.id_lewat','=',1)
            ->where('users.is_admin','!=',1)
            ->where('siswas.confirmed','=',1)
            ->count();
        $users = User::all()->where('is_admin','!=',1)->sortByDesc('id'); 
        // dd($hitungtaktentu);
        return view('pages.admin.kelulusansantri.index' ,compact('users','hitungtaktentu'));
    }
    
    // 4.2 menentukan kelulusan
    public function updatestatus(Request $request )
    {
        // $user = User::find($id);
        // $user->id_lewat = $request->statuslulus;
        // $user->save();
        // $tes=$request->all();
        $tes=$request->idterpilih;
        foreach ($tes as $data) {
            $user = User::where('id','=',$data)->first();
            $user->id_lewat = $request->statuslulus;
            $user->save();
        }


        // dd($tes);
        return redirect()->back();
    }
    public function statusbatal($id)
    {
        $user = User::find($id);
        $user->id_lewat = 1;
        $user->save();
        return redirect('admin/status')->with('status', 'status '.$user->siswas->NamaLengkap.' diubah ke belum ditentukan');
    }


    // akhir
    public function listberkas()
    {
        $users = User::all()->except(Auth::id()); 
        return view('pages.admin.daftarulang.index',compact('users'));
    }
}
