@extends('layouts.adminmaster')
@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('datatable/datatable.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    <script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
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
            <div class="row">
                @if ($hitungtaktentu > 0)
                    <div class="col-6">
                        <div class="card">
                            <h4 class="card-title  mt-4 mx-4">Belum Ditetapkan</h4>
                            <div class="card-body" style="font-size: small">
                                <form action="/admin/lulus" name="belumlulus" id="belumlulus" method="post">
                                    @csrf
                              
                                <table id="example" class="display table table-sm">
                                    <thead>
                                        <tr>

                                            <th>Opsi</th>
                                            <th>Nama Santri</th>
                                            <th>No Pendaftaran</th>
                                            {{-- <th>NISN</th> --}}
                                            <th>Instansi Pilihan</th>
                                            {{-- <th class="text-center">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @forelse ($users as $user)
                                            @if ($user->siswas->confirmed == 1 and $user->id_lewat == 1)
                                                <tr>
                                                    <td class="">
                                                        <div class="form-check form-check-solid ">
                                                            <input class="form-check-input" style="width: 20px;height:20px"
                                                                id="flexCheckSolidDefault" name="idterpilih[]" type="checkbox"
                                                                value="{{ $user->id }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            {{-- <div class="avatar me-2"><img class="avatar-img img-fluid"
                                                                    src="@if ($user->siswas->JKelamin == 'L') {{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }} @else {{ asset('sbadmin/assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                                            </div> --}}
                                                            {{ $user->siswas->NamaLengkap }}
                                                        </div>
                                                    </td>
                                                    <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}</td>
                                                    {{-- <td>{{ $user->siswas->NISN }}</td> --}}
                                                    <td>
                                                        @if ($user->siswas->Instansi == 'SMK')
                                                            <div class="badge bg-blue-soft text-blue"> Sekolah Menengah
                                                                Kejuruan
                                                            </div>
                                                        @elseif($user->siswas->Instansi == 'MAN')
                                                            <div class="badge bg-green-soft text-green"> Madrasah Aliyah
                                                            </div>
                                                        @else
                                                            <div class="badge bg-warning-soft text-warning"> Madrasah
                                                                Tsanawiyah
                                                            </div>
                                                        @endif
                                                    </td>
                                                    {{-- <td class="text-center">
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
                                                     </td> --}}
                                                </tr>
                                            @endif
                                        @empty
                                        @endforelse


                                    </tbody>
                                </table>
                                <div class="pt-4" style="border-top: 1px solid">
                                   <b> Tetapkan status</b><br>
                                   <small class="text-danger">*tetapkan status kepada yg ter-<i>checklist</i></small>
                                    <select name="statuslulus" id="" class="form-control form-control-sm my-3" >
                                        <option 
                                            value="-">-- Pilih Status --</option>
                                        <option 
                                            value="2">Lulus</option>
                                        <option 
                                            value="3">Tidak Lulus</option>
                                        <option 
                                            value="4">Lulus Cadangan</option>
                                    </select>
                                    <div class="">
                                        <a style="float: right" href="#" onclick="event.preventDefault();$('#belumlulus').submit();"  class="btn btn-sm btn-primary">Ubah</a>
                                        
                                    </div>
                                </div>
                            </form>
                            </div>

                        </div>
                    </div>
                @endif
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="card card-collapsable">
                                <a class="card-header text-dark" href="#lulus" data-bs-toggle="collapse" role="button"
                                    aria-expanded="true" aria-controls="collapseCardExample">Daftar Calon Santri yang Lulus
                                    <div class="card-collapsable-arrow">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </a>
                                <div class="collapse   p-3" style="font-size: small" id="lulus">
                                    <div class="card-body overflow-auto ">
                                        <table class="display table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Nama Santri</th>
                                                    <th>No Pendaftaran</th>
                                                    {{-- <th>NISN</th> --}}
                                                    <th>Instansi Pilihan</th>
                                                    {{-- <th class="text-center">Aksi</th> --}}
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($users as $user)
                                                    @if ($user->siswas->confirmed == 1 and $user->id_lewat == 2)
                                                        <tr>

                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    {{-- <div class="avatar me-2"><img
                                                                            class="avatar-img img-fluid"
                                                                            src="@if ($user->siswas->JKelamin == 'L') {{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }} @else {{ asset('sbadmin/assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                                                    </div> --}}
                                                                    {{ $user->siswas->NamaLengkap }}
                                                                </div>
                                                            </td>
                                                            <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}
                                                            </td>
                                                            {{-- <td>{{ $user->siswas->NISN }}</td> --}}
                                                            <td>
                                                                @if ($user->siswas->Instansi == 'SMK')
                                                                    <div class="badge bg-blue-soft text-blue"> Sekolah
                                                                        Menengah Kejuruan
                                                                    </div>
                                                                @elseif($user->siswas->Instansi == 'MAN')
                                                                    <div class="badge bg-green-soft text-green"> Madrasah
                                                                        Aliyah</div>
                                                                @else
                                                                    <div class="badge bg-warning-soft text-warning">
                                                                        Madrasah Tsanawiyah
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="/admin/batal/{{ $user->id }}" 
                                                                    class="btn btn-datatable px-4  btn-icon btn-danger"><i
                                                                        class="fa-solid fa-eject"></i></a>

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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card card-collapsable">
                                <a class="card-header text-dark" href="#gagal" data-bs-toggle="collapse" role="button"
                                    aria-expanded="true" aria-controls="collapseCardExample">Daftar Calon Santri yang Gagal
                                    <div class="card-collapsable-arrow">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </a>
                                <div class="collapse  p-3" style="font-size: small" id="gagal">
                                    <div class="card-body overflow-auto ">
                                        <table class="display  table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Nama Santri</th>
                                                    <th>No Pendaftaran</th>
                                                    {{-- <th>NISN</th> --}}
                                                    <th>Instansi Pilihan</th>
                                                    {{-- <th class="text-center">Aksi</th> --}}
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($users as $user)
                                                    @if ($user->siswas->confirmed == 1 and $user->id_lewat == 3)
                                                        <tr>

                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    {{-- <div class="avatar me-2"><img
                                                                            class="avatar-img img-fluid"
                                                                            src="@if ($user->siswas->JKelamin == 'L') {{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }} @else {{ asset('sbadmin/assets/img/illustrations/profiles/profile-1.png') }} @endif" />
                                                                    </div> --}}
                                                                    {{ $user->siswas->NamaLengkap }}
                                                                </div>
                                                            </td>
                                                            <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}
                                                            </td>
                                                            {{-- <td>{{ $user->siswas->NISN }}</td> --}}
                                                            <td>
                                                                @if ($user->siswas->Instansi == 'SMK')
                                                                    <div class="badge bg-blue-soft text-blue"> Sekolah
                                                                        Menengah Kejuruan
                                                                    </div>
                                                                @elseif($user->siswas->Instansi == 'MAN')
                                                                    <div class="badge bg-green-soft text-green"> Madrasah
                                                                        Aliyah</div>
                                                                @else
                                                                    <div class="badge bg-warning-soft text-warning">
                                                                        Madrasah Tsanawiyah
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="/admin/batal/{{ $user->id }}" 
                                                                    class="btn btn-datatable px-4  btn-icon btn-danger"><i
                                                                        class="fa-solid fa-eject"></i></a>

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
                        </div>
                    </div>
                </div>
            </div>
          {{--  --}}
     
          <button class="btn btn-primary mb-3" id="toastBasicTrigger">Toast Demo</button>
          
          <!-- Toast container -->
          <div style="position: absolute; bottom: 1rem; right: 1rem;">
              <!-- Toast -->
              <div class="toast" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                  <div class="toast-header">
                      <i data-feather="bell"></i>
                      <strong class="mr-auto">Toast with Autohide</strong>
                      <small class="text-muted ml-2">just now</small>
                      <button class="ml-2 mb-1 btn-close" type="button" data-bs-dismiss="toast" aria-label="Close">                                                                </button>
                  </div>
                  <div class="toast-body">This is an example toast alert, it will dismiss automatically, or you can dismiss it manually.</div>
              </div>
          </div>
{{--  --}}
        </div>
    </main>
@endsection
@section('Script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table.display').DataTable({
                "language": {
                    "lengthMenu": "Menampilkan _MENU_ data perhalaman",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Data tidak ditemukan",
                    "search":         "",
                    "infoFiltered": "(dari _MAX_ data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }

                },
                "stripeClasses": []
            });
         $('div.dataTables_filter input').attr("placeholder", "Cari...");
        
        });

    </script>
    @if (Session::has('status'))
        <script>
            toastr.danger("{!! Session::get('status') !!}");
        </script>
    @endif
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script> --}}
   @endsection
