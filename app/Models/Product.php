<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }


    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }


    public function colors()
    {
        return $this->hasMany(ProductColor::class);
    }

}
