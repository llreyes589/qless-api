<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        \App\Models\Card::create([
            'discount_number' => '12-3456-7890',
            'load' => 190,
            'expires_at' => $now->add(5, 'year')
        ]);
        \App\Models\Card::create([
            'discount_number' => null,
            'load' => 300,
            'expires_at' => $now->add(5, 'year')
        ]);
        \App\Models\Card::create([
            'discount_number' => '3333-3456-7890',
            'load' => 270,
            'expires_at' => $now->add(5, 'year')
        ]);
    }
}
