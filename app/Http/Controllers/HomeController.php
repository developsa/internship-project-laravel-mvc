<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Storage;
use Illuminate\Support\Str;
use App;

class HomeController extends Controller
{
    //Usage Auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Read
    public function kategoriler()
    {
        $kategorilerListesi = Category::get();
        return view('DEPO.kategoriler', compact("kategorilerListesi"));
    }

    //Edit
    public function kategoriDuzenle($id = false)
    {
        $kategori = null;
        if ($id)
            $kategori = Category::where('id', $id)->firstOrFail();
        return view('DEPO.kategori-duzenle', compact("kategori"));
    }

    //Create
    public function kategoriKaydet(Request $request, $id = false)
    {
        $kategori = '';
        $fotoYolu = '';
        if ($id) {
            $kategori = Category::where('id', $id)->firstOrFail();
        } else {
            $kategori = new Category;
        }
        if ($request->hasFile('img')) {

            $file_name = time() . '.' . $request->img->extension();
            $request->img->move(public_path('category'), $file_name);
            $fotoYolu = '/category/' . $file_name;
            $kategori->img = $fotoYolu;
            $kategori->fill($request->all());
            $kategori->save();
        } else {
            $kategori->fill($request->all());
            $kategori->save();
        }
        return redirect()->to('/depo');
    }

    //Delete
    public function kategoriSil($id)
    {
        $kategoriDelete = Category::find($id);
        if ($kategoriDelete) {

            $kategoriDelete->delete();
            return redirect()->to("/depo");
        } else {

            return  print_r("Eleman silinmedi");
        }
    }
}
