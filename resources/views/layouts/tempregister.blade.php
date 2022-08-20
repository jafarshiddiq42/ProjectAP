<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin Pro</title>
    <link href="{{ asset('sbadmin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('darulihsan.png') }}" />

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="">
    <style>
        .background {
            position: absolute;
            max-height: 636px;
            overflow: hidden;
            z-index: 0;
        }
        .boxhias1{
            position: absolute;
            min-height: 636px;
            background-color: rgba(7, 56, 169, 0.6);
            min-width: 70%;
            margin-left: 30%;
            /* border: 1px solid black; */
            clip-path: polygon(50% 0, 100% 0%, 100% 100%, 0% 100%);
         
            
        }
    </style>
    <div class="background" style=""><img
            src="https://islami.co/wp-content/uploads/2017/10/santri-mambaus-sholihin-saat-membaca-kitab-kuning-darulanshar.wordpress.com_.jpg"
            alt=""></div>
            <div class="boxhias1"></div>
    <div id="layoutAuthentication" style="z-index: 2">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        {{-- <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; lordver.tech 2022</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('sbadmin/js/scripts.js') }}"></script>
</body>

</html>
