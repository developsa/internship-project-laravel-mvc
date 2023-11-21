@include('header')

<div class="hero-wrap hero-bread" style="background-image: url('/images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Ürün Bilgileri</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</section>
@include('footer')
