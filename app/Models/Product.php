<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\Category;

class Product extends Model
{
    use HasFactory;


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
