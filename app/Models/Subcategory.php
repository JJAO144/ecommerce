<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'category_id'];

    // uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
