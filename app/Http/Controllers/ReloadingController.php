<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Card;
use \App\Models\Reloading;


class ReloadingController extends Controller
{
    public function save(){
        $card = Card::find(\request()->cardId);
        $total_load = $card->load + \request()->amount;
        $card->update(['load' => $total_load]);

        \request()->merge(['card_id' => \request()->cardId]);
        $reloading = Reloading::create(\request()->except('cardId'));
        return $card;
    }
}
