@extends('layouts.adminmaster')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>

@endsection
@section('content')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Berkas Pendaftar
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="/admin/santri/profil/{{ $user->id }}">Profile</a>
            <a class="nav-link  active" href="#">Berkas Daftar Ulang</a>
            {{-- <a class="nav-link" href="account-security.html">Security</a>
            <a class="nav-link" href="account-notifications.html">Notifications</a> --}}
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="">Pas Foto</div>
                            <div class="">{{'SB-'.str_pad($user->siswas->id,3,0,STR_PAD_LEFT) }}</div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <div class="overflow-hidden" >
                            <img class="img-account-profile rounded mb-2" src="{{ asset($user->siswas->PasFoto) }}" alt="" />
                            </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic  mb-4">{{ $user->siswas->NamaLengkap }}</div>
                        <div class="mb-4"></div>
                        <!-- Profile picture upload button-->
                        {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                      <a href="{{ asset('images/contohbukti.jpeg') }}" target="_blank">
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Bukti Pembayaran</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">KTP Ayah</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">KTP Ibu</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Surat Keterangan Aktif</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">NPSN Sekolah Asal</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Foto Copy KK</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <!-- Billing card 1-->
                        <div class="lift card bg-light">
                            <div class="overflow-hidden" style="">
                                <img class="card-img-top" src="{{ asset('images/contohbukti.jpeg') }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Foto Copy Akta</h5>
                                {{-- <p class="card-text">...</p> --}}
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('Script')
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
<script src="{{ asset('sbadmin/js/scripts.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection