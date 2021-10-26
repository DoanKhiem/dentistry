<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'description',
        'img'
    ];
    public function productToCategory(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function productToBrand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }

    public function scopeSearch($query){
        if ($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}
