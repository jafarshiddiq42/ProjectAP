<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function index()
    {
        if (Auth::user()->checkpin == 0) {
            # code...
        return view('pages.santri.pin.index');

        }
        return redirect('/dashboard');
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $pincheck = $request->pin1.$request->pin2.$request->pin3.$request->pin4.$request->pin5;
        $pin = User::find(Auth::user()->id);
        // dd($pincheck);
        if ($pincheck == $pin->pin) {
          $pin->checkpin = 1;
          $pin->save();
          return redirect('/dashboard');
        }
        return redirect()->back();
    }
}
