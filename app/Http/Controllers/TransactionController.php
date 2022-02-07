<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Transaction;
use \App\Models\Card;

class TransactionController extends Controller
{
    public function create(){
        $card = Card::with('transactions')->find(\request()->card_id);
        $total_load = $card->load - \request()->fare;
        $card->update(['load' => $total_load, 'expires_at' => $card->updated_at->add(5, 'year')]);
        $card->transactions()->create(\request()->all());
        return $card->load('transactions');
    }
}
