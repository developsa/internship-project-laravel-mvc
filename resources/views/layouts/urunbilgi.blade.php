@extends('blog')
@section('govde')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    @foreach ($urunlerListesi as $urun)
                        <div class="row">
                            <div class="col-md-12 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch d-md-flex">
                                    <img class="block-20" width="100%" height="100%" src="{{ $urun->img }}">
                                    <div class="text d-block pl-md-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">July 20, 2019</a></div>
                                            <div><a href="#">Semih</a></div>
                                            <!--  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                                        </div>


                                        <p>{{ $urun->kisa_bilgi }}</p>

                                        <p><a href="{{ route('urun-detay', ['id' => $urun->id]) }}"
                                                class="btn btn-primary py-2 px-3">Daha Fazlasını Oku</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
    </section>
@endsection
