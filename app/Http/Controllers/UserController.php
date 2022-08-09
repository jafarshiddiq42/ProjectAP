<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //dashboard
    public function dashboard()
    {
        return view('pages.santri.dashboard');

    }


    // 1.formulirpendaftaran
    public function formulir()
    {
        // dd(Auth::user()->id_santri);
        $user= User::find(Auth::user()->id);
        if (Auth::user()->siswas->confirmed == 1) {
            # code...
        return view('pages.santri.formulirpendaftaran.profil',compact('user'));

        }
        else {
            # code...
        return view('pages.santri.formulirpendaftaran.index');

        }
    }

    public function formulirsubmit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pasfoto'=>'image|max:1000'
        ]);

        $datasiswa = Siswa::find(Auth::user()->id_santri);
        // pribadi
        $datasiswa->NamaLengkap =$request->namalengkap     ;
        $datasiswa->NISN =$request->nisn     ;
        $datasiswa->JKelamin =$request->jkelamin    ;
        $datasiswa->Instansi =$request->instansi    ;
        $datasiswa->TptLahir =$request->tptlahir    ;
        $datasiswa->TglLahir =$request-> tgllahir    ;
        $datasiswa->SekolahAsal =$request->sekolahasal;
        $datasiswa->Kewarganegaraan =$request-> kewarganegaraan    ;
        // pasfoto
        if (isset($request->pasfoto)) {
            
        $extfoto=$request->pasfoto->extension();
        $namaFile= 'pasfoto.'.$extfoto;
        $simpan = $request->pasfoto->move('image/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);

        $datasiswa->PasFoto ='image/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
        

        }
        // ayah
        $datasiswa->NamaAyah =$request->namaayah         ;
        $datasiswa->HpAyah =$request-> hpayah    ;
        $datasiswa->PendidikanAyah =$request-> pendidikanayah    ;
        $datasiswa->PekerjaanAyah =$request->pekerjaanayah     ;
        $datasiswa->PenghasilanAyah =$request-> penghasilanayah    ;
        // Ibu
        $datasiswa->NamaIbu =$request-> namaibu    ;
        $datasiswa->HpIbu =$request-> hpibu    ;
        $datasiswa->PendidikanIbu =$request->pendidikanibu     ;
        $datasiswa->PekerjaanIbu =$request-> pekerjaanibu    ;
        $datasiswa->PenghasilanIbu =$request->  penghasilanibu   ;
        //wali 
        $datasiswa->NamaWali =$request->  namawali   ;
        $datasiswa->HpWali =$request->  hpwali   ;
        $datasiswa->HubunganWali =$request-> hubunganwali    ;
        $datasiswa->PekerjaanWali =$request->  pekerjaanwali   ;
        //tambahan    
        $datasiswa->status =$request-> statusyatim    ;
        $datasiswa->Alamat =$request->alamat     ;
        $datasiswa->MenetapDengan =$request-> menetap    ;
        $datasiswa->TB =$request-> bb    ;
        $datasiswa->BB =$request-> tb    ;
        if (isset($request->konfirmasi)) {
           $datasiswa->confirmed = $request->konfirmasi;
        }

        $datasiswa->save();

       return redirect('/formulirpendaftaran');

    }

    // 2.kartupendaftaran
    public function viewkartu()
    {   
        $user = Siswa::find(Auth::user()->id_santri);
        return view('pages.santri.kartupendaftaran.index',compact('user'));
    }
    public function kartuprint()
    {
        $siswa = Siswa::find(Auth::user()->id_santri);
        return view('pages.santri.kartupendaftaran.printkartu',compact('siswa'));
        // dd($siswa);

    }

    // 3.pengumuman
    public function pengumuman()
    {
        return view('pages.santri.pengumuman.index');

    }
    // 4.daftarulang
    public function daftarulang()
    {
        return view('pages.santri.daftarulang.index');

    }
}
