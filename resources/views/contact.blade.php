<!-- Header -->
@include('header')
<!--  End Header -->


<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Bizimle İletişime Geçin</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Adres:</span> 2000 Evler, Nevşehir Ünv. Rektörlüğü, 50300 Nevşehir Merkez/Nevşehir</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Telefon:</span> <a href="tel://1234567920">05365267506</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">semih502010@hotmail.com</a></p>
                </div>
            </div>

        </div>
        <div class="row block-9">
            <!--
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="İsminiz">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Konu">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Mesajınız"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Mesaj Gönder" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>-->


            <iframe class="col-md-12 d-flex"
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d24918.997776139666!2d34.74230804232868!3d38.6747471020239!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1690196876741!5m2!1str!2str"
                width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>

<!-- Footer-->
@include('footer')
<!-- End Footer-->
