@extends('layouts.usermaster')
@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fa-solid fa-bullhorn"></i></div>
                                Pengumuman
                            </h1>
                            <div class="page-header-subtitle">Pengumuman Kelulusan</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">

            <div class="card">
                {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> --}}

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                @if (Auth::user()->id_lewat == 1)
                                    <div class="bg-primary text-white" style="border-radius: 0.3cm">
                                        <div class="p-4 m-4">
                                            <i class="fa-solid fs-4 fa-check">
                                            </i>
                                            <span class="mx-3">
                                               Belum ada Pengumuman
                                            </span>
                                        </div>
                                    </div>
                                @elseif(Auth::user()->id_lewat == 2)
                                    <div class="bg-success text-white" style="border-radius: 0.3cm">
                                        <div class="p-4 m-4">
                                            <i class="fa-solid fs-4 fa-check">
                                            </i>
                                            <span class="mx-3">
                                            Selamat, anda Lulus seleksi
                                            </span>
                                        </div>
                                    </div>
                                @elseif(Auth::user()->id_lewat == 3)
                                    <div class="bg-danger text-white" style="border-radius: 0.3cm">
                                        <div class="p-4 m-4">
                                            <i class="fa-solid fs-4 fa-check">
                                            </i>
                                            <span class="mx-3">
                                         Anda Tidak Lulus Seleksi, jangan patah semangat
                                            </span>
                                        </div>
                                    </div>
                                @else
                                    <div class="bg-warning text-white" style="border-radius: 0.3cm">
                                        <div class="p-4 m-4">
                                            <i class="fa-solid fs-4 fa-check">
                                            </i>
                                            <span class="mx-3">
                                        Anda  Lulus sebagai Cadangan, hubungi pihak panitia untuk booking kursi
                                            </span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class=" d-flex justify-content-end">
                                    <a href="#" class="mb-1 btn btn-primary"> <i
                                            class="fa-solid fa-list-check "></i><span class="mx-2">Pengumuman
                                            Keseluruhan</span></a>

                                </div>

                            </div>
                            <div class="col col-lg-3">
                                <div class=" d-flex justify-content-end">
                                  @if (Auth::user()->id_lewat == 4)
                                  <a href="#" class="mb-1 btn btn-success"> <i class="fa-brands fa-whatsapp"></i>
                                     <span class="mx-2">Hubungi Panitia</span></a>
                                  @elseif(Auth::user()->id_lewat != 2)
                                  <a href="#"   class="mb-1 btn btn-secondary"> <i
                                    class="fa-regular fa-circle-check"></i> <span class="mx-2">Daftar
                                    Ulang</span></a>
                                    @else
                                    <a href="/daftarulang" class="mb-1 btn btn-primary"> <i
                                        class="fa-regular fa-circle-check"></i> <span class="mx-2">Daftar
                                        Ulang</span></a>
                                  @endif

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
