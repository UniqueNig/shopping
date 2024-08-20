<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'quantity',
        'amount',
        'description',
        'information',
        'coupon',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

    public function colours(){
        return $this->belongsToMany(Colour::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
