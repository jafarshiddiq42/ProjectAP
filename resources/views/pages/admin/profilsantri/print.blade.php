<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
</head>

<body style="font-family: Times New Roman, Times, serif;" onload="window.print()">
    <style>
        @page {
            size: A4;
            margin: 20px 1.5cm;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* ... the rest of the rules ... */
        }
    </style>
    <header>
        <div class="d-flex justify-content-center">
            <div class="" style="margin: 0 20px">
                <img src="{{ asset('darulihsan.png') }}" height="100px" alt="">
            </div>
            <div class=" d-flex justify-content-center">
                <div class="align-self-center" style="width: 100%">
                    <h4 style="font-family: Times New Roman, Times, serif;">
                        <b>YAYASAN DARUL IHSAN TGK. H. HASAN KRUENG KALEE</b>
                    </h4>

                    <h4>
                        DAYAH DARUL IHSAN TGK. H. HASAN KRUENG KALEE</h4>
                    <h5>

                    </h5>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <main>
        <div class="">
            <div class="d-flex justify-content-between">
                <h1>Formulir Pendaftaran</h1>
                <h4><span style="margin-right: 40px" class="d-flex text-center">nomor pendaftaran:
                        <br>{{ 'SB-' . str_pad($siswa->id, 3, 0, STR_PAD_LEFT) }}</span></h4>
            </div>

            <div class="" style="border-top: 1px solid grey">
                <div class="" style="font-size: 22px">
                    <div class="my-3 text-white">
                        @if ($siswa->Instansi == 'MAN')
                            <span
                                style="border-radius: 200px;background-color:rgba(0, 255, 0, 0.544);padding:10px 20px">Madrasah
                                Aliyah</span>
                        @elseif($siswa->Instansi == 'SMK')
                            <span
                                style="border-radius: 200px;background-color:rgba(0, 30, 255, 0.631);padding:10px 20px">Sekolah
                                Menengah Kejuruan </span>
                        @else
                            <span
                                style="border-radius: 200px;background-color:rgb(255, 166, 0);padding:10px 20px">Madrasah
                                Tsanawiyah</span>
                        @endif
                    </div>
                    <hr>
                    <h3>Data Personal dan Keluarga</h3>
                    <div class="">
                        <div class="row">
                            <div class="col">

                                <div class="row">
                                    <div class="col">Nama Lengkap </div>
                                    <div class="col">: {{ $siswa->NamaLengkap }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">NISN </div>
                                    <div class="col">: {{ $siswa->NISN }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Tempat Lahir </div>
                                    <div class="col">: {{ $siswa->TptLahir }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Taggal Lahir </div>
                                    <div class="col">: {{ date_format(date_create($siswa->TglLahir), 'd-m-Y') }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Kewarganegaraan </div>
                                    <div class="col">: {{ $siswa->Kewarganegaraan }}</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row text-center">
                                    <div class="col ">
                                        <img style="margin-left: 130px" src="{{ asset($siswa->PasFoto) }}"
                                            height="130px" width="96px" alt="">
                                        <br>
                                        <span style="margin-left: 130px">
                                            {{ $siswa->JKelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4" style="background-color: rgb(244, 241, 241)">
                        <div class="row">
                            <div class="col">

                                <div class="row">
                                    <div class="col">Nama Ayah </div>
                                    <div class="col">: {{ $siswa->NamaAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Nomor HP Ayah </div>
                                    <div class="col">: {{ $siswa->HpAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Pendidikan Ayah </div>
                                    <div class="col">: {{ $siswa->PendidikanAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Pekerjaan Ayah</div>
                                    <div class="col">: {{ $siswa->PekerjaanAyah }}</div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <input onclick="event.preventDefault()" type="checkbox"
                                            @if ($siswa->status == 'yatim') checked
                                        @elseif($siswa->status == 'yatim-piatu')
                                        checked @endif
                                            name="" id=""><label class="mx-2"
                                            for="">Yatim</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Penghasilan Ayah : <br>
                                        {{ $siswa->PenghasilanAyah }} </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4" style="">
                        <div class="row">
                            <div class="col">

                                <div class="row">
                                    <div class="col">Nama Ibu </div>
                                    <div class="col">: {{ $siswa->NamaIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Nomor HP Ibu </div>
                                    <div class="col">: {{ $siswa->HpIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Pendidikan Ibu </div>
                                    <div class="col">: {{ $siswa->PendidikanIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Pekerjaan Ibu</div>
                                    <div class="col">: {{ $siswa->PekerjaanIbu }}</div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" onclick="event.preventDefault()"
                                            @if ($siswa->status == 'piatu') checked
                                        @elseif($siswa->status == 'yatim-piatu')
                                        checked @endif
                                            name="" id=""><label class="mx-2"
                                            for="">Yatim</label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">Penghasilan Ibu : <br>
                                        {{ $siswa->PenghasilanIbu }} </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4" style="background-color: rgb(244, 241, 241)">
                        <div class="row">
                            <div class="col">

                                <div class="row">
                                    <div class="col">Nama Wali </div>
                                    <div class="col">: {{ $siswa->NamaWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Nomor HP Wali </div>
                                    <div class="col">: {{ $siswa->HpWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Hubungan Wali </div>
                                    <div class="col">: {{ $siswa->HubunganWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Pekerjaan Wali</div>
                                    <div class="col">: {{ $siswa->PekerjaanWali }}</div>
                                </div>

                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                    <div class="my-4" style="">
                        <div class="row">
                            <div class="col-9">

                                <div class="row">
                                    <div class="col-4">Menetap Dengan </div>
                                    <div class="col">: {{ $siswa->MenetapDengan }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Alamat </div>
                                    <div class="col">: {{ $siswa->Alamat }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Tinggi Badan </div>
                                    <div class="col">: {{ $siswa->TB }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Berat Badan Wali</div>
                                    <div class="col">: {{ $siswa->BB }}</div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>


</body>

</html>
