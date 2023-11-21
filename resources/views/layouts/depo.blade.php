<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Depo</title>

    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>


    <!-- Navbar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="/depo">KUMSAL DEPO</a>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!--  Duzenlenecek -->
        </form>

        <ul style="margin-left:85rem">
            <li>
                <div>
                    <button class="btn float-center login_btn "> <a style="color:azure" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">KONTROL PANELİ</h1>
                    <ol class="breadcrumb mb-4">
                        <h3 class="mt-4">Hoşgeldin {{ Auth::user()->name }}</h3>
                    </ol>


                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Kategoriler</div>
                                <a style="color: black" href="{{ route('depo') }}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        Detaylar
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"> Ürünler</div>
                                <a style="color: black" href="{{ route('urun') }}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        Detaylar
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Ürün Fotoğrafları</div>
                                <a style="color: black" href="{{ route('urunimg') }}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        Detaylar
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">

                        @yield('content')

                    </div>
                </div>
                <div style="height: 75vh"></div>

        </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright 2023 - Kumsal Depo</div>

                </div>
            </div>
        </footer>
    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

</body>

</html>
