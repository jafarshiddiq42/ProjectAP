@extends('layouts.userpin')
@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa-solid fa-bullhorn"></i></div>
                            Pin Pendaftaran
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

            <div class="card-body ">
                <div class="container my-3">
                    
                    <div class="row pt-4">
                        <div class="col">
                            <div class=" mb-3">
                        
                                <style>
                                    input { width: 25px; margin: 5px; border-top:none; border-left:none; border-right:none; text-align:center;  }
                                </style>
                                <div class="d-flex justify-content-center" style="">
                                    <input id="pin1" type="text" class="inputs " name="pin1" maxlength="1">
                               
                                    <input id="pin2" type="text" class="inputs  " name="pin2" maxlength="1" >
                               
                                    <input id="pin3" type="text" class="inputs  " name="pin3" maxlength="1" >
                               
                                    <input id="pin4" type="text" class="inputs  " name="pin4" maxlength="1" >
                               
                                    <input id="pin5" type="text" class="inputs  " name="pin5" maxlength="1" >
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <div class="row mt-2">
                        <div class="col d-flex justify-content-center ">
                            <button type="submit" class="btn btn-primary ">
                              submit
                            </button>

                            
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                <small class="text-danger">*pin akan segera dikirimkan setelah mengirimkan bukti pembayaran</small><br>
                <small><u><a target="_blank" href="https://api.whatsapp.com/send?phone=6281397980152">Hubungi Panitia</a></u></small>

                    </div>
                    
                    <div class="col"></div>
                    <div class="col"></div>
                </div>                
            </div>
        </div>
    </div>
</main>
@endsection
@section('Script')
<script>
    $(".inputs").keyup(function () {
    if (this.value.length == 1) {
      $(this).next('.inputs').focus();
    }
});
</script>
    
@endsection