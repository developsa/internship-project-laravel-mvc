<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'img',
    ];
      //One Category <- Many Products
    public function urunler()
    {
        return $this->hasMany(Product::class, 'kategori_id', 'id');
    }
}
