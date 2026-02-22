<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['value', 'description', 'option_id'];
    // uno  amuchos inversa
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
    // muchos a muchos inversa
    public function variants()
    {
        return $this->belongsToMany(Variant::class)
            ->withTimestamps();
    }
}
