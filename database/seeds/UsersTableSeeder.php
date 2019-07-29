<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Samuel Henrique S. Monção',
            'phone' => '31993679444',
            'email' => 'samuel@digitalhawk.com.br',
            'password' => bcrypt('123456'),
            'profile_id' => '3'
        ]);
        User::create([
            'name' => 'Heitor Carlos de Souza',
            'phone' => '31986139620',
            'email' => 'heitor.souza@digitalhawk.com.br',
            'password' => bcrypt('123456'),
            'profile_id' => '2'
        ]);
    }
}
