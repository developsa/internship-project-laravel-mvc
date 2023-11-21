<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //Read
    public function urunler()
    {

        $urunlerListesi = Product::get();
        $kategorilerListesi = Category::with('urunler')->get();

        return view('DEPO.urunler', compact("urunlerListesi", "kategorilerListesi"));
    }
    //Update
    public function urunDuzenle($id = false)
    {
        $kategorilerListesi = Category::with('urunler')->get();
        $urun = null;
        if ($id)
            $urun = Product::where('id', $id)->firstOrFail();
        return view('DEPO.urun-duzenle', compact("urun", "kategorilerListesi"));
    }
    //Create
    public function urunKaydet(Request $request, $id = false)
    {

        $urun = '';
        $fotoYolu = '';
        if ($id) {
            $urun = Product::where('id', $id)->firstOrFail();
        } else {
            $urun = new Product;
        }
        if ($request->hasFile('img')) {

            $file_name = time() . '.' . $request->img->extension();
            $request->img->move(public_path('product'), $file_name);
            $fotoYolu = '/product/' . $file_name;

            $urun->fill($request->all());

            $urun->img = $fotoYolu;
            $urun->save();
        } else {
            $urun->fill($request->all());
            $urun->save();
        }
        return redirect()->to('/urun');
    }

    //Delete
    public function urunSil($id)
    {
        $urunDelete = Product::find($id);
        if ($urunDelete) {

            $urunDelete->delete();
            return redirect()->to("/urun");
        } else {
            return  print_r("Eleman silinemedi");
        }
    }
}
