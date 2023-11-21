<!-- Header -->
@include('header')
<!--  End Header -->
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Alışveriş Listem</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">



                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Ürün Adı</th>
                                <th>Fiyat</th>
                                <th>Kg</th>
                                <th>Toplam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                @foreach ($urunlerListesi as $urun)
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a>
                                    </td>

                                    <td class="image-prod"><img src="{{ $urun->img }}" width="100" height="100">
                                    </td>

                                    <td class="product-name">
                                        <h3>{{ $urun->name }}</h3>

                                    </td>

                                    <td class="price">{{ $urun->fiyat }} TL</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input name="quantity" class="quantity form-control input-number"
                                                value="1" min="1" max="100"
                                                data-price="{{ $urun->fiyat }}">
                                        </div>
                                    </td>

                                    <td class="total"><span class="item-total">{{ $urun->fiyat }}</span>TL</td>
                            </tr><!-- END TR-->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div class="row justify-content-end">



            <!-- <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
    <div class="cart-total mb-3">
    <h3>Kupon Kodu</h3>
    <p>Kupon Kodunuz varsa girin</p>
  <form action="#" class="info">
 <div class="form-group">
 <label for="">Kupon Kodu</label>
 <input type="text" class="form-control text-left px-3" placeholder="">
 </div>
 </form>
    </div>
    <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Kuponu Aktive Et</a></p>
    </div>

    <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
    <div class="cart-total mb-3">
    <h3>Estimate shipping and tax</h3>
    <p>Enter your destination to get a shipping estimate</p>
  <form action="#" class="info">
 <div class="form-group">
 <label for="">Country</label>
 <input type="text" class="form-control text-left px-3" placeholder="">
 </div>
 <div class="form-group">
 <label for="country">State/Province</label>
 <input type="text" class="form-control text-left px-3" placeholder="">
 </div>
 <div class="form-group">
 <label for="country">Zip/Postal Code</label>
 <input type="text" class="form-control text-left px-3" placeholder="">
 </div>
 </form>
    </div>
    <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    </div>-->









            <div class="col-lg-12 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Toplam</h3>
                    <p class="d-flex">
                        <span>Ürün Toplamı</span>
                        <span class="item-total">{{ $urun->fiyat }}TL</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p><a href="odeme" class="btn btn-primary py-3 px-4">Ödemeye Geç</a></p>
            </div>
        </div>
    </div>
</section>

@include('layouts.epostaHaberdar')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var quantityInputs = document.querySelectorAll('.quantity input');
        quantityInputs.forEach(function(input) {
            input.addEventListener('input', updateTotal);
        });

        function updateTotal(event) {
            var input = event.target;
            var quantity = parseFloat(input.value); //Adet
            var price = parseFloat(input.getAttribute('data-price'));
            var total = quantity * price;

            var totalElement = input.closest('tr').querySelector('.item-total');
            console.log(totalElement);
            totalElement.textContent = (total * 1).toFixed(2);

            updateCartTotal();
        }

        function updateCartTotal() {
            var allTotals = document.querySelectorAll('.item-total');
            var cartTotal = 0;

            allTotals.forEach(function(totalElement) {
                cartTotal += parseFloat(totalElement.textContent);
            });
            var cartTotalElement = document.querySelector('.cart-total');
            cartTotalElement.textContent = 'TL' + cartTotal.toFixed(2);
        }
    });
</script>
<!-- Footer-->
@include('footer')
<!-- End Footer-->
