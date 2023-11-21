<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class OnyuzController extends Controller
{

    public function kategoriler()
    {
        $kategorilerListesi = Category::with('urunler')->get();
        $urunlerListesi = Product::get();
        return view('AnaSayfa', compact("kategorilerListesi", "urunlerListesi"));
    }

    public function urunler()
    {

        $urunlerListesi = Product::get();

        return view("urunler", compact("urunlerListesi"));
    }

    public function siparisler()
    {

        $urunlerListesi = Product::get();

        return view("siparis", compact("urunlerListesi"));
    }

    public function odeme()
    {

        return view("checkout");
    }


    public function hakkimizda()
    {

        return view("about");
    }

    public function urunBilgi()
    {

        $urunlerListesi = Product::get();

        return view("layouts.urunbilgi", compact("urunlerListesi"));
    }
    public function iletisim()
    {


        return view("contact");
    }

    public function urunDetay($id)
    {

        $urundetay = Product::find($id);

        return view("urun_detay", compact("urundetay"));
    }
}
