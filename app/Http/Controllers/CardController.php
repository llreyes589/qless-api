<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function showAllCards(){
        return \App\Models\Card::all();
    }
}
