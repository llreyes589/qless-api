<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Card;
use \Carbon\Carbon;

class CardController extends Controller
{
    public function showAllCards(){
        return Card::select(['id', 'discount_number', 'load', 'expires_at', 'created_at'])->orderBy('id', 'desc')->get();
    }

    public function showCard($id){
        return Card::find($id);
    }
    public function update($id){
        $card = Card::find($id);
        $card->update(['discount_number' => \request()->discount_number]);
        return $card;
    }
    public function create(){
        $now = Carbon::now();
        $newCard =  Card::create(['expires_at' => $now->add(5, 'year')]);
        return $newCard->fresh();
    }
    
}
