<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = ['id', 'name', 'imageUrl', 'category_id', 'description', 'price'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
