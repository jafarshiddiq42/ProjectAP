<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;
use ZipArchive;
use File;

class ZipController extends Controller
{
    public function zipberkas($id)
    {
        $berkas = Siswa::find($id);
       $zip = new ZipArchive;
       $fileName = 'berkas-'.str_pad($berkas->id,3,0,STR_PAD_LEFT).'.zip';
       if ($zip->open(public_path($fileName),ZipArchive::CREATE)== TRUE) 
       {
        $files = File::files(public_path('berkasdaftarulang/'.str_pad($berkas->id,3,0,STR_PAD_LEFT)));
            foreach ($files as $key => $value) {
                $relativeNameinZipFile = basename($value);
                $zip->addFile($value,$relativeNameinZipFile);
            }
            $zip->close();

       }
       return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }
}
