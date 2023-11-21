<!-- Header-->
@include('header')



<!-- Ana sayfa Kodları-->
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <!-- <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
 <div class="overlay"></div>
 <div class="container">
 <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

 <div class="col-md-12 ftco-animate text-center">
 <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
 <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
 <p><a href="#" class="btn btn-primary"> Detayları Gör</a></p>
 </div>

 </div>
 </div>
 </div>-->

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">%100 Organik Ürünler</h1>
                        <h2 class="subheading mb-4 "> <b style="font-size: 2.5em">El yapımı ürünlerimizi 81 ile
                                kargoluyoruz</b> </h2>
                        <p><a href="urunler" class="btn btn-primary">Ürünleri Gör</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">


    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Ücretsiz Kargo</h3>
                        <span>500 Tl ve üzeri alışverişlerde</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">

                        <span class="flaticon-diet"></span>
                        <!--<span style="background-image: url(images/healty.png);"></span>-->

                    </div>
                    <div class="media-body">
                        <h3 class="heading">Şifa Deposu</h3>
                        <span>Şifa Deposu Ürünler</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Organik Ürünler</h3>
                        <span>Kaliteli Organik Ürünler</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Destek</h3>
                        <span>24/7 Destek</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Kategoriler-->
<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Kategoriler</span>
                <h2 class="mb-4">KATEGORİLER</h2>
            </div>
            @php
                $kategoricount = 0;
            @endphp
            @foreach ($kategorilerListesi as $kategori)
                @if ($kategoricount % 3 == 0)
        </div>
        <div class="row">
            @endif
            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                    style="background-image: url({{ $kategori->img }});">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">{{ $kategori->name }}</a></h2>
                    </div>
                </div>
            </div>
            @php
                $kategoricount++;
            @endphp
            @endforeach
        </div>
    </div>
</section>


<!-- Ürünler bölümü -->



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Ürünler</span>
                <h2 class="mb-4">Organik Ürünlerimiz</h2>
                <p>Şifa deposu, harika,el yapımı ürünler</p>
            </div>
        </div>
    </div>
    <div class="container">
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
                    <a href="#" class="img-prod">
                        <img class="img-fluid" src="{{ $urun->img }}" alt="Colorlib Template">

                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $urun->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <span class="price-sale">{{ $urun->fiyat }} TL</span>
                                </p>
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




<!--
        <section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
    <div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
          <span class="subheading">Best Price For You</span>
            <h2 class="mb-4">Deal of the day</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <h3><a href="#">Spinach</a></h3>
            <span class="price">$10 <a href="#">now $5 only</a></span>
            <div id="timer" class="d-flex mt-5">
      <div class="time" id="days"></div>
      <div class="time pl-3" id="hours"></div>
      <div class="time pl-3" id="minutes"></div>
      <div class="time pl-3" id="seconds"></div>
      </div>
          </div>
        </div>
    </div>
    </section>
-->

<!--       Customer Yorum
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Yorumlar</span>
            <h2 class="mb-4">Müşterilerimizin Yorumları</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->





<hr>

@include('layouts.epostaHaberdar')


<!-- Footer kullanımı -->
@include('footer')

<!--   </body>
</html>-->
