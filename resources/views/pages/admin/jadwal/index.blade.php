@extends('layouts.adminmaster')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{-- <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" /> --}}
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
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
                                <div class="page-header-icon"><i class="fa fa-file"></i></div>
                                jadwal Ujian
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
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-header">
                    <h4 class="card-title">Jadwal Ujian</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">jadwal yang akan ditampilkan pada kartu ujian</p>
                    <div class="">
                        <button style="float: right" class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Tambah data</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap Modal</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                            <form action="/admin/jadwal/submit" method="post">
                                                @csrf
                                                <div class="row">
                                                <div class="col"><label for="">Nama Ujian<input
                                                            class="form-control" name="namajadwal" type="text"></label>
                                                </div>
                                                <div class="col"><label for="">Tanggal dan Waktu<input
                                                            class="form-control" name="tanggalujian"
                                                            type="datetime-local"></label></div>
                                                        </div>
                                           
                                       
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                                            type="submit">Save changes</button>
                                        </form>
                                        </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ujian</th>
                                    <th>Tanggal dan Waktu</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwals as $jadwal)
                                    <tr>
                                        <td></td>
                                        <td>{{ $jadwal->namajadwal }}</td>
                                        <td>{{ date_format(date_create($jadwal->jadwal), 'd-m-Y H:i:s') }}</td>
                                        <td class="d-flex justify-content-center">
                                            <button style="float: right" class="btn btn-primary" type="button"
                                                data-bs-toggle="modal" data-bs-target="#e{{ $jadwal->id }}">Edit Jadwal</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="e{{ $jadwal->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Default Bootstrap
                                                                Modal</h5>
                                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="/admin/jadwal/edit" method="post">
                                                                @csrf
                                                                <input type="text" hidden name="id" value="{{ $jadwal->id }}">
                                                                <div class="row ">
                                                                    <div class="col d-flex justify-content-center"><label
                                                                            for="">Tanggal dan Waktu<input
                                                                                class="form-control" name="tanggalujian"
                                                                                value="{{ $jadwal->jadwal }}"
                                                                                type="datetime-local"></label></div>
                                                                </div>


                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-secondary"
                                                                type="button" data-bs-dismiss="modal">Close</button><button
                                                                class="btn btn-primary" type="submit">Save changes</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
@section('Script')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('sbadmin/js/datatables/datatables-simple-demo.js') }}"></script> --}}
@endsection
