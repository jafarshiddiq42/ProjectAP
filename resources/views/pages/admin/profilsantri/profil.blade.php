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
                            Profil Pendaftar
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
            <a class="nav-link active ms-0" href="#">Profile</a>
            <a class="nav-link" href="/admin/santri/berkas/{{ $user->id }}">Berkas Daftar Ulang</a>
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

                        {{-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> --}}
                        <div class="mb-4"></div>
                        <!-- Profile picture upload button-->
                        {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header border-bottom">
                        <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" href="#overview" data-bs-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Data Pribadi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="example-tab" href="#example" data-bs-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Data Orang Tua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wali-tab" href="#wali" data-bs-toggle="tab" role="tab" aria-controls="wali" aria-selected="false">Data Wali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tambah-tab" href="#tambah" data-bs-toggle="tab" role="tab" aria-controls="tambah" aria-selected="false">Tambahan</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="cardTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <h5 class="card-title">Pribadi</h5>
                                <div class="row">
                                    <div class="col col-xs-1">Nama Lengkap</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->NamaLengkap }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">NISN</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->NISN }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Jenis Kelamin</div>
                                    <div class="col col-xs-3">: @if ($user->siswas->JKelamin == "L")
                                        Laki-laki
                                        @else
                                        Perempuan
                                    @endif</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Instansi Pilihan</div>
                                    <div class="col col-xs-3">: 
                                        @if ($user->siswas->Instansi == "SMK")
                                        Sekolah Menengah Kejuruan
                                        @elseif($user->siswas->Instansi == "MAN")
                                        Madrasah Aliyah
                                        @else
                                        Madrasah Tsanawiyah
                                        @endif
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Tempat/Tanggal Lahir</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->TptLahir }}/{{ date_format(date_create($user->siswas->TglLahir),"d-m-Y")  }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Sekolah Asal</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->SekolahAsal }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Kewarganegaraan</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->Kewarganegaraan }}</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="example" role="tabpanel" aria-labelledby="example-tab">
                                <h5 class="card-title">Ayah</h5>
                                <div class="row">
                                    <div class="col col-xs-1">Nama Ayah</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->NamaAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">No Hp</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->HpAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Pendidikan Ayah</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PendidikanAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Pekerjaan Ayah</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PekerjaanAyah }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Penghasilan Ayah</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PenghasilanAyah }}</div>
                                </div>
                                <hr>
                                <h5 class="card-title">Ibu</h5>
                                <div class="row">
                                    <div class="col col-xs-1">Nama Ibu</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->NamaIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">No Hp</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->HpIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Pendidikan Ibu</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PendidikanIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Pekerjaan Ibu</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PekerjaanIbu }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Penghasilan Ibu</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PenghasilanIbu }}</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="wali-tab">
                                <h5 class="card-title">Wali</h5>
                                <div class="row">
                                    <div class="col col-xs-1">Nama Wali</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->NamaWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">No Hp</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->HpWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">hubungan</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->HubunganWali }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Pekerjaan </div>
                                    <div class="col col-xs-3">: {{ $user->siswas->PekerjaanWali }}</div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="tambah-tab">
                                <h5 class="card-title">Tambahan</h5>
                                <div class="row">
                                    <div class="col col-xs-1">Yatim/piatu</div>
                                    <div class="col col-xs-3">: {{ $user->siswas->status }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Menetap dengan </div>
                                    <div class="col col-xs-3">: {{ $user->siswas->MenetapDengan }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Alamat </div>
                                    <div class="col col-xs-3">: {{ $user->siswas->Alamat }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Tinggi Badan </div>
                                    <div class="col col-xs-3">: {{ $user->siswas->TB }}</div>
                                </div>
                                <div class="row">
                                    <div class="col col-xs-1">Berat Badan </div>
                                    <div class="col col-xs-3">: {{ $user->siswas->BB }}</div>
                                </div>
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