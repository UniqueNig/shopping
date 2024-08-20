<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pdescription',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function types(){
        return $this->hasMany(Type::class);
    }
}
