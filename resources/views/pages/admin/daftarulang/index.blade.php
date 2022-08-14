@extends('layouts.adminmaster')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
{{-- <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" /> --}}
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>

@endsection
@section('content')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-file"></i></div>
                            Berkas Pendaftaran Ulang
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                      
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
          
            <div class="card-body">
                <table id="datatablesSimple" class="">
                    <thead>
                        <tr>
                        
                            <th>Nama Santri</th>
                            <th>No Pendaftaran</th>
                            <th>NISN</th>
                            <th>Instansi Pilihan</th>
                            <th>Berkas</th>
                            <th>Pembayaran</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        @if ($user->id_lewat == 2 and $user->siswas->confirmed == 1)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="{{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }}" /></div>
                                   {{ $user->siswas->NamaLengkap }}
                                </div>
                            </td>
                            <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}</td>
                            <td>{{ $user->siswas->NISN }}</td>
                            <td>
                                @if ($user->siswas->Instansi == 'SMK')
                                <div class="badge bg-blue-soft text-blue"> Sekolah Menengah Kejuruan</div>
                            @elseif($user->siswas->Instansi == 'MAN')
                                <div class="badge bg-green-soft text-green"> Madrasah Aliyah</div>
                            @else
                                <div class="badge bg-warning-soft text-warning"> Madrasah Tsanawiyah</div>
                            @endif
                            </td>
                            <td class="text-center" ><a href="/admin/santri/berkas/{{ $user->id }}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a></td>
                            <td class="text-center" > <a href="#" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#i{{ $user->id }}"><i class="fa-solid fa-money-check"></i></a>
                                <div class="modal fade" id="i{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran Pendaftaran Ulang</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-flex justify-content-center">
                                                <div style="width: 8cm">
                                                    {{-- {{ $user->dftrulangs->id }} --}}
                                                <img src="{{ asset($user->dftrulangs->buktipembayaran) }}" style="width:-webkit-fill-available" alt="">
                                                 </div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                            </td>
                        </tr>
                        @endif
                        @empty
                            
                        @endforelse
                        
                       
                    </tbody>
                </table>
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