<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'user_id' => '2',
            'cpf' => '01623218640',
            'value_cash' => '400'
        ]);
    }
}
