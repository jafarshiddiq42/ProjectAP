@extends('layouts.usermaster')
@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fa-solid fa-file-arrow-up"></i></div>
                                Daftar Ulang
                            </h1>
                            <div class="page-header-subtitle">Upload Berkas Pendaftaran Ulang</div>
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

                        {{-- buktibayar --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 col-xs-3 col-sm-3  d-flex">
                                    <div class="align-self-center">
                                        <h4 class="">Bukti Pembayaran </h4>
                                        
                                        <span>
                                            <small>*Bukti Pembayaran Pendaftaran ulang</small>
                                        </span>
                                    </div>

                                </div>
                                <div class="col col-xs-9 col-sm-9  col-lg-9">
                                    <div id="divbukti" class="overflow-hidden"
                                        style="height:100px; "
                                        onclick="$('#buktifile').click()">
                                        <img src="" id="bukti" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="buktifile" class="form-control    ">

                                </div>

                            </div>
                        </div>

                        {{-- Nisn --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 col-xs-3 col-sm-3  d-flex">
                                    <div class="align-self-center">
                                        <h4 class="">Foto NISN</h4>
                                        
                                        <span>
                                            <small>*Screenshoot NISN dari Website <a style="font-size: 10px"
                                                    href="https://nisn.data.kemdikbud.go.id/"
                                                    target="_blank">nisn.kemendikbud.go.id</a></small>
                                        </span>
                                    </div>

                                </div>
                                <div class="col col-xs-9 col-sm-9  col-lg-9">
                                    <div id="divnisn" class="overflow-hidden"
                                        style="height:100px; "
                                        onclick="$('#nisnfile').click()">
                                        <img src="" id="nisn" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="nisnfile" class="form-control    ">

                                </div>

                            </div>
                        </div>


                        {{-- ktp ayah --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex">
                                    <h4 class="align-self-center">Foto Ktp Ayah</h4>
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divayah" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#ktpfileayah').click()">
                                    <img src="" id="ktpayah" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="ktpfileayah" class="form-control    ">

                                </div>

                            </div>
                        </div>
                        {{-- ktp ibu --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex">
                                    <h4 class="align-self-center">Foto Ktp Ibu</h4>
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divibu" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#ktpfileibu').click()">
                                        <img src="" id="ktpibu" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="ktpfileibu" class="form-control    ">

                                </div>

                            </div>
                        </div>
                        {{-- ktp ibu --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex">
                                    <h4 class="align-self-center">Surat Keterangan Aktif dari Sekolah Asal</h4>
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divskas" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#skasafile').click()">
                                        <img src="" id="skasa" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="skasafile" class="form-control    ">

                                </div>

                            </div>
                        </div>
                        {{-- ktp ibu --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex justify-content-center">
                                    <div class="">
                                        <h4 class="align-self-center">Surat Keterangan NPSN Sekolah Asal</h4>
                                    <span>
                                        <small>*Nomor Pokok Statistik Nasional</small>
                                    </span>
                                    </div>
                                    
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divnpsn" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#npsnfile').click()">
                                        <img src="" id="npsn" alt="" style="width: -webkit-fill-available;"> 

                                    </div>
                                    <input type="file" name="" id="npsnfile" class="form-control    ">

                                </div>

                            </div>
                        </div>
                        {{-- fc kk --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex">
                                    <h4 class="align-self-center">Foto copy KK</h4>
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divkk" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#kkfile').click()">
                                        <img src="" id="kk" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="kkfile" class="form-control    ">

                                </div>

                            </div>
                        </div>
                        {{-- fc akta --}}
                        <div class="form-group mb-3 py-3" style="border-bottom-style:solid">

                            <div class="row">
                                <div class="col col-lg-3 d-flex">
                                    <h4 class="align-self-center">Foto Copy Akta Kelahiran</h4>
                                </div>
                                <div class="col col-lg-9">
                                    <div id="divak" class="overflow-hidden"
                                        style="height:100px;"
                                        onclick="$('#aktafile').click()">
                                        <img src="" id="akta" alt="" style="width: -webkit-fill-available;"> 
                                    </div>
                                    <input type="file" name="" id="aktafile" class="form-control    ">

                                </div>

                            </div>
                        </div>
                    <a href="#" class="btn btn-primary mt-2" style="float: right">Upload</a>

                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('Script')
<script>
    
    // ibu
    divbukti.style.borderStyle ='dashed'
    divbukti.style.borderBottomStyle ='none'
    buktifile.onchange = evt => {
        const [filebukti] = buktifile.files
        if (filebukti) {
            divbukti.style.borderStyle ='none' 
            bukti.src = URL.createObjectURL(filebukti);
        }

    }
    
    // ibu
    divibu.style.borderStyle ='dashed'
    divibu.style.borderBottomStyle ='none'
    ktpfileibu.onchange = evt => {
        const [fileibu] = ktpfileibu.files
        if (fileibu) {
            divibu.style.borderStyle ='none' 
            ktpibu.src = URL.createObjectURL(fileibu);
        }

    }
    // ayah
    divayah.style.borderStyle ='dashed'
    divayah.style.borderBottomStyle ='none'
    ktpfileayah.onchange = evt => {
        const [fileayah] = ktpfileayah.files
        if (fileayah) {
            divayah.style.borderStyle ='none'
            ktpayah.src = URL.createObjectURL(fileayah);
        }

    }
    // nisn
    divnisn.style.borderStyle ='dashed'
    divnisn.style.borderBottomStyle ='none'
    nisnfile.onchange = evt => {
        const [filenisn] = nisnfile.files
        if (filenisn) {
            divnisn.style.borderStyle="none"
            nisn.src = URL.createObjectURL(filenisn);
        }

    }
    // skaktif 
    divskas.style.borderStyle ='dashed'
    divskas.style.borderBottomStyle ='none'
    skasafile.onchange = evt => {
        const [fileskasa] = skasafile.files
        if (fileskasa) {
            divskas.style.borderStyle="none"
            skasa.src = URL.createObjectURL(fileskasa);
        }

    }
    // sknpsn
    divnpsn.style.borderStyle ='dashed'
    divnpsn.style.borderBottomStyle ='none'
    npsnfile.onchange = evt => {
        const [filenpsn] = npsnfile.files
        if (filenpsn) {
            divnpsn.style.borderStyle="none"

            npsn.src = URL.createObjectURL(filenpsn);
        }

    }
    // fcakta
    divak.style.borderStyle ='dashed'
    divak.style.borderBottomStyle ='none'
    aktafile.onchange = evt => {
        const [fileakta] = aktafile.files
        if (fileakta) {
            divak.style.borderStyle="none"

            akta.src = URL.createObjectURL(fileakta);
        }

    }
    // fotocopy kk
    divkk.style.borderStyle ='dashed'
    divkk.style.borderBottomStyle ='none'
    kkfile.onchange = evt => {
        const [filekk] = kkfile.files
        if (filekk) {
            divkk.style.borderStyle="none"

            kk.src = URL.createObjectURL(filekk);
        }

    }

</script>
@endsection
