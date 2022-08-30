@extends('layouts.adminmaster')
@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('datatable/datatable.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css  ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/03296025ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
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

        <div style="position: fixed; top:58px ; right: 0px; z-index:2000">
            <!-- Toast -->
            <div class="toast bg-success" id="toastBasic" role="alert" aria-live="assertive" aria-atomic="true"
                data-bs-delay="3000">
                <div class="toast-header text-success d-flex justify-content-between ">
                    <div class="">
                        <i data-feather="check"></i>
                        <strong class="mr-auto"> Info</strong>
                    </div>
                    {{-- <small class="text-muted ml-2">just now</small> --}}
                    <span style=""><button class="ml-4 mb-1 btn-close" style="" type="button"
                            data-bs-dismiss="toast" aria-label="Close"></button></span>
                </div>
                <div class="toast-body text-white">{{ Session::get('status') }}</div>
            </div>
        </div>
        @if (Session::has('status'))
            <script>
                $(document).ready(function() {
                    $("#toastBasic").toast("show");
                    console.log('halo');
                })
            </script>
        @endif


        <div class="container-fluid px-4">


            <!-- Toast container -->


            <div class="card">


                <div class="card-body">
                    <table border="0" class="mb-2" cellspacing="5" cellpadding="5">
                        <tbody>
                            <tr>
                                <td>Tanggal:</td>
                                <td ><input type="text" class="form-control form-control-sm" id="min" name="min"></td>
                                <td>-</td>
                                <td ><span></span><input type="text" class="form-control form-control-sm" id="max" name="max"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="" class="display table">
                        <thead>
                            <tr>
                                <th>no.</th>
                                <th>NIK</th>
                                <th>Nama Akun</th>
                                <th>No Pendaftaran</th>
                                <th>Tanggal Daftar</th>
                                <th>No WA</th>
                                <th>Pin</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $user->nik }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ 'SB-' . str_pad($user->siswas->id, 3, 0, STR_PAD_LEFT) }}</td>
                                    <td>{{ date_format(date_create($user->created_at), 'Y-m-d') }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->pin }}</td>
                                    <td class="text-center" style="width: 20%">
                                        <form action="/admin/users/reset" method="post" id="formreset-{{ $user->id }}">
                                            @csrf
                                            <input type="text" name="idsiswa" value="{{ $user->id }}" hidden>
                                            <button class="btn btn-datatable btn-icon px-4 btn-warning" type="submit"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Password">
                                                <i class="fa-solid fa-key"></i>
                                            </button>

                                            <a target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Kirim Pin Melalui WhatsApp"
                                                href="
                                            https://api.whatsapp.com/send?phone=@if (substr($user->phone, 0, 1) == 0) {{ $user->phone = '+62' . substr(trim($user->phone), 1) }} 
                                            @else
                                             {{ $user->phone }} @endif
                                            &text=PIN Akun Pendaftaran Santri Baru Anda adalah {{ $user->pin }}
                                            
                                            "
                                                class="btn btn-datatable px-4  btn-icon btn-success"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </form>
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
    <script src="{{ asset('sbadmin/js/toasts.js') }}"></script>

    {{-- <script src="{{ asset('sbadmin/js/scripts.js') }}"></script> --}}
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script>
        var minDate, maxDate;

        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var min = minDate.val();
                var max = maxDate.val();
                var date = new Date(data[4]);

                if (
                    (min === null && max === null) ||
                    (min === null && date <= max) ||
                    (min <= date && max === null) ||
                    (min <= date && date <= max)
                ) {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'D-M-y'
            });
            maxDate = new DateTime($('#max'), {
                format: 'D-M-y'
            });

            // DataTables initialisation
            var table = $('table.display').DataTable({
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
                "language": {
                    "lengthMenu": "Menampilkan _MENU_ data perhalaman",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Data tidak ditemukan",
                    "search": "",
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
                

            // Refilter the table
            $('#min, #max').on('change', function() {
                table.draw();
            });
            
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script> --}}
@endsection
