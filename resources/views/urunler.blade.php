<!-- Header -->
@include('header')
<!--  End Header -->

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Organik</a></span> <span>Ürünler</span>
                </p>
                <h1 class="mb-0 bread">Ürünler</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">



        <!--	<div class="row justify-content-center">

    <div class="col-md-10 mb-5 text-center">
    <ul class="product-category">
    <li><a href="#" class="active">All</a></li>
    <li><a href="#">Vegetable</a></li>
    <li><a href="#">Fruits</a></li>
    <li><a href="#">Juice</a></li>
    <li><a href="#">Dried</a></li>
    </ul>
    </div>

    </div>-->
        <div class="row">
            @php
                $uruncount = 0;
            @endphp
            @foreach ($urunlerListesi as $urun)
                @if ($uruncount % 4 == 0)
        </div>
        <div class="row">
            @endif
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ $urun->img }}"
                            alt="Colorlib Template">
                        <!--	<span class="status">30%</span>-->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $urun->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">{{ $urun->fiyat }} TL</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">

                                <a id="addToCartBtn"
                                    class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $uruncount++;
            @endphp
            @endforeach
        </div>
    </div>
</section>


@include('layouts.epostaHaberdar')



<script>
    let cartItemCount = 0;


    const addToCartButton = document.getElementById("addToCartBtn");
    addToCartButton.addEventListener("click", addToCart);

    function addToCart(event) {

        cartItemCount++;


        updateCartItemCount();

    }

    function updateCartItemCount() {
        const cartItemCountElement = document.getElementById("cartItemCount");
        cartItemCountElement.textContent = cartItemCount;
    }
</script>
<!-- Footer-->
@include('footer')
<!-- End Footer-->
