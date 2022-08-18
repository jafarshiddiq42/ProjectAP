<?php

namespace App\Http\Controllers;

use App\Models\Dftrulang;
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
        $simpan = $request->pasfoto->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);

        $datasiswa->PasFoto ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
        

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
        if (Auth::user()->siswas->confirmed == 1) {
            # code...
            $user = Siswa::find(Auth::user()->id_santri);
            return view('pages.santri.kartupendaftaran.index',compact('user'));
        }

        return redirect('/dashboard');
        
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
        if (Auth::user()->id_lewat != 1) {
            # code...
        return view('pages.santri.pengumuman.index');
        }
        return redirect('/dashboard');

    }
    public function pengumumansemua()
    {
        $nomor = 1;
        $siswas =user::where('id_lewat','=',2)->get();

        // dd($siswas);
        return view('pages.santri.pengumuman.pengumuman',compact('siswas','nomor'));

    }
    // 4.daftarulang
    public function daftarulang()
    {
        if (Auth::user()->id_lewat != 2) {
            # code...
            return redirect('/dashboard');

        }
        elseif (Auth::user()->id_lewat == 2 and Auth::user()->dftrulangs->confirmed ==1) {
            $user = Siswa::find(Auth::user()->id_santri);
        return view('pages.santri.daftarulang.buktidaftarulang',compact('user'));
            
        }
        return view('pages.santri.daftarulang.index');
        

    }
    public function daftarulangsubmit(Request $request)
    {
        // dd($request->all());

        $berkasuser = Dftrulang::find(Auth::user()->id_berkas);
        // $berkasuser->buktipembayaran = $request->bukti;
        // $berkasuser->foto_nisn = $request->nisn;
        // $berkasuser->ktp_ayah = $request->ktpayah;
        // $berkasuser->ktp_ibu = $request->ktpibu;
        // $berkasuser->surat_aktif = $request->ska;
        // $berkasuser->NPSN = $request->npsn;
        // $berkasuser->fc_kk = $request->fc_kk;
        // $berkasuser->fc_akta = $request->fc_akta;

        // bukti
        if (isset($request->bukti)) {
            
            $extbukti=$request->bukti->extension();
            $namaFile= 'bukti.'.$extbukti;
            $simpan = $request->bukti->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->buktipembayaran ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // nisn
        if (isset($request->nisn)) {
            
            $extnisn=$request->nisn->extension();
            $namaFile= 'nisn.'.$extnisn;
            $simpan = $request->nisn->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->foto_nisn ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // ktpayah
        if (isset($request->ktpayah)) {
            
            $extktpayah=$request->ktpayah->extension();
            $namaFile= 'ktpayah.'.$extktpayah;
            $simpan = $request->ktpayah->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->ktp_ayah ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // ktpibu
        if (isset($request->ktpibu)) {
            
            $extktpibu=$request->ktpibu->extension();
            $namaFile= 'ktpibu.'.$extktpibu;
            $simpan = $request->ktpibu->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->ktp_ibu ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // ska
        if (isset($request->ska)) {
            
            $extska=$request->ska->extension();
            $namaFile= 'ska.'.$extska;
            $simpan = $request->ska->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->surat_aktif ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // npsn
        if (isset($request->npsn)) {
            
            $extnpsn=$request->npsn->extension();
            $namaFile= 'npsn.'.$extnpsn;
            $simpan = $request->npsn->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->NPSN ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // fc_kk
        if (isset($request->fc_kk)) {
            
            $extfc_kk=$request->fc_kk->extension();
            $namaFile= 'fc_kk.'.$extfc_kk;
            $simpan = $request->fc_kk->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->fc_kk ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }
        // fc_kk
        if (isset($request->fc_akta)) {
            
            $extfc_akta=$request->fc_akta->extension();
            $namaFile= 'fc_akta.'.$extfc_akta;
            $simpan = $request->fc_akta->move('berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT),$namaFile);
    
            $berkasuser->fc_akta ='berkasdaftarulang/'.str_pad(Auth::user()->siswas->id,3,0,STR_PAD_LEFT).'/'.$namaFile    ;
            
            }

        $berkasuser->save();



        echo($berkasuser);

        return redirect('/dashboard');


        // return view('pages.santri.daftarulang.index');

    }


    public function downloadbukti()
    {


        if (Auth::user()->id_lewat != 2) {
            # code...
            return redirect('/dashboard');

        }
        $siswa = Siswa::find(Auth::user()->siswas->id);
        return view('pages.santri.daftarulang.print',compact('siswa'));
    }
}
