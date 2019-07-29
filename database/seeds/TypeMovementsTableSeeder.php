<?php

use Illuminate\Database\Seeder;
use App\TypeMovement;

class TypeMovementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeMovement::create([
            'type' => 'Crédito'
        ]);
        TypeMovement::create([
            'type' => 'Resgate'
        ]);
    }
}
