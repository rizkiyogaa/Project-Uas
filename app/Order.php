<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function menu() {
        return $this->belongsTo(Menu::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
