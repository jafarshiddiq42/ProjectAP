<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $role = Auth::user()->is_admin; 
        switch ($role) {
          case '1':
            return '/admin';
            break;
          case '0':
            return '/dashboard';
            break; 
      
          default:
            return '/dashboard'; 
          break;
        }
      }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string',  'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $nomorbaru = DB::table('siswas')->latest('id')->first();

        if ($nomorbaru == null) {
            
            
            DB::table('siswas')->insert([
                'NamaLengkap' => '',
                'id'=>1,
                // 'tahunajar'=>date('Y'),
            ]);
            
            DB::table('dftrulangs')->insert([
                'ktp_ayah'=>'default.jpg',
            ]);
            return User::create([
                'name' => $data['name'],
                'nik' => $data['nik'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'id_santri' =>  1,
                'id_berkas' =>  1,
                'pin'=>rand(10000,99999),
                'id_lewat' => 1,
            ]);



        } else {
            DB::table('siswas')->insert([
                'NamaLengkap' => '',
                // 'tahunajar'=>date('Y'),
                // 'confirmed'=>false,
            ]);
            DB::table('dftrulangs')->insert([
                'ktp_ayah'=>'default.jpg',
            ]);

            return User::create([
                'name' => $data['name'],
                'nik' => $data['nik'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'id_santri' => $nomorbaru->id + 1,
                'id_berkas' => $nomorbaru->id + 1,
                'pin'=>rand(10000,99999),
                'id_lewat' => 1,
            ]);
        }
    }
}
