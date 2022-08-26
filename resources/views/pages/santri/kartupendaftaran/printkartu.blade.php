<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body onload="window.print()">
    <main>
        <style>
            @media print
{ 
@page { size: 13cm 14cm; } 
}   
        </style>
        <div class="bg-light overflow-hidden " style="height: 12cm;width:13cm;border-radius:2%;border:1px solid">
            <div class="row bg-white px-4" style="height: 3cm;border-bottom:1px solid black"  >
                <table style="width: 100%;font-size:11px">
                    <tr>
                         <td style="height: 3cm" rowspan="4"><img src="{{ asset('darulihsan.png') }}" alt=""  width="80px" class="m-2"></td>
                         <td class="">
                         <b> PANITIA PENERIMAAN SANTRI BARU
                        DAYAH DARUL IHSAN TGK. H. HASAN KRUENG KALEE
                   <br>
                      TAHUN AJARAN 2022-2023</td>
                    </b>
                    <br>
                    </tr>
                </table>
                
            </div>
            
            <div class="overdflow-auto m-2" >
                <table style="width: 100%" class="m-1 my-4">
                   <tr>
                    <td><b>Data Pribadi</b></td>
                    <td></td>
                    <td class="text-center">{{ 'SB-'.str_pad($siswa->id,0,3,STR_PAD_LEFT) }}</td>
                   </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: <b>{{ $siswa->NamaLengkap }}</b></td>
                        <td rowspan="5"><div  style="max-width: 3cm;max-heigh:4cm;" class="" ><img style="max-width: 3cm;max-heigh:4cm;width:-webkit-fill-available" src="{{ asset($siswa->PasFoto) }}" alt=""></div></td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>: <b>@if ( $siswa->JKelamin  == 'L')
                            Laki-laki
                        @else
                            Perempuan
                        @endif</b></td>
                    </tr>
                    <tr>
                        <td>Tempat/Tanggal Lahir</td>
                        <td>: <b>{{ $siswa->TptLahir.'/'.$siswa->TglLahir }}</b></td>
                    </tr>
                    <tr>
                        <td>Mendaftar Pada</td>
                        <td>: 
                           <b>
                            @if ($siswa->Instansi == 'SMK')
                            <div class="badge bg-blue-soft text-blue"> Sekolah Menengah Kejuruan</div>
                        @elseif($siswa->Instansi == 'MAN')
                            <div class="badge bg-green-soft text-green"> Madrasah Aliyah</div>
                        @else
                            <div class="badge bg-warning-soft text-warning"> Madrasah Tsanawiyah</div>
                        @endif  
                           </b>
                        </td>
                    </tr>
                </table>

                <table style="font-size: small" class=" table table-sm  m-1 my-1">
                    <thead>
                        <tr>
                            <th>Ujian</th>
                            <th>Tanggal</th>
                            <th>Jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($jadwals as $jadwal)
                    <tr>
                     
                        <td>{{ $jadwal->namajadwal }}</td>
                        <td>{{ date_format(date_create($jadwal->jadwal),'d-m-Y') }}</td>
                        <td>{{ date_format(date_create($jadwal->jadwal),    'H:i:s') }}</td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
                </table>
                <div class="" style="border-top: 1px solid">
                <div class="mx-3 mt-2 " style="font-size: 9px;color:red">
                    *Kartu Harap dibawa versi cetaknya pada saat ujian nanti <br>
                    *Masing-masing peserta wajib membawa alat tulis <br>
                    *Peserta diharuskan hadir 15 menit sebelum ujian dimulai <br>
                </div>
            </div>

            </div>
        </div>
    </main>
</body>
</html>