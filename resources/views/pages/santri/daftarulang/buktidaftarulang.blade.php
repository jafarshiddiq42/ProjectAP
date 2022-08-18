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
                                Bukti Pendaftaran Ulang
                            </h1>
                            <div class="page-header-subtitle">Cetak Bukti Pendaftaran anda</div>
                            
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

                            <div class="col-md-7 ">
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">No Pendaftaran</div>
                                    <div class="col">:<b>   {{ 'SB-' . str_pad($user->id, 3, 0, STR_PAD_LEFT) }} </b></div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">Nama</div>
                                    <div class="col">:<b> {{ $user->NamaLengkap }}</b></div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col col-lg-3 col-xs-3">NISN</div>
                                    <div class="col ">: {{ $user->NISN }}</div>
                                </div> --}}
                                <div class="row">
                                    <div class="col col-lg-3 col-xs-3">Instansi</div>
                                    <div class="col" style="white-space:">: 
                                        @if ($user->Instansi == 'SMK')
                                        <div class="badge bg-blue-soft text-blue " style=""> Sekolah Menengah Kejuruan</div>
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
                                <div class="pt-4">
                                Anda telah menyelesaikan pendaftaran ulang unduh bukti pendaftaran
                                ulang anda untuk dibawa ketika hari masuk asrama.

                                </div>
                                <div class="mt-5">
                                    <a href="/downloadbukti" target="_blank" class="btn btn-primary btn-sm">Cetak Bukti</a>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
