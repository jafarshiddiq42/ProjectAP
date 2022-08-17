@extends('layouts.adminmaster')
@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('datatable/datatable.css') }}">

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
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Akun Terdaftar
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            {{-- <a class="btn btn-sm btn-light text-primary" href="user-management-groups-list.html">
                            <i class="me-1" data-feather="users"></i>
                            Manage Groups
                        </a>
                        <a class="btn btn-sm btn-light text-primary" href="user-management-add-user.html">
                            <i class="me-1" data-feather="user-plus"></i>
                            Add New User
                        </a> --}}
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
                                <th>no.</th>
                                <th>No WA</th>
                                <th>Nama Akun</th>
                                <th>No Pendaftaran</th>
                                <th>Pin</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}</td>
                                    <td>{{ $user->pin }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-datatable px-4  btn-icon btn-warning"><i
                                                class="fa-solid fa-arrow-rotate-left"></i></a>
                                        <a 
                                        target="_blank"
                                        href="
                                            https://api.whatsapp.com/send?phone=@if (substr($user->phone, 0, 1) == 0) {{ $user->phone = '+62' . substr(trim($user->phone), 1) }} 
                                            @else
                                             {{ $user->phone }} 
                                            @endif
                                            &text=PIN Akun Pendaftaran Santri Baru Anda adalah {{ $user->pin }}
                                            
                                            "
                                            class="btn btn-datatable px-4  btn-icon btn-success"><i
                                                class="fa-brands fa-whatsapp"></i></a>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>

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
