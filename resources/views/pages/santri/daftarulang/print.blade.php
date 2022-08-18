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
        <div class="bg-light overflow-hidden " style="height: 11cm;width:13cm;border-radius:2%;border:1px solid">
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
            
            <div class="overdflow-auto" >
                <table class="m-2 mt-3" style="width: 100%;font-size:11px">
                    <div class="table-group">
                        <tr>
                            <td style="width: 50%">
                                <h5>Kartu Bukti Pendaftaran Ulang</h5>
                            </td>
                            <td style="width: 20%" class="text-center" rowspan="">
                                <div class="  "><b> No.Pendaftaran <br> {{ 'SB-' . str_pad($siswa->id, 3, 0, STR_PAD_LEFT) }} </b></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama : <b>{{ $siswa->NamaLengkap }}</b></td>
                            <td style="width: 1cm;height:2cm;" class="text-center "
                                rowspan="5">
                                <div class="s">
                                    <img style="width: 1.5cm;heigh:2.5cm;"
                                        src="{{ asset($siswa->PasFoto) }}"
                                        alt="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : <b>
                                @if ($siswa->JKelamin == 'L')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </b>
                            </td>
                        </tr>
                        <tr><td>Nama Ayah : <b>{{ $siswa->NamaAyah }}</b></td></tr>
                        <tr>
                            <td>Tempat/tanggal Lahir : <b>{{ $siswa->TptLahir }} / {{ date_format(date_create($siswa->TglLahir),'d-m-Y') }}</b></td>
                        </tr>
                    </div>

                    <div class="">
                        <tr>
                            <td>Mendaftar pada : <b>
                                @if ($siswa->Instansi == 'SMK')
                                <div class="badge bg-blue-soft text-blue"> Sekolah Menengah Kejuruan</div>
                            @elseif($siswa->Instansi == 'MAN')
                                <div class="badge bg-green-soft text-green"> Madrasah Aliyah</div>
                            @else
                                <div class="badge bg-warning-soft text-warning"> Madrasah Tsanawiyah</div>
                            @endif    
                            </b></td>
                        </tr>
                    </div>
                 
                
            
                </table>
                <div class="mx-4 mb-2">
                    <div class="" style="text-indent: 20px;font-size: 12px">
                        Telah menyelesaikan Pendaftan Ulang dan Melunasi Pembayaran Pendaftaran Ulang
                    </div>
                </div>
                <div class="" style="padding-left:10cm">
                    <div class="row">
                        <div class="col" style="font-size: 12px;margin-left:20px">
                            TTD
                        </div>
                    </div>
                    
                    <div class="row">
                        <img src="{{ asset('tandatangan.png') }}" style="width: 120px;margin-top: -40px"  alt="">
                    </div>
                    <div class="row">
                        <div class="col" style="font-size: 12px;margin-left:8px; margin-top:-30px;">
                            Bag. Bendahara
                        </div>
                    </div>
                </div>

                <div class="" style="border-top: 1px solid">
                <div class="mx-3 mt-2 " style="font-size: 9px;color:red">
                    *Bukti ini harap dibawa ketika masuk asrama nanti<br>
                </div>
            </div>

            </div>
        </div>
    </main>
</body>
</html>