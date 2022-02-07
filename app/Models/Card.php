<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $fillable = ['discount_number', 'load', 'expires_at'];

    public function transactions(){
        return $this->hasMany('\App\Models\Transaction');
    }
    
    public function reloads(){
        return $this->hasMany('\App\Models\Reloading');

    }
}
