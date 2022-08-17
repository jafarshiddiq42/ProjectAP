@extends('layouts.adminmaster')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('datatable/datatable.css') }}">


@endsection
@section('content')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-users"></i></div>
                            Biodata Pendaftar
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
                <table id="" class="display table">
                    <thead>
                        <tr>
                        
                            <th>Nama Santri</th>
                            <th>No Pendaftaran</th>
                            <th>NISN</th>
                            <th>Instansi Pilihan</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="@if($user->siswas->JKelamin=="L"){{ asset('sbadmin/assets/img/illustrations/profiles/profile-2.png') }} @else {{ asset('sbadmin/assets/img/illustrations/profiles/profile-1.png') }} @endif" /></div>
                                  {{$user->siswas->NamaLengkap}}
                                </div>
                            </td>
                            <td>{{ 'SB-'.str_pad($user->siswas->id,3,0,STR_PAD_LEFT) }}</td>
                            <td>{{ $user->siswas->NISN }}</td>
                            <td>
                                @if ($user->siswas->Instansi == 'SMK')
                                <div class="badge bg-blue-soft text-blue"> Sekolah Menengah Kejuruan</div>
                                @elseif($user->siswas->Instansi == 'MAN')
                                <div class="badge bg-green-soft text-green"> Madrasah Aliyah</div>
                                @elseif($user->siswas->Instansi == 'MTSs')
                                <div class="badge bg-warning-soft text-warning"> Madrasah Tsanawiyah</div>
                                @else
                                <div class="badge bg-danger-soft text-danger"> Belum Menentukan</div>
                                @endif
                            </td>
                            <td>
                               @if (  $user->siswas->confirmed == '0')
                                <div class="text-danger"> Belum Konfirmasi Data</div>
                               @else
                                  <div class="text-success"> Sudah Konfirmasi Data</div>
                               @endif
                            </td>
                            <td class="text-center">
                                    <form action="/admin/batalkonfirmasiformulir" name="batalkonfirm" id="batalkonfirm{{ $user->siswas->id }}" method="post">
                                        @csrf
                                <input type="text" name="idsiswa" class="d-none" value="{{ $user->siswas->id }}"  id="">
                                </form>
                                <a href="" onclick="event.preventDefault();$('#batalkonfirm{{ $user->siswas->id }}').submit()" class="btn btn-datatable px-4  btn-icon btn-danger"><i class="fa-solid fa-eject"></i></a>
                                <a href="/admin/santri/profil/{{ $user->id }}" class="btn btn-datatable px-4  btn-icon btn-primary"><i class="fa-solid fa-eye"></i></a>
                                <a href="/admin/santri/print/{{ $user->siswas->id }}" target="_blank" class="btn btn-datatable px-4  btn-icon btn-warning"><i class="fa-solid fa-print"></i></a>
                                {{-- <a href="" class="btn btn-datatable px-4  btn-icon btn-success"><i class="fa-brands fa-whatsapp"></i></a> --}}
                            </td>
                        </tr>
                     
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
{{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script> --}}
@endsection