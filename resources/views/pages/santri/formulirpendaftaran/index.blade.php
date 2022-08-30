@extends('layouts.usermaster')
@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file"></i></div>
                                Formulir Pendaftaran
                            </h1>
                            <div class="page-header-subtitle">Harap mengisi <b>Formulir Pendaftaran</b> dengan Benar dan
                                Detail</div>
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
                            <section>
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs" role="tablist">

                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                    title="Data Pribadi">
                                                    <span class="round-tab d-flex justify-content-center">
                                                        <p class="align-self-center mt-2 text-wizard">Data Pribadi</p>
                                                    </span>
                                                </a>
                                            </li>

                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                                    title="Data Orang Tua">
                                                    <span class="round-tab">
                                                        <p class="align-self-center mt-2 text-wizard">Data Orang Tua</p>
                                                    </span>
                                                </a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                                    title="Data Wali">
                                                    <span class="round-tab">
                                                        <p class="align-self-center mt-3 text-wizard">Data Wali</p>

                                                    </span>
                                                </a>
                                            </li>

                                            <li role="presentation" class="disabled">
                                                <a href="#complete" data-toggle="tab" aria-controls="complete"
                                                    role="tab" title="Tambahan">
                                                    <span class="round-tab">
                                                        <p class="align-self-center mt-3 text-wizard">Lain <br>Lain</p>

                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <form role="form" enctype="multipart/form-data" action="/formulirpendaftaran"
                                        method="post">
                                        @csrf
                                        <div class="tab-content">
                                            <div class="tab-pane active " role="tabpanel" id="step1">
                                                <div class="">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-xl-8">
                                                            <h3 class="text-primary">Data Pribadi</h3>
                                                            <h5 class="card-title mb-4">Isi Data Pribadi</h5>

                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">
                                                                    <div class="row gx-3">
                                                                        <div class="mb-3 col">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">Nama
                                                                                Lengkap</label>
                                                                            <input class="form-control " id="inputFirstName"
                                                                                type="text"
                                                                                value="{{ old('namalengkap') }}"
                                                                                name="namalengkap"
                                                                                placeholder="Nama calon Santri" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row gx-3">
                                                                        <div class="mb-3 col">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">NISN</label>
                                                                            <input class="form-control" name="nisn"
                                                                                value="{{ old('nisn') }}"
                                                                                type="text" placeholder="NISN" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="row gx-3">
                                                                        <div class="mb-3 col">
                                                                            <label class="small mb-1"
                                                                                for="inputOrgName">Jenis Kelamin</label>
                                                                            <select name="jkelamin" id="2"
                                                                                class="form-control">
                                                                                <option value=""
                                                                                    {{ Auth::user()->siswas->JKelamin == '' ? 'selected' : '' }}
                                                                                    disabled>-- Jenis Kelamin --
                                                                                </option>

                                                                                <option value="L"
                                                                                    {{ Auth::user()->siswas->JKelamin == 'L' ? 'selected' : '' }}>
                                                                                    Laki-laki
                                                                                </option>
                                                                                <option value="P"
                                                                                    {{ Auth::user()->siswas->JKelamin == 'P' ? 'selected' : '' }}>
                                                                                    Perempuan
                                                                                </option>
                                                                            </select>
                                                                           
                                                                        </div>


                                                                    </div>
                                                                    <div class="row gx-3">
                                                                        <div class="mb-3 col">
                                                                            <label class="small mb-1"
                                                                                for="inputLastName">Instansi</label>
                                                                            <select name="instansi" id=""
                                                                                class="form-control">
                                                                                <option
                                                                                    value=""{{ Auth::user()->siswas->Instansi == '' ? 'selected' : '' }}
                                                                                    disabled>-- Pilih Instansi --
                                                                                </option>
                                                                                <option value="MTSs"
                                                                                    {{ Auth::user()->siswas->Instansi == 'MTSs' ? 'selected' : '' }}>
                                                                                    Madrasah
                                                                                    Tsanawiyah</option>
                                                                                <option value="MAN"
                                                                                    {{ Auth::user()->siswas->JKelamin == 'MAN' ? 'selected' : '' }}>
                                                                                    Madrasah Aliyah
                                                                                </option>
                                                                                <option value="SMK"
                                                                                    {{ Auth::user()->siswas->JKelamin == 'SMK' ? 'selected' : '' }}>
                                                                                    Sekolah Menengah
                                                                                    Kejuruan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 col-md-6 ">
                                                                    <div class="d-flex justify-content-center">

                                                                        <div class="  d-flex justify-content-center overflow-hidden "
                                                                            id="borderfoto" onclick="$('#imgInp').click()"
                                                                            style="width:195px;height: 265px;border-radius:4%">
                                                                            <p id="textbantu"
                                                                                class=" text-center align-self-center">
                                                                                Preview
                                                                                <br> Image
                                                                            </p>
                                                                            <img src="{{ asset(Auth::user()->siswas->PasFoto) }}"
                                                                                id="blah" height="265px"
                                                                                alt="">
                                                                        </div>




                                                                    </div>

                                                                    <label class="small mb-1" for="inputLocation">Pas
                                                                        Foto</label>
                                                                    <input
                                                                        class="form-control @error('pasfoto') is-invalid @enderror "
                                                                        name="pasfoto" id="imgInp" type="file"
                                                                        placeholder="Enter your location"
                                                                        value="San Francisco, CA" />

                                                                    <span class="text-danger">
                                                                        @error('pasfoto')
                                                                            {{ $message }}
                                                                            @else
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

                                                                        @enderror

                                                                    </span>
                                                                </div>

                                                            </div>

                                                            <div class="mb-3">
                                                                <div class="row gx-3">
                                                                    <div class="col-md-6 mb-3"> <label class="small mb-1"
                                                                            for="inputEmailAddress">Tempat
                                                                            Lahir</label>
                                                                        <input class="form-control" name="tptlahir"
                                                                            id="inputEmailAddress" type="text"
                                                                            placeholder="Tempat Lahir"
                                                                            value="{{ old('tptlahir') }}" />
                                                                    </div>
                                                                    <div class="col-md-6"> <label class="small mb-1"
                                                                            for="inputEmailAddress">Tanggal
                                                                            Lahir</label>
                                                                        <input class="form-control" type="date"
                                                                            name="tgllahir"
                                                                            value="{{ old('tgllahir') }}"
                                                                            placeholder="Enter your email address" />
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="col-md-6 mb-md-0">
                                                                    <label class="small mb-1" for="inputPhone">Sekolah
                                                                        Asal</label>
                                                                    <input class="form-control" id="inputPhone"
                                                                        name="sekolahasal" type="text"
                                                                        placeholder="Asal Sekolah"
                                                                        value="{{ old('sekolahasal') }}" />
                                                                </div>
                                                                <div class="col-md-6 mb-0">
                                                                    <label class="small mb-1"
                                                                        for="inputBirthday">Kewarganegaraan</label>
                                                                    <input class="form-control" id="inputBirthday"
                                                                        name="kewarganegaraan" type="text"
                                                                        name="birthday" placeholder="Kewarganegaraan"
                                                                        value="{{ old('kewarganegaraan') }}" />
                                                                </div>
                                                            </div>
                                                            <div class="row my-3 ">
                                                                <div class="col mb-3">
                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Alamat</label>
                                                                    <input type="text" name="alamat"
                                                                        value="{{ old('alamat') }}"
                                                                        placeholder="Alamat" class="form-control"
                                                                        id="">


                                                                </div>
                                                            </div>

                                                            <ul class="list-inline  mt-4" style="float: right">
                                                                <li><button type="button"
                                                                        class="btn btn-primary next-step">Selanjutnya</button>
                                                                </li>
                                                            </ul>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                <div class="">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-xl-8">
                                                            <h3 class="text-primary">Data Orang tua</h3>
                                                            <h5 class="card-title mb-4"> Data Ayah</h5>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">Nama
                                                                        Ayah</label>
                                                                    <input class="form-control" name="namaayah"
                                                                        id="inputFirstName"
                                                                        value="{{ old('namaayah') }}"
                                                                        type="text" placeholder="Nama Ayah" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">No
                                                                        HP</label>
                                                                    <input class="form-control" name="hpayah"
                                                                        id="inputFirstName"
                                                                        value="{{ old('hpayah') }}"
                                                                        type="text" placeholder="Nomor Hp" />
                                                                </div>

                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Pendidikan
                                                                    </label>
                                                                    <input class="form-control" name="pendidikanayah"
                                                                        value="{{ old('pendidikanayah') }}"
                                                                        id="inputFirstName" type="text"
                                                                        placeholder="Pendidikan Ayah" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Pekerjaan</label>
                                                                    <input class="form-control" id="inputFirstName"
                                                                        name="pekerjaanayah"
                                                                        value="{{ old('pekerjaanayah') }}"
                                                                        type="text" placeholder="Pekerjaan Ayah" />
                                                                </div>

                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Penghasilan
                                                                    </label>
                                                                    <select name="penghasilanayah" class="form-control"
                                                                        id="">
                                                                        <option class="" selected disabled>--
                                                                            Penghasilan Ayah --</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == '< Rp. 500.000' ? 'selected' : '' }}
                                                                            value="< Rp. 500.000">&lt; Rp. 500.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == 'Rp. 500.000 - Rp. 1.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 500.000 - Rp. 1.000.000">Rp. 500.000
                                                                            - Rp. 1.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == 'Rp. 1.000.000 - Rp. 2.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 1.000.000 - Rp. 2.000.000">Rp.
                                                                            1.000.000 - Rp. 2.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == 'Rp. 2.000.000 - Rp. 3.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 2.000.000 - Rp. 3.000.000">Rp.
                                                                            2.000.000 - Rp. 3.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == 'Rp. 3.000.000 - Rp. 5.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 3.000.000 - Rp. 5.000.000">Rp.
                                                                            3.000.000 - Rp. 5.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanAyah == '> Rp. 5.000.000' ? 'selected' : '' }}
                                                                            value="> Rp. 5.000.000">&gt; Rp. 5.000.000
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <hr class="">
                                                            <h5 class="card-title mb-4"> Data Ibu</h5>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">Nama
                                                                        Ibu</label>
                                                                    <input class="form-control" id="inputFirstName"
                                                                        name="namaibu"
                                                                        value="{{ old('namaibu') }}"
                                                                        type="text" placeholder="Nama Ibu" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">No
                                                                        HP</label>
                                                                    <input class="form-control" id="inputFirstName"
                                                                        name="hpibu"
                                                                        value="{{ old('hpibu') }}"
                                                                        type="text" placeholder="Nomor Hp" />
                                                                </div>

                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Pendidikan
                                                                    </label>
                                                                    <input class="form-control" id="inputFirstName"
                                                                        name="pendidikanibu"
                                                                        value="{{ old('pendidikanibu') }}"
                                                                        type="text" placeholder="Pendidikan Ibu" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Pekerjaan</label>
                                                                    <input class="form-control" id="inputFirstName"
                                                                        name="pekerjaanibu"
                                                                        value="{{ old('pekerjaanibu') }}"
                                                                        type="text" placeholder="Pekerjaan Ibu" />
                                                                </div>

                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Penghasilan
                                                                    </label>
                                                                    <select name="penghasilanibu" class="form-control"
                                                                        id="">
                                                                        <option class="" selected disabled>--
                                                                            Penghasilan Ibu --</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == '< Rp. 500.000' ? 'selected' : '' }}
                                                                            value="< Rp. 500.000">&lt; Rp. 500.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == 'Rp. 500.000 - Rp. 1.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 500.000 - Rp. 1.000.000">Rp. 500.000
                                                                            - Rp. 1.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == 'Rp. 1.000.000 - Rp. 2.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 1.000.000 - Rp. 2.000.000">Rp.
                                                                            1.000.000 - Rp. 2.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == 'Rp. 2.000.000 - Rp. 3.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 2.000.000 - Rp. 3.000.000">Rp.
                                                                            2.000.000 - Rp. 3.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == 'Rp. 3.000.000 - Rp. 5.000.000' ? 'selected' : '' }}
                                                                            value="Rp. 3.000.000 - Rp. 5.000.000">Rp.
                                                                            3.000.000 - Rp. 5.000.000</option>
                                                                        <option
                                                                            {{ Auth::user()->siswas->PenghasilanIbu == '> Rp. 5.000.000' ? 'selected' : '' }}
                                                                            value="> Rp. 5.000.000">&gt; Rp. 5.000.000
                                                                        </option>

                                                                    </select>
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="col"></div>
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="button"
                                                                        class="btn btn-warning mx-2 btn-default prev-step">Sebelumnya</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary next-step">
                                                                        Selanjutnya</button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step3">

                                                <div class="">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-xl-8">
                                                            <h3 class="text-primary">Data Wali</h3>
                                                            <h5 class="card-title mb-4"> Data Wali</h5>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">Nama
                                                                        Wali</label>
                                                                    <input class="form-control" name="namawali"
                                                                        value="{{ old('namawali') }}"
                                                                        id="inputFirstName" type="text"
                                                                        placeholder="Nama Wali" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1" for="inputFirstName">No
                                                                        HP</label>
                                                                    <input class="form-control" name="hpwali"
                                                                        value="{{ old('hpwali') }}"
                                                                        id="inputFirstName" type="text"
                                                                        placeholder="Nomor Hp" />
                                                                </div>

                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Hubungan
                                                                    </label>
                                                                    <input class="form-control" name="hubunganwali"
                                                                        value="{{ old('hubunganwali') }}"
                                                                        id="inputFirstName" type="text"
                                                                        placeholder="Hubungan Wali" />
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <label class="small mb-1"
                                                                        for="inputFirstName">Pekerjaan</label>
                                                                    <input class="form-control" name="pekerjaanwali"
                                                                        value="{{ old('pekerjaanwali') }}"
                                                                        id="inputFirstName" type="text"
                                                                        placeholder="Pekerjaan Wali" />
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col"></div>
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="button"
                                                                        class="btn btn-warning mx-2 btn-default prev-step">Sebelumnya</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary next-step">
                                                                        Selanjutnya</button>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="complete">
                                                <div class="">

                                                    <div class="row justify-content-center">
                                                        <div class="col-xxl-6 col-xl-8">
                                                            <h3 class="text-primary">Lain-lain</h3>
                                                            <h5 class="card-title mb-4"> Data Pelengkap</h5>
                                                            <div class="row gx-3">
                                                                <div class="mb-3 col-md-6">

                                                                    <div class="row">
                                                                        <div class="mb-3 col">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">yatim/Piatu</label>
                                                                            <select name="statusyatim"
                                                                                class="form-control" id="">
                                                                                <option value="" disabled>--
                                                                                    status anak --</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->status == '-' ? 'selected' : '' }}
                                                                                    value="-">-</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->status == 'yatim' ? 'selected' : '' }}
                                                                                    value="yatim">Yatim</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->status == 'piatu' ? 'selected' : '' }}
                                                                                    value="piatu">Piatu</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->status == 'yatim-piatu' ? 'selected' : '' }}
                                                                                    value="yatim-piatu">Yatim/Piatu
                                                                                </option>
                                                                            </select>



                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label class="small mb-1"
                                                                                    for="inputFirstName">Berat Badan</label>
                                                                                <input type="number" name="bb"
                                                                                    value="{{ old('bb') }}"
                                                                                    id="" class="form-control"
                                                                                    placeholder="Berat Badan">
    
    
                                                                            </div>
                                                                            <div class="col">
                                                                                <label class="small mb-1"
                                                                                    for="inputFirstName">Tinggi Badan</label>
                                                                                <input type="number" name="tb"
                                                                                    value="{{ old('tb') }}"
                                                                                    id="" class="form-control"
                                                                                    placeholder="Tinggi Badan">
    
    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="mb-3 col-md-6">

                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">Tinggal Menetap
                                                                                Dengan</label>
                                                                            <select name="menetap" class="form-control"
                                                                                id="">
                                                                                <option value="" selected disabled>--
                                                                                    Menetap dengan --</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->MenetapDengan == 'orangtuakandung' ? 'selected' : '' }}
                                                                                    value="orang tua kandung">Orang Tua
                                                                                    Kandung
                                                                                </option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->MenetapDengan == 'orangtuaangkat' ? 'selected' : '' }}
                                                                                    value="orang tua angkat">Orang Tua Angkat
                                                                                </option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->MenetapDengan == 'kakeknenek' ? 'selected' : '' }}
                                                                                    value="kakek nenek">Kakek/Nenek</option>
                                                                                <option
                                                                                    {{ Auth::user()->siswas->MenetapDengan == 'lainnya' ? 'selected' : '' }}
                                                                                    value="lainnya">Wali Lainnya
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="row">
                                                                        <div class="col">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">Berat Badan</label>
                                                                            <input type="number" name="bb"
                                                                                value="{{ Auth::user()->siswas->BB }}"
                                                                                id="" class="form-control"
                                                                                placeholder="Berat Badan">


                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="small mb-1"
                                                                                for="inputFirstName">Tinggi Badan</label>
                                                                            <input type="number" name="tb"
                                                                                value="{{ Auth::user()->siswas->TB }}"
                                                                                id="" class="form-control"
                                                                                placeholder="Tinggi Badan">


                                                                        </div>
                                                                    </div> --}}
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="col"></div>
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="button"
                                                                    class="btn btn-default mx-2 btn-warning prev-step">Sebelumnya</button>
                                                               
                                                                    <a href="#" class="mx-2 btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#k">Konfirmasi</a>
                                                                    <div class="modal fade" id="k" tabindex="-1"
                                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">Konfirmasi
                                                                                        Data</h5>
                                                                                    <button class="btn-close"
                                                                                        type="button"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body ">
                                                                                    <br>
                                                                                    Konfirmasi formulir pendaftaran
                                                                                    sekarang?
                                                                                    <br>
                                                                                    <br>
                                                                                    <input type="checkbox"
                                                                                        name="konfirmasi"
                                                                                        id="checkme"><label
                                                                                        for="">saya sudah mengisi
                                                                                        data dengan sebenarnya</label>

                                                                                    <small>
                                                                                        <div class="text-danger mt-3">
                                                                                            *data yg dikonfirmasi tidak bisa
                                                                                            diubah kembali <br>
                                                                                            *apabia ada kesalahan setelah
                                                                                            konfirmasi harap menghubungi
                                                                                            admin
                                                                                        </div>
                                                                                    </small>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    {{-- <button
                                                                                        class="btn btn-secondary"
                                                                                        type="button"
                                                                                        data-bs-dismiss="modal">Close</button> --}}
                                                                                        <button type="submit"
                                                                                        class="btn btn-success next-step">
                                                                                        Simpan</button>
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit" disabled
                                                                                        id="konfirmasi">Konfirmasi
                                                                                    </button>
                                                                                    <script>
                                                                                        var checker = document.getElementById('checkme');
                                                                                        document.value = "0";
                                                                                        var sendbtn = document.getElementById('konfirmasi');
                                                                                        // when unchecked or checked, run the function
                                                                                        checker.onchange = function() {
                                                                                            if (this.checked) {
                                                                                                sendbtn.disabled = false;
                                                                                                document.getElementById('checkme').value = "1";

                                                                                            } else {
                                                                                                sendbtn.disabled = true;
                                                                                            }

                                                                                        }
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('Script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>
    <script>
        $(document).ready(function() {
            if (blah.src == '{{ asset('default.jpg') }}') {
                console.log(blah.src);
                return borderfoto.style.borderStyle = 'dashed';

            } else {
                console.log(blah.src);
                textbantu.style.display = 'none';
                return borderfoto.style.borderStyle = 'none';

            }
        });



        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file);
                borderfoto.style.borderStyle = 'none';
                textbantu.style.display = 'none';
            }

        }
    </script>
@endsection
