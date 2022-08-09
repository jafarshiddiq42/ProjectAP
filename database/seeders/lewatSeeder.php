<?php

namespace Database\Seeders;

use App\Models\Lewat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class lewatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lulus =[

            [
                'keterangan'=>'Belum ditentukan'
                
            ],
            [
                'keterangan'=>'lulus'
                
            ],
            [
                'keterangan'=>'tidak lulus'
                
            ],
            [
                'keterangan'=>'lulus cadangan'
                
            ],
                 
        ];
        foreach ($lulus as $key => $value) {
           Lewat::create($value);  
         }
    }
}
