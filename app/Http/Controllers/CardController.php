<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Card;

class CardController extends Controller
{
    public function showAllCards(){
        return Card::select(['id', 'discount_number', 'load', 'expires_at', 'created_at'])->get();
    }

    public function showCard($id){
        return Card::find($id);
    }
    public function update($id){
        // return \request()->all();
        $card = Card::find($id);
        $card->update(['discount_number' => \request()->discount_number]);
        return $card;
    }
}
