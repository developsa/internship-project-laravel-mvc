<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productimg;
use App\Models\Product;
use Illuminate\Support\Str;
use Storage;

class ProductimgController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Read
    public function urunfotograflari()
    {

        $urunfotograflari = Productimg::get();
        $urunler = Product::with("urunfotograflari")->get();
        return view('DEPO.urunfotograflari', compact("urunfotograflari", "urunler"));
    }
    //Edit
    public function urunimgDuzenle($id = false)
    {
        $urunfotograflari = Product::with("urunfotograflari")->get();
        $urunimg = null;
        if ($id)
            $urunimg = Productimg::where('id', $id)->firstOrFail();
        return view('DEPO.urunimg-duzenle', compact("urunimg", "urunfotograflari"));
    }
    //Create
    public function urunimgKaydet(Request $request, $id = false)
    {
        $urunimg = '';
        $fotoYolu = "";
        if ($id) {
            $urunimg = Productimg::where('id', $id)->firstOrFail();
        } else {
            $urunimg = new Productimg;
        }
        if ($request->hasFile("img")) {
            $file_name = time() . '.' . $request->img->extension();
            $request->img->move(public_path('productimg'), $file_name);
            $fotoYolu = '/productimg/' . $file_name;
            $urunimg->fill($request->all());
            $urunimg->img = $fotoYolu;
            $urunimg->save();
        } else {
            $urunimg->fill($request->all());
            $urunimg->img = $fotoYolu;
            $urunimg->save();
        }

        return redirect()->to('/urunimg');
    }

    //Delete
    public function urunimgSil($id)
    {
        $urunimgDelete = Productimg::find($id);
        if ($urunimgDelete) {

            $urunimgDelete->delete();
            return redirect()->to("/urunimg");
        } else {
            return  print_r("Eleman silinemedi");
        }
    }
}
