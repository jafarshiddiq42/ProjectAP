<?php

namespace Database\Seeders;

use App\Models\Dftrulang;
use App\Models\Siswa;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumpsiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start = 1;
        $end = 20;




        for ($end; $start <= $end; $start++) {
            $nomortes = $start;
            // print($nomortes+$nomortes);
            // print_r($start);
            $instansi = array('MAN', 'SMK', 'MTSs');
            // foreach ($instansi as $key => $value) {
            //     echo  $value;
            // }
            // print($instansi[array_rand($instansi)]);
            User::create(
                $dataTesuser = [
                    'name'=>'user-'.strval($start),
                    'nik'=>rand(100000,999999),
                    'phone'=>rand(10000,99999),
                    'checkpin'=>false,
                    'pin'=>rand(10000,99999),
                    'is_admin'=>'0',
                    'id_santri'=>$start,
                    'id_berkas'=>$start,
                    'id_lewat'=>1,
                    'password'=>bcrypt('12345'),
                ]
            );
            Siswa::create(  $dataTessiswa = [
                'NamaLengkap'=>'user-'.strval($start),
                'JKelamin'=>'L',
                'confirmed'=>'1',
                'Instansi'=>$instansi[array_rand($instansi)],   
            ]);
            Dftrulang::create(  $dataTesulang = [
                // 'NamaLengkap'=>'user-'.strval($start),
                'confirmed'=>false,
                // 'Instansi'=>$instansi[array_rand($instansi)],   
            ]);

        }
    }
}
