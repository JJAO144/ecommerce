<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //uno a muchos
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
