<?php

use Illuminate\Database\Seeder;
use App\Profile;


class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'type' => 'Admin'
        ]);
        Profile::create([
            'type' => 'Cliente'
        ]);
        Profile::create([
            'type' => 'Fornecedor'
        ]);
    }
}
