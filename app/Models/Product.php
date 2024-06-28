<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = [
        'name',
        'price',
        'number_of_pages',
        'author',
        'description',
        'category_id',
        'discount',
        'code',
        'price_after_discount',
        'stock',
        'image',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
