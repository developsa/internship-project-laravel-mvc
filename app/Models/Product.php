<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'fiyat',
        'kisa_bilgi',
        'urun_aciklama',
        'img',
        'stok',
        'kategori_id'
    ];
    //One Product <- Many ProductImages
    public function urunfotograflari()
    {
        return $this->hasMany(Productimg::class, 'urun_id', 'id');
    }
}
