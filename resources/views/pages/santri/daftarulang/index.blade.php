@extends('layouts.usermaster')
@section('content')
    <main>
        <header class="page-header page-header-dark pb-10" id="bgpokoknya">
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
                        <div class="col">
                                
                            <div style="float: right" class="page-header-title" id="txtbantu">Sisa Waktu Pendaftaran</div>   
                            <div style="float: right" class="page-header-title" id="demo"></div>   
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
                        <form action="" id="formupload"  method="post" name="formupload" enctype="multipart/form-data">
                            @csrf
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
                                        <div id="divbukti" class="overflow-hidden" style="height:100px; "
                                            onclick="$('#buktifile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->buktipembayaran) }}" id="bukti" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="bukti" id="buktifile" class="form-control">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>
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
                                        <div id="divnisn" class="overflow-hidden" style="height:100px; "
                                            onclick="$('#nisnfile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->foto_nisn) }}" id="nisn" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="nisn" id="nisnfile" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divayah" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#ktpfileayah').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->ktp_ayah) }}" id="ktpayah" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="ktpayah" id="ktpfileayah" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divibu" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#ktpfileibu').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->ktp_ibu) }}" id="ktpibu" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="ktpibu" id="ktpfileibu" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divskas" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#skasafile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->surat_aktif) }}" id="skasa" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="ska" id="skasafile" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divnpsn" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#npsnfile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->NPSN) }}" id="npsn" alt=""
                                                style="width: -webkit-fill-available;">

                                        </div>
                                        <input type="file" name="npsn" id="npsnfile" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divkk" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#kkfile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->fc_kk) }}" id="kk" alt=""
                                                style="width: -webkit-fill-available;">
                                        </div>
                                        <input type="file" name="fc_kk" id="kkfile" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

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
                                        <div id="divak" class="overflow-hidden" style="height:100px;"
                                            onclick="$('#aktafile').click()">
                                            <img src="{{ asset(Auth::user()->dftrulangs->fc_akta) }}" id="akta" alt=""
                                                style="width: -webkit-fill-available;">
                                            
                                        </div>
                                        <input type="file" name="fc_akta" id="aktafile" class="form-control    ">
                                        <span><small class="text-danger">*File berupa gambar&#40; .png / .jpg &#41; dan tidak lebih dari 1MB</small></span>

                                    </div>

                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mt-2" onclick="$('#formupload').submit()" style="float: right">Upload</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('Script')
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("2022-08-27 15:37:25").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + "Hari " + hours + "Jam "
      + minutes + "Menit " + seconds + "Detik ";
      document.getElementById("bgpokoknya").style.backgroundColor = "blue";
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        document.getElementById("formupload").style.display = "none";
        document.getElementById("txtbantu").style.display = "none";
        document.getElementById("bgpokoknya").style.backgroundColor = "red";

      }
    }, 1000);

    </script>

    <script>
        // ibu
        divbukti.style.borderStyle = 'dashed'
        divbukti.style.borderBottomStyle = 'none'
        buktifile.onchange = evt => {
            const [filebukti] = buktifile.files
            if (filebukti) {
                divbukti.style.borderStyle = 'none'
                bukti.src = URL.createObjectURL(filebukti);
            }

        }

        // ibu
        divibu.style.borderStyle = 'dashed'
        divibu.style.borderBottomStyle = 'none'
        ktpfileibu.onchange = evt => {
            const [fileibu] = ktpfileibu.files
            if (fileibu) {
                divibu.style.borderStyle = 'none'
                ktpibu.src = URL.createObjectURL(fileibu);
            }

        }
        // ayah
        divayah.style.borderStyle = 'dashed'
        divayah.style.borderBottomStyle = 'none'
        ktpfileayah.onchange = evt => {
            const [fileayah] = ktpfileayah.files
            if (fileayah) {
                divayah.style.borderStyle = 'none'
                ktpayah.src = URL.createObjectURL(fileayah);
            }

        }
        // nisn
        divnisn.style.borderStyle = 'dashed'
        divnisn.style.borderBottomStyle = 'none'
        nisnfile.onchange = evt => {
            const [filenisn] = nisnfile.files
            if (filenisn) {
                divnisn.style.borderStyle = "none"
                nisn.src = URL.createObjectURL(filenisn);
            }

        }
        // skaktif 
        divskas.style.borderStyle = 'dashed'
        divskas.style.borderBottomStyle = 'none'
        skasafile.onchange = evt => {
            const [fileskasa] = skasafile.files
            if (fileskasa) {
                divskas.style.borderStyle = "none"
                skasa.src = URL.createObjectURL(fileskasa);
            }

        }
        // sknpsn
        divnpsn.style.borderStyle = 'dashed'
        divnpsn.style.borderBottomStyle = 'none'
        npsnfile.onchange = evt => {
            const [filenpsn] = npsnfile.files
            if (filenpsn) {
                divnpsn.style.borderStyle = "none"

                npsn.src = URL.createObjectURL(filenpsn);
            }

        }
        // fcakta
        divak.style.borderStyle = 'dashed'
        divak.style.borderBottomStyle = 'none'
        aktafile.onchange = evt => {
            const [fileakta] = aktafile.files
            if (fileakta) {
                divak.style.borderStyle = "none"

                akta.src = URL.createObjectURL(fileakta);
            }

        }
        // fotocopy kk
        divkk.style.borderStyle = 'dashed'
        divkk.style.borderBottomStyle = 'none'
        kkfile.onchange = evt => {
            const [filekk] = kkfile.files
            if (filekk) {
                divkk.style.borderStyle = "none"

                kk.src = URL.createObjectURL(filekk);
            }

        }
    </script>
@endsection
