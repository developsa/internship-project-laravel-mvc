<?php

use Illuminate\Support\Facades\Route;


//HOMEPAGE
Route::get('/', function () {
    return view('AnaSayfa');
});

//Categories
Route::get("/", "OnyuzController@kategoriler");
Route::get("/urunler", "OnyuzController@urunler")->name("urunler");
Route::get("/siparisler", "OnyuzController@siparisler")->name("siparisler");
Route::get("/odeme", "OnyuzController@odeme")->name("odeme");
//HAKKIMIZDA
Route::get("/hakkimizda", "OnyuzController@hakkimizda")->name("hakkimizda");

//Ürün İçeriği
Route::get("/urunIcerik", "OnyuzController@urunBilgi")->name("urunIcerik");
//İLETİŞİM
Route::get("/iletisim", "OnyuzController@iletisim")->name("iletisim");

//ÜRÜN DETAYLI BİLGİ
Route::get("/urun-yorumu/{id?}", "OnyuzController@urunDetay")->name("urun-detay");


//section to be added

/*Route::get("/productsingle",function () {
    return view("product-single");
});*/



//Depo Section
Auth::routes();

Route::get('/depo', [App\Http\Controllers\HomeController::class, 'kategoriler'])->name('depo');
Route::get('/kategori/duzenle/{id?}', 'HomeController@kategoriDuzenle')->name('kategoriDuzenle');
Route::post('/kategori/kaydet/{id?}', 'HomeController@kategoriKaydet')->name('kategoriKayit');
Route::get("/kategori/sil/{id?}", "HomeController@kategoriSil")->name("kategoriSil");



Route::get('/urun', "ProductController@urunler")->name('urun');
Route::get('/urun/duzenle/{id?}', 'ProductController@urunDuzenle')->name('urunDuzenle');
Route::post('/urun/kaydet/{id?}', 'ProductController@urunKaydet')->name('urunKayit');
Route::get("/urun/sil/{id?}", "ProductController@urunSil")->name("urunSil");


Route::get('/urunimg', "ProductimgController@urunfotograflari")->name('urunimg');
Route::get('/urunimg/duzenle/{id?}', 'ProductimgController@urunimgDuzenle')->name('urunimgDuzenle');
Route::post('/urunimg/kaydet/{id?}', 'ProductimgController@urunimgKaydet')->name('urunimgKayit');
Route::get("/urunimg/sil/{id?}", "ProductimgController@urunimgSil")->name("urunimgSil");
