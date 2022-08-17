@extends('layouts.adminmaster')
@section('css')
<script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>

@endsection
@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="grid"></i></div>
                          Dashboard
                        </h1>
                        
                    </div>
                    <div class="col-12 col-xl-auto mt-4">Selamat Pagi, <span class="text-light"><b>{{ Auth::user()->name }}</b></span></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card  bg-light lift lift-sm h-100" href="/admin/users">
                            <div class="card-body ">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="me-2" data-feather="file"></i>
                                    List User
                                </h5>
                                </div>
                            <div class="card-footer"><div class="small text-muted">Pendaftaran Awal</div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card bg-light lift lift-sm h-100" href="/admin/santri">
                            <div class="card-body ">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="me-2" data-feather="credit-card"></i>
                                   Biodata Santri
                                </h5>
                               </div>
                            <div class="card-footer"><div class="small text-muted">Formulir Santri </div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card bg-light lift lift-sm h-100" href="/admin/status">
                            <div class="card-body ">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="me-2" data-feather="radio"></i>
                                   Pengumuman
                                </h5>
                                </div>
                            <div class="card-footer"><div class="small text-muted">
                            Kelulusan Calon Santri    
                            </div></div>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Knowledge base category card 1-->
                        <a class="card bg-light lift lift-sm h-100" href="/admin/daftarulang">
                            <div class="card-body">
                                <h5 class="card-title text-primary mb-2">
                                    <i class="me-2" data-feather="upload"></i>
                                   Pendaftaran Ulang / Kelengkapan Berkas
                                </h5>
                                 </div>
                            <div class="card-footer"><div class="small text-muted">Upload Berkas Pendaftaran</div></div>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</main>
@endsection