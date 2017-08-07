<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['user_id', 'totalPrice', 'title', 'description'];

    public function owner() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
