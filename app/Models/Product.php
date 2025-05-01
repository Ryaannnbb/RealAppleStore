<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'path_produk',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
