<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'name', 'description', 'image_path', 'price', 'subcategory_id'];
    // uno a muchos inversa
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // uno a muchos
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
    //muchos a muchos
    public function options()
    {
        return $this->belongsToMany(Option::class)
            ->withPivot('value')
            ->withTimestamps();
    }
}
