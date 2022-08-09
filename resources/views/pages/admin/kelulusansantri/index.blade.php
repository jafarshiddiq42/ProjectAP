@extends('layouts.adminmaster')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
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
                                <div class="page-header-icon"><i class="fa-solid fa-bullhorn"></i></div>
                                Status Kelulusan
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
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                @if ($user->siswas->confirmed == 1)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2"><img class="avatar-img img-fluid"
                                                        src="@if ($user->siswas->JKelamin == 'L') {{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }} @else {{ asset('sbadmin/assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                                </div>
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
                                        <td class="text-center">
                                            <form action="/admin/lulus/{{ $user->id }}" method="post">
                                                @csrf
                                                <select name="statuslulus" id="" class="form-control form-control-sm" onchange="this.form.submit()">
                                                    <option @if ($user->id_lewat == 1) selected @endif
                                                        value="1">Belum Ditentukan</option>
                                                    <option @if ($user->id_lewat == 2) selected @endif
                                                        value="2">Lulus</option>
                                                    <option @if ($user->id_lewat == 3) selected @endif
                                                        value="3">Tidak Lulus</option>
                                                    <option @if ($user->id_lewat == 4) selected @endif
                                                        value="4">Lulus Cadangan</option>
                                                </select>
                                            </form>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script>
@endsection
