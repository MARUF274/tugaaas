<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Warunk Gemink</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

</head>

<body>


    <header>



        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="{{ asset('image/logo2.png') }}" alt="" style="width: 70px;">
                            </a>
                        </div>
                    </div>



                    <div class="col-md-5 mx-auto" style="margin-left: 20%;">

                    </div>



                    <div class="col-md-1 clearfix">
                        <div class="header-ctn">


                            <div class="dropdown">
                            <a href="cart"><button type="button" class="btn btn-info">
                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                        class="badge badge-pill badge-danger">{{ count((array)session('cart')) }}</span>
                                </button></a>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <div id="hot-deal" class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <h1 class="text-uppercase">Selamat Datang di Warunk Gemink</h1>
                        <p>tempat terpercaya untuk segala kebutuhan gaming mu</p>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <div class="section">

        <div class="container">

            <div class="row">
                    @yield('content')
                        
                    </div>
                </div>

            </div>
            
        </div>
    </div>
    <footer id="footer">
        <div id="bottom-footer" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 style="color: aliceblue;">Luv you All</h3>
                        <span class="copyright">

                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                            by <a href="https://github.com/MARUF274" target="_blank">Maruf274</a>

                        </span>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    @yield('scripts')
    <script src=""></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>