@extends('layouts.usermaster')
@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="credit-card"></i></div>
                                Kartu
                            </h1>
                            <div class="page-header-subtitle">Cetak Kartu Pendaftaran anda</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">

            <div class="card">
                {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> --}}

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col " >
                                <div class="overflow-auto">
                                    Preview Kartu
                                    <div class="bg-light overflow-hidden " style="height: 6cm;width:9cm;border-radius:2%;border:1px solid">
                                        <div class="row bg-white px-4" style="height: 50px;border-bottom:1px solid black"  >
                                            <table style="width: 100%;font-size:7px">
                                                <tr>
                                                     <td rowspan="4"><img src="{{ asset('darulihsan.png') }}" alt=""  width="40" class="m-2"></td>
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
                                            <table class="m-2 mt-3" style="width: 100%;font-size:7px">
                                                <div class="table-group">
                                                    <tr>
                                                        <td style="width: 50%">
                                                            <b>Data Pribadi</b>
                                                        </td>
                                                        <td style="width: 20%" class="text-center" rowspan="">
                                                            <div class="  "><b> No.Pendaftaran <br> {{ 'SB-' . str_pad($user->id, 3, 0, STR_PAD_LEFT) }} </b></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama : <b>{{ $user->NamaLengkap }}</b></td>
                                                        <td style="width: 1cm;height:2cm;" class="text-center "
                                                            rowspan="5">
                                                            <div class="s">
                                                                <img style="width: 1.5cm;heigh:2.5cm;"
                                                                    src="{{ asset($user->PasFoto) }}"
                                                                    alt="">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin : <b>
                                                            @if ($user->JKelamin == 'L')
                                                                Laki-laki
                                                            @else
                                                                Perempuan
                                                            @endif
                                                        </b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat/tanggal Lahir : <b>{{ $user->TptLahir }} / {{ date_format(date_create($user->TglLahir),'d-m-Y') }}</b></td>
                                                    </tr>
                                                </div>

                                                <div class="table-group">
                                                    <tr>
                                                        <td>Mendaftar pada : <b>
                                                            @if ($user->Instansi == 'SMK')
                                                            <div class="badge bg-blue-soft text-blue"> Sekolah Menengah Kejuruan</div>
                                                        @elseif($user->Instansi == 'MAN')
                                                            <div class="badge bg-green-soft text-green"> Madrasah Aliyah</div>
                                                        @else
                                                            <div class="badge bg-warning-soft text-warning"> Madrasah Tsanawiyah</div>
                                                        @endif    
                                                        </b></td>
                                                    </tr>
                                                </div>

                                                <div class="table-group ">
                                                    <tr>
                                                        <td> <b>Waktu Tes</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table class="table table-sm table-light "
                                                                style="width: 90%;font-size:7px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama Tes</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Pukul</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Tes Tulis</td>
                                                                        <td>30-07-2022</td>
                                                                        <td>12:06</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Wawancara</td>
                                                                        <td>30-07-2022</td>
                                                                        <td>12:06</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </div>

                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 ">
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">No Pendaftaran</div>
                                    <div class="col">:<b>   {{ 'SB-' . str_pad($user->id, 3, 0, STR_PAD_LEFT) }} </b></div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">Nama</div>
                                    <div class="col">:<b> {{ $user->NamaLengkap }}</b></div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">NISN</div>
                                    <div class="col ">: {{ $user->NISN }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">Instansi</div>
                                    <div class="col">: 
                                        @if ($user->Instansi == 'SMK')
                                        <div class="badge bg-blue-soft text-blue "> Sekolah Menengah Kejuruan</div>
                                    @elseif($user->Instansi == 'MAN')
                                        <div class="badge bg-green-soft text-green "> Madrasah Aliyah</div>
                                    @else
                                        <div class="badge bg-warning-soft text-warning "> Madrasah Tsanawiyah</div>
                                    @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">Asal Sekolah</div>
                                    <div class="col">: {{ $user->SekolahAsal }}</div>
                                </div>
                                <div class="mt-5">
                                    <a href="/kartupendaftaran/print" target="_blank" class="btn btn-primary btn-sm">Cetak Kartu</a>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
