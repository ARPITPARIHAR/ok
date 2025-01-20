<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function banners()
    {
        return $this->hasMany(Banner::class, 'subcategory_id');
    }
}
