<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['card_id', 'line_no', 'entry', 'exit', 'fare', 'discount'];
}
