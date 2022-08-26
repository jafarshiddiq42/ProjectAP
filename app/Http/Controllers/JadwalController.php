<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
       $jadwals = Jadwal::all()->sortBy('jadwal');
    //    dd($jadwals);
       return view('pages.admin.jadwal.index',compact('jadwals'));
    }
    public function tambahjadwal( Request $request)
    {
       $jadwal = new Jadwal();

       $jadwal->namajadwal = $request->namajadwal;
       $jadwal->jadwal = $request->tanggalujian;
       $jadwal->save();
       return redirect()->back();
    }
    public function editjadwal( Request $request)
    {
        // dd($request->all());
        // die;
       $jadwal = Jadwal::find($request->id);
        // dd($jadwal);
    //    $jadwal->namajadwal = $request->namajadwal;
       $jadwal->jadwal = $request->tanggalujian;
       $jadwal->save();
       return redirect()->back();
    }
}
